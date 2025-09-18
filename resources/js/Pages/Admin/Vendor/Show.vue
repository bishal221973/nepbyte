<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import VendorShowLayout from "@/Layouts/VendorShowLayout.vue";
import BrowsImage from "@/Components/BrowsImage.vue";
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[{ name: 'Vendors', href: route('vendor.index') }, { name: 'Show' },{ name: 'General Info' }]"
      />
    </div>

    <VendorShowLayout>
      <div class="grid grid-cols-12 gap-3">
        <div class="col-span-4">
          <span class="text-[12px]">Name *</span>
          <input
            type="text"
            value="Bishal Chaudhary"
            placeholder="Enter name"
            class="input"
          />
        </div>
        <div class="col-span-4">
          <span class="text-[12px]">Phone *</span>
          <input
            type="text"
            value="9814668499"
            placeholder="Phone number"
            class="input"
          />
        </div>
        <div class="col-span-4">
          <span class="text-[12px]">Vat Number</span>
          <input type="text" class="input" placeholder="Enter vat number" />
        </div>
        <div class="col-span-12">
          <span class="text-[12px]">Address</span>
          <input
            type="text"
            class="input"
            value="Nepalgunj"
            placeholder="Enter Nepalgunj"
          />
        </div>
        <div class="col-span-12">
          <span class="text-[12px]">Profile</span>
          <BrowsImage />
        </div>

        <div class="col-span-12">
          <span class="text-[12px]">Remarks</span>
          <textarea
            class="input"
            id=""
            cols="30"
            rows="4"
            placeholder="Enter Remarks"
          ></textarea>
          <!-- <input type="text" class="input" placeholder="Enter Client Name" /> -->
        </div>
        <div class="col-span-12">
            <div class="flex justify-end">
                <button class="bg-primary px-5 py-1 rounded-md text-white shadow shadow-primary hover:bg-primary">Save</button>
            </div>
        </div>
      </div>

    </VendorShowLayout>
  </AppLayout>
</template>
