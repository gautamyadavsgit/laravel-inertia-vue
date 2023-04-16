<template>
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">New Listing</Link>
  
    <slot />
</template>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>
