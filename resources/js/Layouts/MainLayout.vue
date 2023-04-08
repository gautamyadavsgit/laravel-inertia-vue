<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/show">Show Page</Link>
  <div>The page with time {{ timer }}</div>

  <slot />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
const timer = ref(1)

setInterval(() => {
  timer.value++
}, 1000)
</script>

