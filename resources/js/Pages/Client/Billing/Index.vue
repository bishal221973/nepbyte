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
  { label: "Bill No", key: "bill_no" },
  { label: "Amount", key: "amount" },
  { label: "Discount", key: "discount" },
  { label: "Vatable Amount", key: "vatable_amt" },
  { label: "VAT", key: "vat" },
  { label: "TDS", key: "tds" },
  { label: "Total", key: "total" },
  { label: "Remarks", key: "remarks" },
  { label: "Status", key: "status1" },
  { label: "Received ", key: "received" },
  { label: "Receivable ", key: "receivable" },
  { label: "Action", key: "actions" },
];

const datas = [{
    'id':1,
    'link':'0001',
    'bill_no':'0001',
    'amount':'Rs. 5000',
    'discount':'Rs. 00',
    'vatable_amt':'Rs. 5000',
    'vat':'Rs. 00',
    'tds':'Rs. 00',
    'total':'Rs.5000',
    'remarks':'Remarks goes here',
    'status1':'Partially Paid',
    'received':'Rs. 2500',
    'receivable':'Rs. 2500',
},
];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    link: item.link,
    bill_no: item.bill_no,
    amount: item.amount,
    discount: item.discount,
    vatable_amt: item.vatable_amt,
    vat: item.vat,
    tds: item.tds,
    total: item.total,
    remarks: item.remarks,
    status1: item.status1,
    received: item.received,
    receivable: item.receivable,
  }))
);
</script>
<template>
    <ClientLayout>
        <div class="flex justify-between items-center">
            <Breadcrumb :items="[{ name: 'Billing' }]" />

        </div>
        <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary">
             <Datatable :columns="columns" :data="tableData" exportTitle="Sales List" :serviceList="route('order.service.list')" :showUrl="route('order.show')">
                <template #invoice>
                    <Link :href="route('order.service.list')"
                    class="bg-primary h-[25px] w-[30px] flex items-center gap-1 px-3 py-2 font-semibold text-white rounded-lg shadow-md transition-all duration-300"
                  >
                    <i class="fa fa-list relative right-[2px] text-[10px]"></i>
                  </Link>
                </template>
             </Datatable>
        </div>
    </ClientLayout>
</template>
