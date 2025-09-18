<!-- Breadcrumb.vue -->
<script setup>
import { defineProps, computed } from "vue";
import { Link } from "@inertiajs/vue3";
import { Home } from "lucide-vue-next";
// Props: an array of breadcrumb items (excluding Home)
const props = defineProps({
  items: {
    type: Array,
    required: false,
    default: () => [],
  },
});

// Prepend Home by default
const breadcrumbItems = computed(() => {
  return [{ name: "Home", href: "/" }, ...props.items];
});
</script>

<template>
  <nav class="text-sm breadcrumbs  print:hidden" aria-label="breadcrumb">
    <ol class="flex gap-1">
      <li
        v-for="(item, index) in breadcrumbItems"
        :key="index"
        class="flex items-center"
      >
        <template v-if="item.href && index !== breadcrumbItems.length - 1">
      <!-- {{ item.href }} -->
          <Link :href="item.href" class="text-blue-600 flex items-center"> <component :is="Home" class="h-[15px]" v-if="item.name == 'Home'"/> {{ item.name }}</Link>
        </template>
        <template v-else>
          <span class="text-gray-500">{{ item.name }}</span>
        </template>

        <!-- Separator except for the last item -->
        <span
          v-if="index < breadcrumbItems.length - 1"
          class="mx-2 text-gray-400"
        >
          /
        </span>
      </li>
    </ol>
  </nav>
</template>

<style scoped>
.breadcrumbs ol {
  list-style: none;
  padding: 0;
  margin: 0;
}
</style>
