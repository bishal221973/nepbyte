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
  { label: "Payment Method", key: "payment_method" },
  { label: "Payment Date", key: "date" },
  { label: "Paid Amount", key: "amount" },
  { label: "Remarks", key: "remarks" },
];

const datas = [
  {
    id: 1,
    payment_method: "Esewa",
    date: "2025/01/01",
    amount: "1000",
    remarks: "Received through esewa",
  },
  {
    id: 1,
    payment_method: "Khalti",
    date: "2025/01/01",
    amount: "1000",
    remarks: "Received through khalti",
  },
  {
    id: 1,
    payment_method: "Cash",
    date: "2025/01/01",
    amount: "1000",
    remarks: "Received through cash",
  },
  {
    id: 1,
    payment_method: "Bank Transfer",
    date: "2025/01/01",
    amount: "1000",
    remarks: "Received through bank transfer",
  },


];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    payment_method: item.payment_method,
    date: item.date,
    amount: "Rs. "+item.amount,
    remarks:item.remarks,
  }))
);
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[{ name: 'Vendors', href: route('vendor.index') }, { name: 'Show' },{ name: 'Payment History' }]"
      />
    </div>

    <VendorShowLayout>

      <Datatable
        :columns="columns"
        :data="tableData"
        exportTitle="Sales List"
        :showUrl="route('client.show')"
      />
    </VendorShowLayout>
  </AppLayout>
</template>
