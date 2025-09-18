<script setup>
import Menu from './Menu.vue';
import { Home,Users, ShieldUser, BringToFront, Scroll, Settings } from 'lucide-vue-next';
</script>
<template>
    <div class="bg-white w-full h-[100vh] shadow-sm shadow-primary-dark">
        <div class="flex p-3 relative justify-center">
            <img :src="'/images/logo.png'" class="w-[150px]" alt="">
        </div>
        <hr>

        <div class="pr-3 mt-3">
            <Menu :link="route('dashboard')" :isActive="$page?.props?.sidebar=='dashboard' ? true : false">
                <div class="flex gap-3 items-center">
                    <component :is="Home" class="h-[20px]"/>
                    <span class="text-[12px] font-bold">Dashboard</span>
                </div>
            </Menu>
            <Menu :link="route('client.order.index')" :isActive="$page?.props?.sidebar=='order' ? true : false">
                <div class="flex gap-3 items-center">
                    <component :is="BringToFront" class="h-[20px]"/>
                    <span class="text-[12px] font-bold">Orders</span>
                </div>
            </Menu>
            <Menu :link="route('billing.index')" :isActive="$page?.props?.sidebar=='billing' ? true : false">
                <div class="flex gap-3 items-center">
                    <component :is="Scroll" class="h-[20px]"/>
                    <span class="text-[12px] font-bold">Billings</span>
                </div>
            </Menu>

            <Menu>
                <div class="flex gap-3 items-center">
                    <component :is="Settings" class="h-[20px]"/>
                    <span class="text-[12px] font-bold">Paument History</span>
                </div>
            </Menu>
        </div>
    </div>
</template>
