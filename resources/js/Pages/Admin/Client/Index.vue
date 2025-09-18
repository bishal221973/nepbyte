<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import { Plus } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3';
import Datatable from '@/Components/Datatable.vue';
import { computed } from 'vue';

const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Profile", key: "image" },
  { label: "Client", key: "link" },
  { label: "Contact", key: "contact" },
  { label: "Address", key: "address" },
  { label: "Total Order", key: "total_order" },
  { label: "Total Amount", key: "total_amount" },
  { label: "Received Amount", key: "paid_amount" },
  { label: "Receivable Amount", key: "dues_amount" },
  { label: "Action", key: "actions" },
];

const datas = [{
    'id':1,
    'image':'/images/sample.png',
    'link':'Bishal Chaudhary',
    'contact':'9814668499',
    'address':'Nepalgunj',
    'total_order':'5',
    'total_amount':'12000',
    'paid_amount':'1000',
    'dues_amount':'10000',
},
{
    'id':1,
    'image':'/images/sample.png',
    'link':'Bishal Chaudhary',
    'contact':'9814668499',
    'address':'Nepalgunj',
    'total_order':'5',
    'total_amount':'12000',
    'paid_amount':'1000',
    'dues_amount':'10000',
},
{
    'id':1,
    'image':'/images/sample.png',
    'link':'Bishal Chaudhary',
    'contact':'9814668499',
    'address':'Nepalgunj',
    'total_order':'5',
    'total_amount':'12000',
    'paid_amount':'1000',
    'dues_amount':'10000',
},
{
    'id':1,
    'image':'/images/sample.png',
    'link':'Bishal Chaudhary',
    'contact':'9814668499',
    'address':'Nepalgunj',
    'total_order':'5',
    'total_amount':'12000',
    'paid_amount':'1000',
    'dues_amount':'10000',
}];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    image: item.image,
    link: item.link,
    contact: item.contact,
    address: item.address,
    total_order: + item.total_order + ' Orders',
    total_amount: "Rs. " + item.total_amount,
    paid_amount: "Rs. " + item.paid_amount,
    dues_amount: "Rs. "+item.dues_amount,
    actions: item.id,
  }))
);
</script>
<template>
    <AppLayout>
        <div class="flex justify-between items-center">
            <Breadcrumb :items="[{ name: 'Clients' }]" />
            <Link :href="route('client.create')" class="flex items-center bg-primary pr-3 pl-5 py-2 rounded shadow shadow-primary text-white hover:bg-primary-dark">
                <component :is="Plus" class="h-[15px]"/>
                <span class="text-[12px]">Add Client</span>
            </Link>
        </div>
        <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary">
             <Datatable :columns="columns" :data="tableData" exportTitle="Sales List" :showUrl="route('client.show')"/>
        </div>
    </AppLayout>
</template>
