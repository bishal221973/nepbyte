<script setup>
import { ref } from "vue";
import Modal from "./Modal.vue";
import { useForm } from "@inertiajs/vue3";

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

const form = useForm({
  assigned_to: "Staff",
});
</script>
<template>
  <button
    class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded bg-primary/50"
    @click="openModal"
  >
    Assign Task
  </button>

  <Modal :show="isModalOpen" maxWidth="md">
    <div class="bg-white p-3">
      <span class="block text-center font-bold uppercase">Assign TAsk</span>

      <span class="text-[12px]">Assign To</span>
      <select class="input" v-model="form.assigned_to">
        <option value="Staff">Staff</option>
        <option value="Vendor">Vendor</option>
      </select>

      <div v-if="form.assigned_to == 'Staff'">
        <span class="text-[12px]">Staff</span>
        <select class="input">
          <option value="">Select Staff</option>
          <option value="">Bishal Chaudhary</option>
        </select>
      </div>

      <div v-if="form.assigned_to == 'Vendor'">
        <span class="text-[12px]">Vendor</span>
        <select class="input">
          <option value="">Select Vendor</option>
          <option value="">Bishal Chaudhary</option>
        </select>

        <span class="text-[12px]">Size</span>
        <div class="flex border-[1px] rounded-md border-gray-300 overflow-hidden">
          <input
            type="text"
            placeholder="Height"
            class="input border-0 border-r-[1px] focus:border-gray-200"
            style="border-radius: 0"
          />
          <input
            type="text"
            placeholder="Width"
            class="input border-0 focus:border-gray-400 focus:ring-0"
            style="border-radius: 0"
          />
        </div>

        <div class="flex gap-3">
          <div class="block">
            <span class="text-[12px]">Sqft</span>
            <input type="text" class="input" />
          </div>

          <div class="block">
            <span class="text-[12px]">Rate</span>
            <input type="text" class="input" />
          </div>
        </div>
        <div class="flex gap-3">
          <div class="block w-full">
            <span class="text-[12px]">Discount</span>
            <input type="text" class="input" />
          </div>

          <div class="block w-full">
            <span class="text-[12px]">Vatable</span>
            <select class="input w-full">
              <option value="">Yes</option>
              <option value="">No</option>
            </select>
          </div>
        </div>
          <span class="text-[12px]">Total Amount</span>
            <input type="text" class="input" />
      </div>

      <div class="print:hidden mt-5">
        <hr />
        <div class="flex justify-end mt-3 gap-3">
          <button
            @click="closeModal"
            class="bg-primary/60 px-3 py-1 rounded shadow shadow-primary text-white"
          >
            Close
          </button>
          <button
            class="bg-primary px-3 py-1 rounded shadow shadow-primary text-white"
          >
            Assign
          </button>
        </div>
      </div>
    </div>
  </Modal>
</template>
