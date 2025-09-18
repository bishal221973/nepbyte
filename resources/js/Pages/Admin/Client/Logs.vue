<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed, ref } from "vue";
import ClientShowLayout from "@/Layouts/ClientShowLayout.vue";
import BrowsImage from "@/Components/BrowsImage.vue";

const currentTab = ref("all");

const switchTab = (tab) => {
  currentTab.value = tab;
};

const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Date", key: "date" },
  { label: "Activities", key: "remarks" },
];

const datas = [
  {
    id: 1,
    date: "2025/01/01",
    remarks: "Client loged in",
  },
   {
    id: 1,
    date: "2025/01/01",
    remarks: "Received through esewa",
  },

  {
    id: 1,
    date: "2025/01/01",
    remarks: "Received through khalti",
  },
  {
    id: 1,
    date: "2025/01/01",
    remarks: "Received through cash",
  },
  {
    id: 1,
    date: "2025/01/01",
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
        :items="[{ name: 'Clients', href: route('client.index') }, { name: 'Show' },{ name: 'Client Logs' }]"
      />
    </div>

    <ClientShowLayout>

      <Datatable
        :columns="columns"
        :data="tableData"
        exportTitle="Sales List"
        :showUrl="route('client.show')"
      />
    </ClientShowLayout>
  </AppLayout>
</template>
