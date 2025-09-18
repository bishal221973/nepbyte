<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed, ref } from "vue";
import VendorShowLayout from "@/Layouts/VendorShowLayout.vue";
import BrowsImage from "@/Components/BrowsImage.vue";

const currentTab = ref("all");

const switchTab = (tab) => {
  currentTab.value = tab;
};

const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Order", key: "order" },
  { label: "Price", key: "price" },
  { label: "Discount", key: "discount" },
  { label: "Sub Total", key: "subtotal" },
  { label: "Vat", key: "vat" },
  { label: "Total", key: "total_amount" },
  { label: "Billed Status", key: "billed" },
  { label: "Paid", key: "paid_amount" },
  { label: "Payable", key: "dues_amount" },
  { label: "Action", key: "actions" },
];

const datas = [
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },
  {
    id: 1,
    order: "00001",
    price: "950",
    discount: "100",
    subtotal: "2000",
    vat: "500",
    total_amount: "12000",
    billed: "Billed",
    paid_amount: "1000",
    dues_amount: "10000",
  },

];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    order: item.order,
    price: "Rs. "+item.price,
    discount: "Rs. "+item.discount,
    subtotal: "Rs. "+item.subtotal,
    vat: "Rs. "+item.vat,
    total_amount: "Rs. " + item.total_amount,
    paid_amount: "Rs. " + item.paid_amount,
    billed: item.billed,
    dues_amount: "Rs. " + item.dues_amount,
    actions: item.id,
  }))
);
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[{ name: 'Vendors', href: route('vendor.index') }, { name: 'Show' },{ name: 'Orders' }]"
      />
    </div>

    <VendorShowLayout>
      <div class="flex justify-center gap-5">
        <button
          class="text-[14px]"
          @click="switchTab('all')"
          :class="
            currentTab == 'all' ? 'text-primary font-bold underline' : 'text-gray-600'
          "
        >
          All
        </button>
        <button
          class="text-[14px]"
          @click="switchTab('pending')"
          :class="
            currentTab == 'pending' ? 'text-primary font-bold underline' : 'text-gray-600'
          "
        >
          Pending
        </button>
        <button
          class="text-[14px]"
          @click="switchTab('processing')"
          :class="
            currentTab == 'processing'
              ? 'text-primary font-bold underline'
              : 'text-gray-600'
          "
        >
          Processing
        </button>
        <button
          class="text-[14px]"
          @click="switchTab('completed')"
          :class="
            currentTab == 'completed'
              ? 'text-primary font-bold underline'
              : 'text-gray-600'
          "
        >
          Completed
        </button>
      </div>
      <hr class="mt-3" />
      <Datatable
        :columns="columns"
        :data="tableData"
        exportTitle="Sales List"
        :showUrl="route('client.show')"
      />
    </VendorShowLayout>
  </AppLayout>
</template>
