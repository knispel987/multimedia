<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
  href: String,
  active: String,
});

const classes = computed(() => {
  return props.active ? "text-blue-700 bg-white shadow-2xl" : "text-gray-900";
});
</script>

<template>
  <Link :href="href" :class="classes">
    <slot />
  </Link>
</template>
