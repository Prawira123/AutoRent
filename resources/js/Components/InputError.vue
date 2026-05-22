<script setup>
const props = defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="props.message">
        <p class="mt-2 text-sm font-medium text-rose-500">{{ props.message }}</p>
    </div>
</template>
