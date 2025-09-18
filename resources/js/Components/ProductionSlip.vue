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

const print=()=>{
    window.print()
}
</script>
<template>
  <button
    class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded bg-primary/50"
    @click="openModal"
  >
    Production Slip
  </button>

  <Modal :show="isModalOpen">
    <div class="bg-white p-3">
      <span class="block text-center font-bold uppercase">Production Slip</span>

      <div class="flex justify-between mt-5">
        <span>
          <span class="font-bold text-[14px]">Order Number : </span>
          <span class="text-[14px]">0001</span>
        </span>

        <span>
          <span class="font-bold text-[14px]">Date : </span>
          <span class="text-[14px]">2025/01/01</span>
        </span>
      </div>
      <div class="flex justify-between">
        <span>
          <span class="font-bold text-[14px]">Customer Number : </span>
          <span class="text-[14px]">Bishal Chaudhary</span>
        </span>
      </div>
      <div class="flex justify-between">
        <span>
          <span class="font-bold text-[14px]">Address : </span>
          <span class="text-[14px]">Nepalgunj, Banke</span>
        </span>
      </div>


      <div class="mt-5">
        <slot/>

        <div class="flex mt-5 justify-between">
            <div class="block">
                <span class="text-[13px] block font-bold">Prepaid By</span>
                <span class="text-[13px] block">Bishal Chaudhary</span>
            </div>
            <div class="block">
                <span class="text-[13px] block font-bold">Approved By</span>
                <span class="text-[13px] block">Bishal Chaudhary</span>
            </div>
            <div class="block">
                <span class="text-[13px] block font-bold">Printed By</span>
                <span class="text-[13px] block">Bishal Chaudhary</span>
            </div>
        </div>

        <div class="print:hidden mt-5">
            <hr>
            <div class="flex justify-end mt-3 gap-3">
                <button @click="closeModal" class="bg-primary/60 px-3 py-1 rounded shadow shadow-primary text-white">Close</button>
                <button @click="print" class="bg-primary px-3 py-1 rounded shadow shadow-primary text-white">Print</button>
            </div>
        </div>
      </div>
    </div>
  </Modal>
</template>
