<template>
    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <div>
        <ListingAddress :listing="listing" />
    </div>
</template>

<script setup>
import ListingAddress from "@/Components/ListingAddress.vue";
import { computed } from "@vue/reactivity";
import { usePage } from "@inertiajs/vue3";
const page = usePage();

const flashSuccess = computed(() => {
    return page.props.flash.success;
});
console.log(page.props.flash.success);

defineProps({
    listing: Object,
});
</script>
