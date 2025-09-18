<script setup>
import { ref, computed, onMounted, onBeforeUnmount, watch, nextTick } from "vue";

const props = defineProps({
  modelValue: [String, Number],
  datas: {
    type: Array,
    required: true,
  },
  placeholder: String,
  customFunction: Function,
  index: Number,
});

const emit = defineEmits(["update:modelValue"]);

const isOpen = ref(false);
const searchQuery = ref("");
const dropdownRef = ref(null);
const searchInputRef = ref(null);
const highlightedIndex = ref(-1);

const selectedItem = computed({
  get: () => props.modelValue,
  set: (val) => emit("update:modelValue", val),
});

const filteredOptions = computed(() => {
  if (!searchQuery.value) return props.datas;
  return props.datas.filter((item) =>
    item.label.toLowerCase().includes(searchQuery.value.toLowerCase())
  );
});

// open / close helpers
const openDropdown = async () => {
  if (isOpen.value) {
    // if already open, just focus input
    await nextTick();
    searchInputRef.value?.focus();
    return;
  }
  isOpen.value = true;
  highlightedIndex.value = -1;
  // initially show current label in search so user can edit
  searchQuery.value = getVal();
  await nextTick();
  searchInputRef.value?.focus();
};

const closeDropdown = () => {
  isOpen.value = false;
  highlightedIndex.value = -1;
  // reset search to selected label when closing
  searchQuery.value = getVal(selectedItem.value);
};

const toggleDropdown = () => {
  if (isOpen.value) closeDropdown();
  else openDropdown();
};

const selectItem = (val) => {
  selectedItem.value = val;
  closeDropdown();
};

// click outside
const handleClickOutside = (event) => {
  if (dropdownRef.value && !dropdownRef.value.contains(event.target)) {
    closeDropdown();
  }
};

// keyboard navigation (global listener but only acts when open)
const handleKeydown = (event) => {
  if (!isOpen.value) return;

  const len = filteredOptions.value.length;
  if (len === 0) {
    if (event.key === "Escape") closeDropdown();
    return;
  }

  if (event.key === "ArrowDown") {
    event.preventDefault();
    highlightedIndex.value = (highlightedIndex.value + 1 + len) % len;
    scrollHighlightedIntoView();
  } else if (event.key === "ArrowUp") {
    event.preventDefault();
    highlightedIndex.value = (highlightedIndex.value - 1 + len) % len;
    scrollHighlightedIntoView();
  } else if (event.key === "Enter") {
    event.preventDefault();
    if (highlightedIndex.value >= 0) {
      selectItem(filteredOptions.value[highlightedIndex.value].val);
    }
  } else if (event.key === "Escape") {
    closeDropdown();
  }
};

// ensure highlighted element is visible
const scrollHighlightedIntoView = () => {
  // tiny DOM query to scroll highlighted li into view
  nextTick(() => {
    const list = dropdownRef.value?.querySelectorAll(".option-item");
    if (list && highlightedIndex.value >= 0 && list[highlightedIndex.value]) {
      list[highlightedIndex.value].scrollIntoView({ block: "nearest" });
    }
  });
};

onMounted(() => {
  document.addEventListener("click", handleClickOutside);
  document.addEventListener("keydown", handleKeydown);
  // init searchQuery based on current selection
  searchQuery.value = getVal(selectedItem.value);
});

onBeforeUnmount(() => {
  document.removeEventListener("click", handleClickOutside);
  document.removeEventListener("keydown", handleKeydown);
});

// react to external modelValue changes
watch(
  () => props.modelValue,
  () => {
    // update search display (but do not open/close)
    searchQuery.value = getVal(props.modelValue);
    if (props?.customFunction) props.customFunction(props.modelValue, props.index);
  }
);

// helper: get label from value
const getVal = (val) => {
  if (val === null || val === undefined || val === "") return "";
  const found = props.datas.find((item) => item.val == val);
  return found ? found.label : "";
};
</script>

<template>
  <section ref="dropdownRef" class="dropdown-wrapper  w-full rounded relative">
    <!-- use a button as trigger for accessibility -->
    <button
      type="button"
      class="selected-items h-[30px] w-full rounded px-[10px] flex justify-between items-center text-[14px]"
      aria-haspopup="listbox"
      :aria-expanded="isOpen"
      @click="toggleDropdown"
    >
      <!-- @focus="toggleDropdown" -->
      <!-- @click="toggleDropdown" -->
      <span class="text-[12px] truncate">{{ getVal(selectedItem) || placeholder }}</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>

    <div v-if="isOpen" class="dropdown-popover absolute border w-full mt-1 px-3 py-2 border-gray-300 rounded bg-white z-[999] shadow">
      <!-- search -->
      <input
        ref="searchInputRef"
        v-model="searchQuery"
        type="text"
        placeholder="Search..."
        class="w-full mb-2 px-2 py-1 rounded text-[12px] border"
      />

      <ul class="options max-h-40 overflow-y-auto" role="listbox" :aria-activedescendant="highlightedIndex >= 0 ? 'opt-'+highlightedIndex : null">
        <li
          v-for="(data, index) in filteredOptions"
          :key="data.val"
          :id="'opt-'+index"
          class="option-item py-1 px-2 cursor-pointer rounded text-[12px] hover:bg-gray-100"
          :class="index === highlightedIndex ? 'bg-gray-200' : ''"
          @click="selectItem(data.val)"
        >
          {{ data.label }}
        </li>

        <li v-if="filteredOptions.length === 0" class="text-gray-400 text-[12px] py-1 px-2">No match found</li>
      </ul>
    </div>
  </section>
</template>

<style scoped>
.dropdown-wrapper { position: relative; }
.selected-items span { display: block; max-width:100%; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
</style>
