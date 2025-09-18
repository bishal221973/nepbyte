<script setup>
import { Mail, User, Phone } from "lucide-vue-next";
import { Link } from "@inertiajs/vue3";
import ProductionSlip from "@/Components/ProductionSlip.vue";
import SupportedFile from "@/Components/SupportedFile.vue";
import Invoice from "@/Components/Invoice.vue";
import AssignTask from "@/Components/AssignTask.vue";
</script>
<template>
  <div class="flex gap-5">
    <div style="width: 250px">
      <div
        class="bg-white w-full p-3 relative rounded-md shadow-md shadow-primary  print:hidden"
        style="top: 60px; height: calc(100vh - 163px)"
      >
        <img :src="'/images/user.png'" class="profile" alt="" />

        <div style="margin-top: 75px">
          <span class="text-[10px] font-bold block text-center">#2082001</span>
          <span class="text-[13px] font-bold block text-center">Bishal Chaudhary</span>

          <hr class="mt-3" />
          <div class="flex items-center gap-2 mt-3 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Order No.</span>
            <span class="text-[12px] text-gray-700">10 Orders</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Order Date</span>
            <span class="text-[12px] text-gray-700">2025/01/01</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Delivery Date</span>
            <span class="text-[12px] text-gray-700">2025/01/01</span>
          </div>
          <hr class="mt-3 mb-3" />
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Order Status</span>
            <span class="text-[12px] text-gray-700">service_listed</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Working Status</span>
            <span class="text-[12px] text-gray-700">Pending</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Billing Status</span>
            <span class="text-[12px] text-gray-700">Unbilled</span>
          </div>
          <hr class="mt-3 mb-3" />
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Sub Total</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Discount Amoun</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Net Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Vat Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Total Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <hr class="mt-3 mb-3" />
          <div class="flex items-center gap-2 mt-3 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Received Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
          <div class="flex items-center gap-2 mb-2 justify-between">
            <span class="text-[12px] text-gray-500 font-bold">Receivable Amount</span>
            <span class="text-[12px] text-gray-700">Rs. 50000</span>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full relative pt-2 ">
      <div class="flex gap-3">
        <ProductionSlip>
          <table class="w-full">
            <tr>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                S.N.
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Description
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Size
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Quantity
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Area
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Rate
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Amount
              </th>
            </tr>
            <tr>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">
                Flex Banner 2D
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">5X6</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">30</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1000</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10000</td>
            </tr>
            <tr>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">2</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">
                Flex Banner 3D
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">5X6</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">30</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1000</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Subtotal
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Discount
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Vatable Cost
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Vat
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Subtotal
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
          </table>
        </ProductionSlip>
        <SupportedFile/>
        <Invoice>
          <table class="w-full">
            <tr>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                S.N.
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Description
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Size
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Quantity
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Area
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Rate
              </th>
              <th class="text-[13px] border-[1px] border-gray-300 py-1 text-left pl-1">
                Amount
              </th>
            </tr>
            <tr>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">
                Flex Banner 2D
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">5X6</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">30</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1000</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10000</td>
            </tr>
            <tr>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">2</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">
                Flex Banner 3D
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">5X6</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">30</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">1000</td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">10000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Subtotal
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Discount
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Vatable Cost
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Vat
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
            <tr class="">
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1" colspan="6">
                Subtotal
              </td>
              <td class="text-[13px] border-[1px] border-gray-300 py-1 pl-1">20000</td>
            </tr>
          </table>
        </Invoice>
        <AssignTask/>
      </div>

      <div
        class="w-full bg-white mt-3 p-3 rounded shadow shadow-primary  print:hidden"
        style="min-height: calc(100vh - 163px)"
      >
        <slot />
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
