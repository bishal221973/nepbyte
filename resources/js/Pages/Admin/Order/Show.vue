<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link, useForm } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import Select from "@/Components/Select.vue";
import orderShowLayout from "@/Layouts/orderShowLayout.vue";


const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Sample", key: "link" },
  { label: "Service", key: "order_date" },
  { label: "Size", key: "delivery_date" },
  { label: "Sqft", key: "client" },
  { label: "Rate", key: "order_status" },
  { label: "Qty", key: "working_status" },
  { label: "Total", key: "billing_status" },
  { label: "Remarks", key: "billing_status" },
  { label: "Action", key: "actions" },
];

const datas = [
];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    link: item.link,
    order_date: item.order_date,
    delivery_date: item.delivery_date,
    client: item.client,
    order_status: item.order_status,
    working_status: item.working_status,
    billing_status: item.billing_status,
    actions: item.id,
  }))
);
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[
          { name: 'Orders', href: route('order.service.list') },
          { name: 'Service Listing' },
        ]"
      />
    </div>
    <orderShowLayout>
        <Datatable :columns="columns" :data="tableData" exportTitle="Sales List" :serviceList="route('order.service.list')" :showUrl="route('order.show')">
                <template #invoice>
                    <Link :href="route('order.service.list')"
                    class="bg-primary h-[25px] w-[30px] flex items-center gap-1 px-3 py-2 font-semibold text-white rounded-lg shadow-md transition-all duration-300"
                  >
                    <i class="fa fa-list relative right-[2px] text-[10px]"></i>
                  </Link>
                </template>
             </Datatable>
    </orderShowLayout>
  </AppLayout>
</template>

<style scoped>
.right-border {
  border-right: 1px solid #ccc;
  padding-right: 30px;
}
.bannerImg {
  height: 180px;
  width: 300px;
}
</style>
