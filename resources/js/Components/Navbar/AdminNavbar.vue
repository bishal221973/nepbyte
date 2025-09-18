<script setup>
import { ref, onMounted, onBeforeUnmount } from "vue";
import { Menu,Bell,User } from "lucide-vue-next";
import Notification from "../Notification.vue";
// import ThemeToggle from "../ThemeToggle.vue";
const showNotification = ref(false);

// Refs for the bell button and notification dropdown
const bellRef = ref(null);
const notificationRef = ref(null);


</script>

<template>
  <div class="bg-white p-3 rounded-md shadow-sm shadow-primary relative">
    <div class="flex justify-between">
      <button>
        <component :is="Menu" class="h-[16px]" />
      </button>
      <div class="flex gap-5">
        <ThemeToggle/>
        <Notification/>
        <div class="flex gap-2">
          <component :is="User" class="h-[18px]" />
          <span class="text-[12px]">{{ $page?.props?.auth?.user?.name }}</span>
        </div>
      </div>

      <div class="absolute right-[100px] h-[390px] top-[45px]" v-if="showNotification" ref="notificationRef">
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
          <hr  />
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
          <hr/>
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
          <hr/>
          <div class="px-3">
            <button class="text-[12px] w-full bg-primary py-2 mt-2 rounded shadow shadow-primary text-white hover:bg-primary-dark">
                Show all notification
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
