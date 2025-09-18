<script setup>
import ClientLayout from "@/Layouts/ClientLayout.vue";
import Greeding from "@/Components/Greeding.vue";
import DashboardCard from "@/Components/DashboardCard.vue";
</script>
<template>
  <ClientLayout>
    <div class="grid grid-cols-12">
      <div class="col-span-4 gap-3">
        <Greeding />
      </div>
      <div class="col-span-8 ml-3">
        <div class="grid grid-cols-12 gap-3">
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#B3FFB3'"
              title="Total Orders"
              total="1000+"
              number="200"
              :image="'/images/bill.png'"
              class="py-[16px]"
            />
          </div>
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#ECD9C6'"
              title="Total Paid Amount"
              total="1000+"
              number="200"
              :image="'/images/money.png'"
              class="py-[16px]"
            />
          </div>
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#FFFFCC'"
              title="Total Payable Amount"
              total="1000+"
              number="200"
              :image="'/images/money1.png'"
              class="py-[16px]"
            />
          </div>
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#FFCCCC'"
              title="Pending Orders"
              total="1000+"
              number="200"
              :image="'/images/pending.png'"
              class="py-[16px]"
            />
          </div>
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#CCCCFF'"
              title="Processing Orders"
              total="1000+"
              number="200"
              :image="'/images/processing.png'"
              class="py-[16px]"
            />
          </div>
          <div class="col-span-4">
            <DashboardCard
              :bgColor="'#CCFFFF'"
              title="Completed Orders"
              total="1000+"
              number="200"
              :image="'/images/completed.png'"
              class="py-[16px]"
            />
          </div>

        </div>
      </div>
    </div>
  </ClientLayout>
</template>
