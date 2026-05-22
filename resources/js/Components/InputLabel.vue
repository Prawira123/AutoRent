<script setup>
import { useAttrs } from 'vue';

const props = defineProps({
    value: {
        type: String,
    },
});

const attrs = useAttrs();
</script>

<template>
    <label v-bind="attrs" class="auth-label block text-sm font-semibold">
        <span v-if="props.value">{{ props.value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
