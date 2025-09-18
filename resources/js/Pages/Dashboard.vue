<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import DashboardCard from "@/Components/DashboardCard.vue";
import IncomeChart from "@/Components/Charts/IncomeChart.vue";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";
import TopClient from "@/Components/TopClient.vue";

const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Client", key: "invoice_number" },
  { label: "Order", key: "date" },
  { label: "Price", key: "student" },
  { label: "Order Status", key: "discount" },
  { label: "Billing", key: "vat" },
];

const datas = [];
const tableData = computed(() =>
  datas.map((item, index) => ({
    sn: index + 1,
    invoice_number: String(item.invoice_no).padStart(4, 0),
    date: item.sales_date,
    student: item.student?.name,
    discount: "Rs. " + item.total_discount,
    vat: "Rs. " + item.total_vat,
    total: "Rs. " + item.total_amount,
    paid: "Rs. " + item.paid_amount,
    is_returned: item.is_returned,
    remaining:
      "Rs. " + Number(Number(item.total_amount) - Number(item?.paid_amount)).toFixed(2),
    actions: item.id,
  }))
);
</script>

<template>
  <AppLayout title="Dashboard">
    <!-- <Breadcrumb
      :items="[
        { name: 'Home', href: '/' },
        { name: 'Dashboard', href: '/dashboard' },
        { name: 'Settings' },
      ]"
    /> -->
    <Breadcrumb :items="[{ name: 'Dashboard' }]" />

    <div class="grid grid-cols-6 gap-3 mt-3">
      <DashboardCard
        :bgColor="'#9CB5E3'"
        title="Total Clients"
        total="1000+"
        number="200"
        :image="'/images/users.png'"
      />
      <DashboardCard
        :bgColor="'#FF9999'"
        title="Total Vendors"
        total="1000+"
        number="200"
        :image="'/images/user1.png'"
      />
      <DashboardCard
        :bgColor="'#B3FFB3'"
        title="Total Orders"
        total="1000"
        number="200"
        :image="'/images/bill.png'"
      />
      <DashboardCard
        :bgColor="'#ECD9C6'"
        title="Total Receivable"
        total="1000"
        :image="'/images/money.png'"
      />
      <DashboardCard
        :bgColor="'#FFFFCC'"
        title="Total Payable"
        total="1000"
        :image="'/images/money1.png'"
      />
      <DashboardCard
        :bgColor="'#f5b60c'"
        title="Total Paid"
        total="1000"
        :image="'/images/money.png'"
      />
    </div>

    <div class="grid grid-cols-12 mt-3 gap-3">
      <div class="col-span-4">
        <div class="bg-white w-full h-[300px] rounded shadow shadow-primary">
          <IncomeChart />
        </div>
      </div>
      <div class="col-span-4">
        <div class="bg-white w-full h-[300px] rounded shadow shadow-primary">
          <IncomeChart />
        </div>
      </div>
      <div class="col-span-4">
        <div class="bg-white w-full h-[300px] rounded shadow shadow-primary">
          <IncomeChart />
        </div>
      </div>

      <div class="col-span-8">
        <div class="bg-white w-full h-[300px] rounded shadow shadow-primary">
          <div class="flex justify-between p-3 items-center">
            <span class="text-[13px] font-bold uppercase"> Recent Orders </span>

            <Link
              class="text-[13px] bg-primary text-white py-1 px-3 rounded shadow shadow-primary hover:bg-primary-dark"
              >View More</Link
            >
          </div>
          <hr />
          <Datatable :columns="columns" :data="tableData" exportTitle="Sales List" />
        </div>
      </div>

       <div class="col-span-4">
            <TopClient/>
      </div>
    </div>
  </AppLayout>
</template>
