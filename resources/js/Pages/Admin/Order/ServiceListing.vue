<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Breadcrumb from "@/Components/Breadcrumb.vue";
import { Plus } from "lucide-vue-next";
import { Link, useForm } from "@inertiajs/vue3";
import Datatable from "@/Components/Datatable.vue";
import { computed } from "vue";
import Select from "@/Components/Select.vue";
const columns = [
  { label: "S.N.", key: "sn" },
  { label: "Order No.", key: "link" },
  { label: "Order Date", key: "order_date" },
  { label: "Delivery Date", key: "delivery_date" },
  { label: "Client", key: "client" },
  { label: "Order Status", key: "order_status" },
  { label: "Working Status", key: "working_status" },
  { label: "Billing Status", key: "billing_status" },
  { label: "Action", key: "actions" },
];

const datas = [
  {
    id: 1,
    link: "0001",
    order_date: "2025/01/01",
    delivery_date: "2025/01/01",
    client: "Bishal Chaudhary",
    order_status: "New",
    working_status: "Pending",
    billing_status: "Unbilled",
  },
  {
    id: 1,
    link: "0002",
    order_date: "2025/01/01",
    delivery_date: "2025/01/01",
    client: "Bishal Chaudhary",
    order_status: "service_listed",
    working_status: "Pending",
    billing_status: "Unbilled",
  },
  {
    id: 1,
    link: "0003",
    order_date: "2025/01/01",
    delivery_date: "2025/01/01",
    client: "Bishal Chaudhary",
    order_status: "in_progress",
    working_status: "Pending",
    billing_status: "Unbilled",
  },
  {
    id: 1,
    link: "0004",
    order_date: "2025/01/01",
    delivery_date: "2025/01/01",
    client: "Bishal Chaudhary",
    order_status: "completed",
    working_status: "Completed",
    billing_status: "Billed",
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

const form = useForm({
  unit: null,
});
</script>
<template>
  <AppLayout>
    <div class="flex justify-between items-center">
      <Breadcrumb
        :items="[
          { name: 'Orders', href: route('order.service.list') },
          { name: 'Service Listing' },
        ]"
      />
    </div>
    <div class="mt-3 bg-white w-full p-3 rounded-md shadow shadow-primary">
      <div class="flex gap-3">
        <div class="flex gap-3 items-center right-border">
          <img :src="'/images/user.png'" class="h-[40px] w-[40px] rounded-full" alt="" />
          <div class="block" style="line-height: 18px">
            <span class="font-bold block">Bishal Chaudhary</span>
            <span class="text-[12px]">+977-9814668499</span>
          </div>
        </div>

        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Order No.</span>
          <span class="text-[12px]">0001</span>
        </div>

        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Order Date</span>
          <span class="text-[12px]">2025/01/01</span>
        </div>

        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Delivery Date</span>
          <span class="text-[12px]">2025/01/01</span>
        </div>
        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Order Status</span>
          <span class="text-[12px]">New</span>
        </div>
        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Working Status</span>
          <span class="text-[12px]">Processing</span>
        </div>
        <div class="block gap-3 right-border" style="line-height: 18px">
          <span class="font-bold block">Billing Status</span>
          <span class="text-[12px]">Unbilled</span>
        </div>
      </div>

      <hr class="mt-4 mb-3" />

      <div class="flex gap-3 mb-3">
        <div
          class="bg-primary flex justify-center items-center rounded-full text-white text-[13px]"
          style="height: 32px; min-width: 32px; max-width: 32px"
        >
          1
        </div>
        <img
          :src="'/images/banner.jpeg'"
          class="bannerImg shadow shadow-primary rounded-md"
          alt=""
        />

        <div class="w-full">
          <span class="text-[12px]"
            >Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard ...
            <i
              class="fa fa-info text-[12px] cursor-pointer"
              title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at!"
            ></i
          ></span>
          <div class="w-full grid grid-cols-12 gap-3">
            <div class="col-span-4">
              <span class="text-[12px]">Unit*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select unit" />
              </div>
              <!-- <select name="" id="" class="input">
                <option value="">Select Unit</option>
              </select> -->
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Size</span>
              <div class="flex border-[1px] rounded-md border-gray-300 overflow-hidden">
                <input
                  type="text"
                  placeholder="Height"
                  class="input border-0 border-r-[1px] focus:border-gray-200"
                  style="border-radius: 0"
                />
                <input
                  type="text"
                  placeholder="Width"
                  class="input border-0 focus:border-gray-400 focus:ring-0"
                  style="border-radius: 0"
                />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Sqft*</span>
              <input type="text" class="input" placeholder="Square feet" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Service*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select service" />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Rate*</span>
              <input type="text" class="input" placeholder="Rate" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Amount*</span>
              <input type="text" class="input" placeholder="Amount" />
            </div>
          </div>
        </div>
      </div>

      <div class="flex gap-3 mb-3">
        <div
          class="bg-primary flex justify-center items-center rounded-full text-white text-[13px]"
          style="height: 32px; min-width: 32px; max-width: 32px"
        >
          1
        </div>
        <img
          :src="'/images/banner.jpeg'"
          class="bannerImg shadow shadow-primary rounded-md"
          alt=""
        />

        <div class="w-full">
          <span class="text-[12px]"
            >Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard ...
            <i
              class="fa fa-info text-[12px] cursor-pointer"
              title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at!"
            ></i
          ></span>
          <div class="w-full grid grid-cols-12 gap-3">
            <div class="col-span-4">
              <span class="text-[12px]">Unit*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select unit" />
              </div>
              <!-- <select name="" id="" class="input">
                <option value="">Select Unit</option>
              </select> -->
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Size</span>
              <div class="flex border-[1px] rounded-md border-gray-300 overflow-hidden">
                <input
                  type="text"
                  placeholder="Height"
                  class="input border-0 border-r-[1px] focus:border-gray-200"
                  style="border-radius: 0"
                />
                <input
                  type="text"
                  placeholder="Width"
                  class="input border-0 focus:border-gray-400 focus:ring-0"
                  style="border-radius: 0"
                />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Sqft*</span>
              <input type="text" class="input" placeholder="Square feet" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Service*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select service" />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Rate*</span>
              <input type="text" class="input" placeholder="Rate" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Amount*</span>
              <input type="text" class="input" placeholder="Amount" />
            </div>
          </div>
        </div>
      </div>
      <div class="flex gap-3 mb-3">
        <div
          class="bg-primary flex justify-center items-center rounded-full text-white text-[13px]"
          style="height: 32px; min-width: 32px; max-width: 32px"
        >
          1
        </div>
        <img
          :src="'/images/banner.jpeg'"
          class="bannerImg shadow shadow-primary rounded-md"
          alt=""
        />

        <div class="w-full">
          <span class="text-[12px]"
            >Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard dummy text ever since the 1500s,
            when Ipsum has been the industry's standard ...
            <i
              class="fa fa-info text-[12px] cursor-pointer"
              title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis animi in veritatis, quam assumenda placeat odit! Ipsam dicta, non quod soluta, omnis vitae optio et quisquam dolores eos reiciendis totam earum ipsum dignissimos, suscipit quis nobis nihil repellat molestias hic! Possimus veniam tempore voluptas sequi consequatur minus deleniti consectetur at!"
            ></i
          ></span>
          <div class="w-full grid grid-cols-12 gap-3">
            <div class="col-span-4">
              <span class="text-[12px]">Unit*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select unit" />
              </div>
              <!-- <select name="" id="" class="input">
                <option value="">Select Unit</option>
              </select> -->
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Size</span>
              <div class="flex border-[1px] rounded-md border-gray-300 overflow-hidden">
                <input
                  type="text"
                  placeholder="Height"
                  class="input border-0 border-r-[1px] focus:border-gray-200"
                  style="border-radius: 0"
                />
                <input
                  type="text"
                  placeholder="Width"
                  class="input border-0 focus:border-gray-400 focus:ring-0"
                  style="border-radius: 0"
                />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Sqft*</span>
              <input type="text" class="input" placeholder="Square feet" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Service*</span>
              <div class="w-full border-[1px] border-gray-300 p-[3px] rounded-md">
                <Select placeholder="Select service" />
              </div>
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Rate*</span>
              <input type="text" class="input" placeholder="Rate" />
            </div>
            <div class="col-span-4">
              <span class="text-[12px]">Amount*</span>
              <input type="text" class="input" placeholder="Amount" />
            </div>
          </div>
        </div>
      </div>
      <div class="bg-gray-200 w-full p-3 rounded-md">
        <div class="flex justify-between items-center">
          <span class="font-bold text-[13px]">Sub Total</span>
          <span class="text-[12px]">Rs. 20000</span>
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <div class="flex gap-5 items-center">
            <span class="font-bold text-[13px]">Discount</span>
            <span class="flex items-center gap-1">
              <input type="checkbox" class="rounded-sm" />
              <span class="text-[12px]">Is Percentage ?</span>
            </span>
          </div>
          <input type="text" value="00" class="p-0 text-[12px] bg-transparent border-0 focus:border-0 focus:ring-0 text-right">
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
            <span class="flex items-center gap-1">
              <input type="checkbox" class="rounded-sm" />
              <span class="text-[12px]">Is vatable ?</span>
            </span>
          </div>
          <input type="text" value="00" class="p-0 text-[12px] bg-transparent border-0 focus:border-0 focus:ring-0 text-right">
        </div>
        <hr class="border-gray-300 my-2" />
        <div class="flex justify-between items-center">
          <span class="font-bold text-[13px]">Net Amount</span>
          <span class="text-[12px]">Rs. 20000</span>
        </div>
      </div>
      <div class="w-full flex justify-end mt-3">
        <button class="bg-primary text-white px-3 py-1 rounded">Save</button>
      </div>
    </div>
  </AppLayout>
</template>

<style scoped>
.right-border {
  border-right: 1px solid #ccc;
  padding-right: 20px;
  font-size: 14px;
}
.bannerImg {
  height: 180px;
  width: 300px;
}
</style>
