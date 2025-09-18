<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import { Plus } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import Datatable from '@/Components/Datatable.vue';
import { computed } from 'vue';
import ClientLayout from '@/Layouts/ClientLayout.vue';

const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Order No.", key: "link" },
  { label: "Order Date", key: "order_date" },
  { label: "Delivery Date", key: "delivery_date" },
  { label: "Working Status", key: "working_status" },
  { label: "Billing Status", key: "billing_status" },
  { label: "Action", key: "actions" },
];

const datas = [{
    'id':1,
    'link':'0001',
    'order_date':'2025/01/01',
    'delivery_date':'2025/01/01',
    'client':'Bishal Chaudhary',
    'order_status':'New',
    'working_status':'Pending',
    'billing_status':'Unbilled',
},
{
    'id':1,
    'link':'0002',
    'order_date':'2025/01/01',
    'delivery_date':'2025/01/01',
    'client':'Bishal Chaudhary',
    'order_status':'service_listed',
    'working_status':'Pending',
    'billing_status':'Unbilled',
},
{
    'id':1,
    'link':'0003',
    'order_date':'2025/01/01',
    'delivery_date':'2025/01/01',
    'client':'Bishal Chaudhary',
    'order_status':'in_progress',
    'working_status':'Pending',
    'billing_status':'Unbilled',
},
{
    'id':1,
    'link':'0004',
    'order_date':'2025/01/01',
    'delivery_date':'2025/01/01',
    'client':'Bishal Chaudhary',
    'order_status':'completed',
    'working_status':'Completed',
    'billing_status':'Billed',
},
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
    <ClientLayout>
        <div class="flex justify-between items-center">
            <Breadcrumb :items="[{ name: 'Orders' }]" />
            <Link :href="route('client.order.create')" class="flex items-center bg-primary pr-3 pl-5 py-2 rounded shadow shadow-primary text-white hover:bg-primary-dark">
                <component :is="Plus" class="h-[15px]"/>
                <span class="text-[12px]">New Order</span>
            </Link>
        </div>
        <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary">
             <Datatable :columns="columns" :data="tableData" exportTitle="Sales List"  :showUrl="route('client.order.show')">

             </Datatable>
        </div>
    </ClientLayout>
</template>
