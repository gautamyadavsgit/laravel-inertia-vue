<template>
  <div>Index The message is : {{ messageFrom }}</div>
  <Link href="/show" />
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ messageFrom: String })
</script>
