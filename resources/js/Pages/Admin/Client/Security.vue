<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import ClientShowLayout from "@/Layouts/ClientShowLayout.vue";
import BrowsImage from "@/Components/BrowsImage.vue";
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[{ name: 'Clients', href: route('client.index') }, { name: 'Show' },{ name: 'Security' }]"
      />
    </div>

    <ClientShowLayout>
      <div class="grid grid-cols-12 gap-3">
        <div class="col-span-6">
          <b class="text-primary block">Change Password</b>
          <small class="block text-[11px]"
            >Use a mix of letters, numbers, and symbols for <br />a strong password</small
          >
        </div>
        <div class="col-span-6">
          <b class="block">Create New Password</b>
          <span class="text-[12px] mt-3">New Password *</span>
          <input type="text" placeholder="New Password" class="input" />

          <span class="text-[12px] mt-3 block">Confirm Password *</span>
          <input type="text" placeholder="Confirm Password" class="input" />
        </div>

        <div class="col-span-12">
          <div class="flex justify-end">
            <button
              class="bg-primary px-5 py-1 rounded-md text-white shadow shadow-primary hover:bg-primary"
            >
              Change
            </button>
          </div>
        </div>
      </div>

      <hr class="mt-10">

      <div class="grid grid-cols-12 gap-3 mt-10">
        <div class="col-span-6">
          <b class="text-primary block">Change Email</b>
          <small class="block text-[11px]"
            >After changing the email, client must verify <br />the new email via the link sent before they can login <br> into the system.</small
          >
        </div>
        <div class="col-span-6">
          <b class="block">Change client’s Email Address</b>
          <span class="text-[12px] mt-3">New Email *</span>
          <input type="text" placeholder="New Email" class="input" />
        </div>

        <div class="col-span-12">
          <div class="flex justify-end">
            <button
              class="bg-primary px-5 py-1 rounded-md text-white shadow shadow-primary hover:bg-primary"
            >
              Change
            </button>
          </div>
        </div>
      </div>

        <hr class="mt-10">

    </ClientShowLayout>
  </AppLayout>
</template>
