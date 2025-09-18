<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Bell } from "lucide-vue-next";
const showNotification = ref(false);

// Refs for the bell button and notification dropdown
const bellRef = ref(null);
const notificationRef = ref(null);

const toggleShowNotification = () => {
  showNotification.value = !showNotification.value;
};

const handleClickOutside = (event) => {
  // If click is outside both the bell icon and the dropdown
  if (
    showNotification.value &&
    notificationRef.value &&
    bellRef.value &&
    !notificationRef.value.contains(event.target) &&
    !bellRef.value.contains(event.target)
  ) {
    showNotification.value = false;
  }
};

onMounted(() => {
  document.addEventListener("click", handleClickOutside);
});

onBeforeUnmount(() => {
  document.removeEventListener("click", handleClickOutside);
});
</script>

<template>
  <button class="relative" @click="toggleShowNotification" ref="bellRef">
        <component :is="Bell" class="h-[18px]" />
        <span
          class="absolute -top-[8px] bg-primary h-[15px] w-[15px] rounded-full flex justify-center items-center text-[10px] text-white right-0"
          >0</span
        >
      </button>

      <div
        class="absolute right-[100px] h-[390px] top-[45px] bg-white z-50"
        v-if="showNotification"
        ref="notificationRef"
      >
        <div class="bg-white w-[280px] h-full rounded shadow shadow-primary z-50">
          <div class="pt-3">
            <span class="text-[12px] block text-center">Notifications</span>
            <hr class="mt-3" />
          </div>

          <Link :href="'#'" class="flex gap-3 items-center hover:bg-gray-200 p-3">
            <img
              :src="'/images/sample.png'"
              class="h-[40px] w-[40px] rounded-full shadow-sm shadow-primary"
              alt=""
            />
            <div class="block w-full">
              <div class="flex items-center justify-between">
                <b class="text-[12px]">Bishal Chaudhary</b>
                <small class="text-[9px]">a few moments ago</small>
              </div>
              <small class="block text-[12px] leading-tight text-gray-600">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </small>
            </div>
          </Link>
          <hr />
          <Link :href="'#'" class="flex gap-3 items-center hover:bg-gray-200 p-3">
            <img
              :src="'/images/sample.png'"
              class="h-[40px] w-[40px] rounded-full shadow-sm shadow-primary"
              alt=""
            />
            <div class="block w-full">
              <div class="flex items-center justify-between">
                <b class="text-[12px]">Bishal Chaudhary</b>
                <small class="text-[9px]">a few moments ago</small>
              </div>
              <small class="block text-[12px] leading-tight text-gray-600">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </small>
            </div>
          </Link>
          <hr />
          <Link :href="'#'" class="flex gap-3 items-center hover:bg-gray-200 p-3">
            <img
              :src="'/images/sample.png'"
              class="h-[40px] w-[40px] rounded-full shadow-sm shadow-primary"
              alt=""
            />
            <div class="block w-full">
              <div class="flex items-center justify-between">
                <b class="text-[12px]">Bishal Chaudhary</b>
                <small class="text-[9px]">a few moments ago</small>
              </div>
              <small class="block text-[12px] leading-tight text-gray-600">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </small>
            </div>
          </Link>
          <hr />
          <Link :href="'#'" class="flex gap-3 items-center hover:bg-gray-200 p-3">
            <img
              :src="'/images/sample.png'"
              class="h-[40px] w-[40px] rounded-full shadow-sm shadow-primary"
              alt=""
            />
            <div class="block w-full">
              <div class="flex items-center justify-between">
                <b class="text-[12px]">Bishal Chaudhary</b>
                <small class="text-[9px]">a few moments ago</small>
              </div>
              <small class="block text-[12px] leading-tight text-gray-600">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
              </small>
            </div>
          </Link>
          <hr />
          <div class="px-3">
            <button
              class="text-[12px] w-full bg-primary py-2 mt-2 rounded shadow shadow-primary text-white hover:bg-primary-dark"
            >
              Show all notification
            </button>
          </div>
        </div>
      </div>
</template>
