<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
  isActive?: boolean,
  link?: string,
}>()
</script>

<template>
  <Link
    :href="link"
    class="block py-[9px] px-4 rounded-br-[50px] mb-[2px]"
    :class="props.isActive ? 'bg-primary text-white' : ''"
  >
    <slot />
  </Link>
</template>
