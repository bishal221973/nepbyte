<template>
    <div class="shadow shadow-primary w-full p-3 rounded bg-gradient-to-r from-primary/70 via-primary-light/50 to-primary-dark/30">
        <div class="flex justify-between">
            <b class="text-[12px]">Good Morning</b>
            <b class="text-[12px]">2025/09/09</b>
        </div>
        <span class="text-white text-[25px] m-0 mt-1 p-0 font-bold uppercase block">Bishal Chaudhary</span>
        <span class="text-white text-[12px] m-0 p-0 relative top-[-10px]" style="letter-spacing:3px">bishalcodeslaravel@gmail.com</span>

        <div class="mt-1 flex justify-between">
            <div class="block">
                <span class="block text-[12px] text-gray-700">Total Orders</span>
                <span class="text-[10px] font-bold relative -top-2 text-gray-900">0001</span>
            </div>
            <div class="block">
                <span class="block text-[12px] text-gray-700">Pending</span>
                <span class="text-[10px] font-bold relative -top-2 text-gray-900">0001</span>
            </div>
            <div class="block">
                <span class="block text-[12px] text-gray-700">Processing</span>
                <span class="text-[10px] font-bold relative -top-2 text-gray-900">0001</span>
            </div>
            <div class="block">
                <span class="block text-[12px] text-gray-700">Completed</span>
                <span class="text-[10px] font-bold relative -top-2 text-gray-900">0001</span>
            </div>

        </div>

            <div>
                    <img :src="'data:image/png;base64,' + $page?.props?.barcode" alt="Barcode" class="w-full h-[40px]"/>
            </div>
    </div>
</template>
