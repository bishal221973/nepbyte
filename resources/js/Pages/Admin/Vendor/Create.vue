<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import BrowsImage from "@/Components/BrowsImage.vue";
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[{ name: 'Vendors', href: route('vendor.index') }, { name: 'Create' }]"
      />
    </div>
    <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary ">
      <div class="grid grid-cols-12 gap-3">
        <div class="col-span-6">
          <div class="grid grid-cols-12 gap-3">
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Vendor Name *</span>
                <input type="text" class="input" placeholder="Enter Vendor Name" />
              </div>
            </div>
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Address</span>
                <input type="text" class="input" placeholder="Enter Address" />
              </div>
            </div>
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Vat Number</span>
                <input type="text" class="input" placeholder="Enter Vat Number" />
              </div>
            </div>
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Phone Number *</span>
                <input type="text" class="input" placeholder="Enter Phone Number" />
              </div>
            </div>
            <div class="col-span-12">
              <div class="w-full">
                <span class="text-[12px]">Email *</span>
                <input type="text" class="input" placeholder="Enter Email" />
              </div>
            </div>
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Password *</span>
                <input type="password" class="input" placeholder="Enter Password" />
              </div>
            </div>
            <div class="col-span-6">
              <div class="w-full">
                <span class="text-[12px]">Confirm Password *</span>
                <input
                  type="password"
                  class="input"
                  placeholder="Enter Confirm Password"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-6">
            <div class="w-full">
                <span class="text-[12px]">Profile</span>
                <BrowsImage/>
            </div>
            <div class="w-full">
                <span class="text-[12px]">Remarks</span>
                <textarea class="input" id="" cols="30" rows="2" placeholder="Enter Remarks"></textarea>
                <!-- <input type="text" class="input" placeholder="Enter Client Name" /> -->
              </div>
        </div>
        <div class="col-span-12">
            <div class="flex justify-end">
                <button class="bg-primary px-5 py-1 rounded-md text-white shadow shadow-primary hover:bg-primary">Save</button>
            </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
