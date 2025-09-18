<script setup>
import { ref, computed } from "vue";

const props = defineProps({
  columns: { type: Array, required: true },
  data: { type: Array, required: true },
  exportTitle: String,
});

const copiedMessage = ref(false);

const formatRow = (row) => {
  return props.columns
    .filter((col) => col.key !== "actions") // skip actions column
    .map((col) => {
      if (col.key === "status") {
        return row.status ? "Active" : "Deactive";
      }
      return row[col.key];
    });
};
// ✅ Copy function
const exportCopy = () => {
  const text = [
    props.columns
      .filter((c) => c.key !== "actions")
      .map((c) => c.label)
      .join("\t"), // header
    ...props.data.map((row) => formatRow(row).join("\t")), // rows
  ].join("\n");

  navigator.clipboard.writeText(text).then(() => {
    copiedMessage.value = true;
    setTimeout(() => (copiedMessage.value = false), 1500);
  });
};


</script>

<template>
  <button @click="exportCopy" class="royal-btn " id="exportCopy">
    <i class="fa-solid fa-copy text-[14px] text-primary hover:text-primary-dark"></i>
  </button>

  <div
    v-if="copiedMessage"
    class="absolute top-4 right-4 px-3 py-1 bg-[#D9A250] text-white text-[12px] rounded-lg shadow-lg animate-bounce z-50"
  >
    Copied!
  </div>
</template>

<style scoped>
.royal-btn {
  padding: 0.1rem 0.1rem;
  font-weight: 500;
  border: none;
  cursor: pointer;
  transition: all 0.2s;
}
.royal-btn:hover {
  filter: brightness(1.1);
}

@keyframes bounce {
  0%,
  100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-5px);
  }
}
.animate-bounce {
  animation: bounce 0.5s ease-in-out;
}

</style>
