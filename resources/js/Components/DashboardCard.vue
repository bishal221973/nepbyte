<script setup>
defineProps({
  bgColor: {
    type: String,
    default: "red", // default color if none provided
  },
  title:null,
  total:null,
  number:null,
  image:null,
});
</script>

<template>
  <div
    class="w-full p-3 rounded-md shadow shadow-primary cursor-pointer"
    :style="{ backgroundColor: bgColor }"
  >
    <div class="flex relative">
      <div class="block">
        <span class="block text-[10px] text-gray-600">{{title}}</span>
        <span class="block font-bold text-gray-900 text-[18px]">{{total}}</span>
        <span class="block text-[10px] text-gray-600 font-bold">{{number}}</span>
      </div>
      <img :src="image" class="absolute right-0 h-[70px] w-[60px] -top-1" alt="">
    </div>
  </div>
</template>
