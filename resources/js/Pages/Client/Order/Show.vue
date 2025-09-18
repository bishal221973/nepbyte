<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link, useForm } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed, ref } from "vue";
import Select from "@/Components/Select.vue";
import orderShowLayout from "@/Layouts/orderShowLayout.vue";
import ClientLayout from "@/Layouts/ClientLayout.vue";
import Modal from "@/Components/Modal.vue";
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

const datas = [];
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

const showModel = ref(false);

const toggleModel = () => {
  showModel.value = !showModel.value;
};
</script>
<template>
  <ClientLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[
          { name: 'Orders', href: route('order.service.list') },
          { name: 'Service Listing' },
        ]"
      />
    </div>
    <!-- <orderShowLayout> -->
    <div class="bg-white p-3 rounded mt-3 shadow shadow-primary">
      <Datatable
        :columns="columns"
        :data="tableData"
        exportTitle="Sales List"
        :serviceList="route('order.service.list')"
        :showUrl="route('order.show')"
      >
        <template #customTr>
          <tr>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">1</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">1</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">
              Flex Banner Print
            </td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">2X6</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">12</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">Rs. 500</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">5</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">Rs. 12000</td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit,
              corporis!...
              <i
                class="fa fa-info"
                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus excepturi magnam neque, impedit velit voluptate error accusantium doloremque id, doloribus voluptatum veritatis, ut nisi natus recusandae dolorum aliquid aspernatur dicta!"
              ></i>
            </td>
            <td class="border-[1px] text-[12px] border-gray-300 px-2 py-1">
              <button
                @click="toggleModel"
                class="bg-red-600 px-3 py-1 rounded text-white"
              >
                Reject
              </button>
            </td>
          </tr>
          <tr>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              1
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              1
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              Flex Banner Print
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              2X6
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              12
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              Rs. 500
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              5
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              Rs. 12000
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit,
              corporis!...
              <i
                class="fa fa-info"
                title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus excepturi magnam neque, impedit velit voluptate error accusantium doloremque id, doloribus voluptatum veritatis, ut nisi natus recusandae dolorum aliquid aspernatur dicta!"
              ></i>
            </td>
            <td class="border-[1px] line-through text-[12px] border-gray-300 px-2 py-1">
              <span class="block py-1 text-red-600">Rejected</span>
            </td>
          </tr>
        </template>
      </Datatable>
      <div class="bg-gray-200 w-full p-3 rounded-md">
        <div class="flex justify-between items-center">
          <span class="font-bold text-[13px]">Sub Total</span>
          <span class="text-[12px]">Rs. 20000</span>
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <div class="flex gap-5 items-center">
            <span class="font-bold text-[13px]">Discount</span>
          </div>
          <span class="text-[12px]">Rs. 00.00</span>
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <span class="font-bold text-[13px]">Net Amount</span>
          <span class="text-[12px]">Rs. 20000</span>
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <div class="flex gap-5 items-center">
            <span class="font-bold text-[13px]">Vat</span>
          </div>
          <span class="text-[12px]">Rs. 00.00</span>
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <span class="font-bold text-[13px]">Net Amount</span>
          <span class="text-[12px]">Rs. 20000</span>
        </div>
      </div>
      <div class="flex justify-end mt-3">
        <button class="bg-primary px-4 py-1 text-white rounded">Start Work</button>
      </div>
    </div>
    <!-- </orderShowLayout> -->

    <Modal :show="showModel" maxWidth="md">
      <div class="bg-white p-3">
        <span class="text-[12px]">Reason</span>
        <textarea name="" class="input" id="" placeholder="Enter Reason"></textarea>

        <div class="flex justify-end mt-3 gap-3">
          <button
            @click="toggleModel"
            class="bg-primary/50 px-3 py-1 rounded text-white hover:bg-primary"
          >
            Close
          </button>
          <button class="bg-primary px-3 py-1 rounded text-white hover:bg-primary-dark">
            Reject
          </button>
        </div>
      </div>
    </Modal>
  </ClientLayout>
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
