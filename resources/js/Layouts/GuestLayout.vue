<script setup>
import DarkModeToggle from '@/Components/DarkModeToggle.vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    title: {
        type: String,
        default: '',
    },
    subtitle: {
        type: String,
        default: '',
    },
    panelCopy: {
        type: String,
        default: 'Akses semua fitur AutoRent dalam antarmuka login premium yang ramping dan profesional.',
    },
});
</script>

<template>
    <div class="auth-shell">
        <div class="mx-auto grid min-h-screen max-w-7xl lg:grid-cols-2">
            <aside class="auth-panel relative flex flex-col justify-between overflow-hidden px-8 py-12 text-white sm:px-10">
                <div>
                    <Link href="/" class="inline-flex items-center gap-3 rounded-full border border-white/15 bg-white/5 px-4 py-2 text-xs uppercase tracking-[0.24em] text-slate-100 shadow-sm transition hover:border-indigo-300/30">
                        <span>⚡ AutoRent</span>
                        <span class="rounded-full bg-indigo-500/15 px-2 py-1 text-[0.65rem] font-semibold uppercase tracking-[0.28em] text-indigo-100">Agentic</span>
                    </Link>

                    <h1 class="mt-10 text-4xl font-semibold tracking-tight text-white">Autentikasi AutoRent</h1>
                    <p class="mt-5 max-w-xl text-sm leading-7 text-slate-300">{{ panelCopy }}</p>
                </div>

                <div class="relative mt-10 overflow-hidden rounded-[1.75rem] border border-white/10 bg-slate-950/80 p-8 shadow-[inset_0_1px_0_rgba(255,255,255,0.04)]">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(99,102,241,0.2),_transparent_30%)]"></div>
                    <div class="relative z-10 flex h-full flex-col justify-end gap-4">
                        <div class="text-sm uppercase tracking-[0.32em] text-slate-400">Premium Mobility</div>
                        <div class="h-52 rounded-[1.5rem] border border-white/10 bg-slate-900/90"></div>
                        <p class="text-sm leading-6 text-slate-400">Tumpukan desain yang bersih, atmosferik, dan fokus pada pengalaman login berkualitas premium.</p>
                    </div>
                </div>
            </aside>

            <main class="relative flex items-center justify-center px-6 py-12 sm:px-10">
                <div class="absolute right-6 top-6">
                    <DarkModeToggle />
                </div>

                <div class="auth-card w-full max-w-xl">
                    <div class="mb-8">
                        <p class="text-xs uppercase tracking-[0.4em] text-slate-500 dark:text-slate-400">Autentikasi</p>
                        <h2 class="mt-4 text-3xl font-semibold text-slate-950 dark:text-slate-50">{{ title }}</h2>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ subtitle }}</p>
                    </div>

                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
