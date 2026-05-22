<template>
    <button
        v-bind="$attrs"
        class="auth-button inline-flex w-full items-center justify-center rounded-2xl px-5 py-3 text-sm font-semibold tracking-[0.02em] transition duration-200 ease-in-out hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-70"
    >
        <slot />
    </button>
</template>
