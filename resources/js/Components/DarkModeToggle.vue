<script setup>
import { onMounted, ref } from 'vue';

const theme = ref('light');

const setTheme = (value) => {
    theme.value = value;
    document.documentElement.classList.toggle('dark', value === 'dark');
    localStorage.setItem('theme', value);
};

const toggle = () => {
    setTheme(theme.value === 'dark' ? 'light' : 'dark');
};

onMounted(() => {
    const stored = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (stored === 'dark' || (!stored && prefersDark)) {
        setTheme('dark');
    } else {
        setTheme('light');
    }
});
</script>

<template>
    <button
        type="button"
        @click="toggle"
        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 bg-white/10 text-slate-900 shadow-sm transition hover:border-indigo-400 hover:text-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:border-slate-500/20 dark:bg-slate-800/80 dark:text-slate-100"
        aria-label="Toggle dark mode"
    >
        <svg v-if="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
            <path fill="currentColor" d="M12 3.25a.75.75 0 0 1 .75.75v1.25a.75.75 0 0 1-1.5 0V4A.75.75 0 0 1 12 3.25ZM12 18.75a.75.75 0 0 1 .75.75v1.25a.75.75 0 0 1-1.5 0v-1.25a.75.75 0 0 1 .75-.75ZM6.28 5.22a.75.75 0 0 1 1.06 0l.89.9a.75.75 0 0 1-1.06 1.06l-.9-.89a.75.75 0 0 1 0-1.07Zm9.48 9.48a.75.75 0 0 1 1.06 0l.9.89a.75.75 0 0 1-1.06 1.06l-.9-.89a.75.75 0 0 1 0-1.06ZM4 12a.75.75 0 0 1 .75-.75h1.25a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 12Zm13.25-.75h1.25a.75.75 0 0 1 0 1.5h-1.25a.75.75 0 0 1 0-1.5ZM6.28 18.78a.75.75 0 0 1 0-1.06l.9-.9a.75.75 0 1 1 1.06 1.06l-.9.9a.75.75 0 0 1-1.06 0Zm9.48-9.48a.75.75 0 0 1 0-1.06l.9-.9a.75.75 0 0 1 1.06 1.06l-.9.9a.75.75 0 0 1-1.06 0ZM12 7.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5Z"/>
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
            <path fill="currentColor" d="M21.752 15.002a.75.75 0 0 0-.777-.301 7.502 7.502 0 0 1-9.448-9.448.75.75 0 0 0-.301-.777A9.002 9.002 0 0 0 4.5 15.5a9.004 9.004 0 0 0 17.252-.498Z"/>
        </svg>
    </button>
</template>
