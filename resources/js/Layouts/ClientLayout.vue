<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import AdminSidebar from '@/Components/Sidebar/AdminSidebar.vue';
import AdminNavbar from '@/Components/Navbar/AdminNavbar.vue';
import ClientSidebar from '@/Components/Sidebar/ClientSidebar.vue';
defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <Head :title="title" />
        <div class="w-[100vw] h-[100vh] bg-[#ebebeb]/50">

        <div class="flex">
            <div class="w-[250px] h-[100vh] sticky top-0  print:hidden">
                <ClientSidebar/>
            </div>
            <div class="w-full px-3 py-1 h-[100vh] overflow-auto">
                <AdminNavbar class=" print:hidden"/>
                <div class="w-full mt-3">
                    <slot/>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>
