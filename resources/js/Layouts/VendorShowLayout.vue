<script setup>
import { Mail, User, Phone } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
</script>
<template>
  <div class="flex gap-5">
    <div style="width: 250px">
      <div
        class="bg-white w-full p-3 relative rounded-md shadow-md shadow-primary"
        style="top: 60px; height: calc(100vh - 163px)"
      >
        <img :src="'/images/user.png'" class="profile" alt="" />

        <div style="margin-top: 75px">
          <span class="text-[10px] font-bold block text-center">#2082001</span>
          <span class="text-[13px] font-bold block text-center">Bishal Chaudhary</span>

          <hr class="mt-3" />

          <div class="flex items-center gap-2 mt-3">
            <component :is="Mail" class="h-[15px]" />
            <span class="text-[12px]">bishalcodeslaravel@gmail.com</span>
          </div>
          <div class="flex items-center gap-2 mt-1">
            <component :is="Phone" class="h-[15px]" />
            <span class="text-[12px]">+977-9814668499</span>
          </div>
          <hr class="mt-3" />
          <div class="flex items-center gap-2 mt-3 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Total Order</span>
            <span class="text-[12px] text-gray-700">10 Orders</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Net Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Discount Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Sub Total</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">VAT Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">TDS Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Total Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <hr class="mt-3" />
          <div class="flex items-center gap-2 mt-3 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Paid Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Payable Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <hr class="mt-3" />
          <div class="mt-3 mb-2">
            <span class="text-[12px] text-gray-500 font-bold block">Remarks</span>
            <span class="text-[12px] text-gray-700"
              >Lorem Ipsum is simply dummy text of the printing and typesetting ...</span
            >
          </div>
        </div>
      </div>
    </div>
    <div class="w-full relative pt-2">
      <div class="flex gap-3">
        <Link :href="route('vendor.show')"
          class=" py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded"
          :class="$page?.props?.menu == 'generalClient' ? 'bg-primary' : 'bg-gray-400'"
          >General Info</Link
        >
        <Link :href="route('vendor.security')"
          class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded"
          :class="$page?.props?.menu == 'securityClient' ? 'bg-primary' : 'bg-gray-400'"
          >Security</Link
        >
        <Link :href="route('vendor.orders')"
          class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded"
          :class="$page?.props?.menu == 'ordersClient' ? 'bg-primary' : 'bg-gray-400'"
          >Assigned Orders</Link
        >
        <Link :href="route('vendor.paymentHistory')"
          class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded"
          :class="$page?.props?.menu == 'paymentHistoryClient' ? 'bg-primary' : 'bg-gray-400'"
          >Payment History</Link
        >
        <Link :href="route('vendor.logs')"
          class="py-2 px-3 text-[13px] text-white shadow shadow-primary hover:bg-primary-dark rounded"
          :class="$page?.props?.menu == 'logsClient' ? 'bg-primary' : 'bg-gray-400'"
          >Vendor Logs</Link
        >
      </div>

      <div class="w-full bg-white mt-3 p-3 rounded shadow shadow-primary" style="min-height:calc(100vh - 163px)">
        <slot/>
      </div>
    </div>
  </div>
</template>

<style scoped>
.profile {
  height: 120px !important;
  position: absolute;
  top: -45px;
  background-color: #337180;
  border-radius: 20px;
  left: 50px;
}
</style>
