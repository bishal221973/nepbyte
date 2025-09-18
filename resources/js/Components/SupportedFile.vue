<script setup>
import { ref } from "vue";
import Modal from "./Modal.vue";

const isModalOpen = ref(false);

const openModal = () => {
  isModalOpen.value = true;
};

const closeModal = () => {
  isModalOpen.value = false;
};

const print = () => {
  window.print();
};
</script>
<template>
  <button
    class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded bg-primary/50"
    @click="openModal"
  >
    Supported Files
  </button>

  <Modal :show="isModalOpen">
    <div class="bg-white p-3">
      <span class="block text-center font-bold uppercase">Supported Files</span>

      <div class="flex justify-between mt-5">
        <div class="block">
          <span class="block">
            <span class="font-bold text-[14px]">S.N : </span>
            <span class="text-[14px]">1</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Service : </span>
            <span class="text-[14px]">Flex Banner Print</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Size : </span>
            <span class="text-[14px]">5X6</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Approved By : </span>
            <span class="text-[14px]">Bishal Chaudhary</span>
          </span>
        </div>

        <img :src="'/images/banner.jpeg'" class="h-[100px]" alt="" />
      </div>

      <hr class="my-5">
      <div class="flex justify-between mt-5">
        <div class="block">
          <span class="block">
            <span class="font-bold text-[14px]">S.N : </span>
            <span class="text-[14px]">1</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Service : </span>
            <span class="text-[14px]">Flex Banner Print</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Size : </span>
            <span class="text-[14px]">5X6</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Approved By : </span>
            <span class="text-[14px]">Bishal Chaudhary</span>
          </span>
        </div>

        <img :src="'/images/banner.jpeg'" class="h-[100px]" alt="" />
      </div>

      <hr class="my-5">
      <div class="flex justify-between mt-5">
        <div class="block">
          <span class="block">
            <span class="font-bold text-[14px]">S.N : </span>
            <span class="text-[14px]">1</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Service : </span>
            <span class="text-[14px]">Flex Banner Print</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Size : </span>
            <span class="text-[14px]">5X6</span>
          </span>
          <span class="block">
            <span class="font-bold text-[14px]">Approved By : </span>
            <span class="text-[14px]">Bishal Chaudhary</span>
          </span>
        </div>

        <img :src="'/images/banner.jpeg'" class="h-[100px]" alt="" />
      </div>
<div class="print:hidden mt-5">
            <hr>
            <div class="flex justify-end mt-3 gap-3">
                <button @click="closeModal" class="bg-primary/60 px-3 py-1 rounded shadow shadow-primary text-white">Close</button>
                <button @click="print" class="bg-primary px-3 py-1 rounded shadow shadow-primary text-white">Print</button>
            </div>
        </div>
    </div>
  </Modal>
</template>
