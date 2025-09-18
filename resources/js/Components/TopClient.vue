<script setup>
import { Link } from '@inertiajs/vue3';
const clients=[
        {
            'name':'Bishal Chaudhary',
            'email':'bishalcodeslaravel@gmail.com',
            'phone':'9814668499',
            'profile':'/images/sample.png'
        },
        {
            'name':'Bishal Chaudhary',
            'email':'bishalcodeslaravel@gmail.com',
            'phone':'9814668499',
            'profile':'/images/sample.png'
        },
        {
            'name':'Bishal Chaudhary',
            'email':'bishalcodeslaravel@gmail.com',
            'phone':'9814668499',
            'profile':'/images/sample.png'
        },
        {
            'name':'Bishal Chaudhary',
            'email':'bishalcodeslaravel@gmail.com',
            'phone':'9814668499',
            'profile':'/images/sample.png'
        }
    ]
</script>
<template>
    <div class="bg-white w-full h-[300px] rounded shadow shadow-primary">
            <div class="flex justify-between p-3 items-center">
            <span class="text-[13px] font-bold uppercase"> Top Clients</span>

            <Link
              class="text-[13px] bg-primary text-white py-1 px-3 rounded shadow shadow-primary hover:bg-primary-dark"
              >View More</Link
            >
          </div>
          <hr />

          <div class="block mt-2">
            <Link :href="'#'" class="flex mb-2 px-3 pb-2 border-b-[1px] border-gray-200 items-center gap-3 hover:bg-gray-100" v-for="(client,index) in clients" :key="index">
                <img :src="client.profile" class="h-[40px] w-[40px] shadow rounded-full p-2" alt="">
                <div class="block">
                    <span class="text-[13px] font-bold block">
                        {{ client.name }}
                    </span>
                    <span class="text-[13px]">
                        5 Orders
                    </span>
                </div>
            </Link>
          </div>
        </div>
</template>
