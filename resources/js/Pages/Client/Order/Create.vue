<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { reactive } from "vue";
import ClientLayout from "@/Layouts/ClientLayout.vue";

// Reactive rows array
const rows = reactive([
  {
    description: "",
    unit: "",
    size: "",
    qty: "",
    sample: null,
  },
]);

// Add new row
const addRow = () => {
  rows.push({
    description: "",
    unit: "",
    size: "",
    qty: "",
    sample: null,
  });
};

// Remove row by index
const removeRow = (index) => {
  if (rows.length > 1) rows.splice(index, 1);
};
</script>

<template>
  <ClientLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[
          { name: 'Orders', href: route('client.order.index') },
          { name: 'Create' },
        ]"
      />
    </div>
    <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary">
      <div class="grid grid-cols-12 gap-3">
        <div class="col-span-4">
          <label for="">Order No.</label>
          <input type="text" class="input" value="0001" readonly />
        </div>
        <div class="col-span-4">
          <label for="">Order Date</label>
          <input type="date" class="input" />
        </div>
        <div class="col-span-4">
          <label for="">Delivery Date</label>
          <input type="date" class="input" />
        </div>
      </div>

      <table class="w-full mt-3">
        <thead class="bg-primary text-white">
          <tr>
            <th class="py-2 text-left px-3">S.N.</th>
            <th class="py-2 text-left px-3">Description</th>
            <th class="py-2 text-left px-3">Unit</th>
            <th class="py-2 text-left px-3" style="width:200px">Size</th>
            <th class="py-2 text-left px-3" style="width:100px">Qty</th>
            <th class="py-2 text-left px-3" style="width:100px">Sample</th>
            <th class="py-2 text-left px-3" style="width:90px">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in rows" :key="index">
            <td class="border-[1px] border-gray-300 px-3">{{ index + 1 }}</td>
            <td class="border-[1px] border-gray-300 p-1">
              <textarea v-model="row.description" placeholder="Description" class="input" rows="1"></textarea>
            </td>
            <td class="border-[1px] border-gray-300 p-1">
              <select v-model="row.unit" class="input">
                <option value="">Select Unit</option>
                <option value="kg">Kg</option>
                <option value="pcs">Pcs</option>
                <option value="m">Meter</option>
              </select>
            </td>
            <td class="border-[1px] border-gray-300 p-1"><input type="text" placeholder="Size" v-model="row.size" class="input" /></td>
            <td class="border-[1px] border-gray-300 p-1"><input type="text" v-model="row.qty" placeholder="Qty" class="input" style="" /></td>
            <td class="border-[1px] border-gray-300 p-1">
              <input
                type="file"
                @change="(e) => (row.sample = e.target.files[0])"
                class="input"
              />
            </td>
            <td class="border-[1px] border-gray-300 p-1">
              <div class="flex gap-1">
                <button type="button" @click="addRow" class="text-green-700">
                  <i class="fa fa-plus"></i>
                </button>
                <button type="button" @click="removeRow(index)" class="text-red-700">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="w-full flex justify-end mt-3">
        <button class="bg-primary px-4 py-1 rounded text-white hover:bg-primary-dark">Save</button>
      </div>
    </div>
  </ClientLayout>
</template>
