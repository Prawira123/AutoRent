<script setup>
import { Head, Link } from '@inertiajs/vue3';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const navLinks = [
    { label: 'Beranda', href: '#home' },
    { label: 'Katalog', href: '#fleet' },
    { label: 'Armada', href: '#stats' },
    { label: 'Ulasan', href: '#testimonials' },
    { label: 'Kontak', href: '#footer' },
];
</script>

<template>
    <Head title="AutoRent" />

    <div class="min-h-screen bg-slate-50 text-slate-950 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] dark:bg-slate-950 dark:text-slate-100">
        <div class="sticky top-0 z-30 border-b border-slate-200/70 bg-white/70 backdrop-blur-md transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] dark:border-slate-800/70 dark:bg-slate-950/70">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-4 lg:px-8">
                <div class="flex items-center gap-3">
                    <span class="inline-flex h-11 items-center justify-center rounded-2xl bg-slate-950 px-4 text-sm font-semibold text-white shadow-[0_16px_45px_-30px_rgba(79,70,229,0.75)] dark:bg-slate-900">
                        ⚡ AutoRent
                        <span class="ml-3 inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1 text-[0.68rem] font-semibold uppercase tracking-[0.28em] text-slate-100">
                            <span class="h-2 w-2 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(16,185,129,0.45)]"></span>
                            Agentic
                        </span>
                    </span>
                </div>

                <nav class="hidden items-center gap-6 text-sm font-medium md:flex">
                    <template v-for="link in navLinks" :key="link.label">
                        <a
                            :href="link.href"
                            class="relative text-slate-700 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:text-slate-950 dark:text-slate-300 dark:hover:text-white"
                        >
                            {{ link.label }}
                            <span class="absolute inset-x-0 -bottom-1 h-[1px] scale-x-0 bg-indigo-500 transition-transform duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-x-100"></span>
                        </a>
                    </template>
                </nav>

                <div class="flex items-center gap-3">
                    <DarkModeToggle />
                    <a
                        href="#footer"
                        class="inline-flex items-center justify-center rounded-full bg-indigo-500 px-5 py-3 text-sm font-semibold text-white shadow-[0_0_0_6px_rgba(79,70,229,0.14)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-0.5 hover:shadow-[0_14px_50px_-30px_rgba(79,70,229,0.55)]"
                    >
                        Mulai Chat
                    </a>
                </div>
            </div>
        </div>

        <main id="home" class="relative overflow-hidden px-6 py-24 lg:px-8">
            <div class="absolute inset-x-0 top-0 -z-10 h-[520px] bg-[radial-gradient(circle_at_top,_rgba(79,70,229,0.16),transparent_34%),radial-gradient(circle_at_30%_30%,rgba(99,102,241,0.12),transparent_22%)] dark:bg-none"></div>
            <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-2 lg:gap-16">
                <section class="flex flex-col justify-center gap-8 pt-6">
                    <div class="max-w-xl space-y-6">
                        <div class="inline-flex items-center gap-3 rounded-full border border-indigo-200/70 bg-white/80 px-4 py-2 text-sm font-semibold text-indigo-700 shadow-sm backdrop-blur-sm dark:border-slate-800/70 dark:bg-slate-900/70 dark:text-indigo-300">
                            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400 shadow-[0_0_12px_rgba(16,185,129,0.35)]"></span>
                            Sewa kendaraan premium sesuai selera Anda
                        </div>

                        <div class="space-y-6">
                            <h1 class="max-w-3xl text-5xl font-semibold leading-tight tracking-[-0.04em] text-slate-950 dark:text-slate-100 sm:text-6xl">
                                Sewa Mobil &amp; Motor Premium Tanpa Ribet Form Mandiri
                            </h1>
                            <p class="max-w-xl text-lg leading-8 text-slate-600 dark:text-slate-300">
                                Jelajahi armada eksklusif kami dalam pengalaman singkat yang elegan. Pesan cepat, pantau perjalanan, dan terima konfirmasi dengan dukungan Agentic secara real-time.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <a href="#fleet" class="inline-flex items-center justify-center rounded-3xl bg-slate-950 px-6 py-3 text-sm font-semibold text-white shadow-[0_18px_60px_-40px_rgba(15,23,42,0.7)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:shadow-[0_20px_70px_-35px_rgba(79,70,229,0.45)]">
                                Lihat Katalog
                            </a>
                            <a href="#footer" class="inline-flex items-center justify-center rounded-3xl border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-950 shadow-sm transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900 dark:text-slate-100">
                                Tanya AI Agent
                            </a>
                        </div>
                    </div>

                    <div class="relative mt-10 overflow-hidden rounded-[2rem] border border-slate-200/70 bg-white/80 p-4 shadow-[0_32px_80px_-40px_rgba(15,23,42,0.16)] backdrop-blur-sm transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] dark:border-slate-800/80 dark:bg-slate-900/80">
                        <div class="grid gap-3 sm:grid-cols-[1.4fr_0.6fr]">
                            <div class="rounded-3xl bg-slate-100/80 p-4 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:bg-slate-100 dark:bg-slate-800/80 dark:hover:bg-slate-800/90">
                                <label class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Cari kendaraan</label>
                                <div class="mt-3 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white px-4 py-3 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:border-slate-300 hover:bg-slate-50 dark:border-slate-700/70 dark:bg-slate-950 dark:hover:bg-slate-900">
                                    <span class="text-slate-400">🚘</span>
                                    <input type="text" placeholder="Cari mobil atau motor impian" class="w-full bg-transparent text-sm text-slate-900 outline-none placeholder:text-slate-400 dark:text-slate-100 dark:placeholder:text-slate-500" />
                                </div>
                            </div>
                            <button class="flex items-center justify-center rounded-3xl bg-indigo-500 px-5 py-4 text-sm font-semibold text-white shadow-[0_12px_40px_-20px_rgba(79,70,229,0.75)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:scale-[1.02]">
                                <span class="text-lg">🔎</span>
                            </button>
                        </div>
                    </div>
                </section>

                <section class="relative flex items-center justify-center py-10">
                    <div class="relative mx-auto flex h-[560px] w-full max-w-xl items-center justify-center rounded-[3rem] bg-gradient-to-br from-indigo-100 via-white to-slate-50 p-8 shadow-[0_50px_120px_-80px_rgba(79,70,229,0.6)] dark:bg-slate-900 dark:shadow-[0_50px_120px_-80px_rgba(15,23,42,0.65)]">
                        <div class="absolute inset-0 rounded-[3rem] bg-[radial-gradient(circle_at_top,_rgba(99,102,241,0.18),transparent_28%),radial-gradient(circle_at_bottom_right,_rgba(79,70,229,0.14),transparent_25%)]" />
                        <div class="relative z-10 flex h-full w-full items-end justify-center rounded-[2.5rem] bg-white/80 p-10 shadow-[inset_0_0_0_1px_rgba(15,23,42,0.04)] dark:bg-slate-950/80">
                            <div class="absolute inset-x-6 top-8 h-40 rounded-[2rem] bg-gradient-to-br from-white via-indigo-50 to-transparent blur-3xl opacity-90 dark:from-slate-800 dark:via-slate-900" />
                            <div class="relative flex h-full w-full items-end justify-center">
                                <div class="relative h-[420px] w-full overflow-hidden rounded-[2rem] bg-[url('https://images.unsplash.com/photo-1511910849309-ef4c6f8c94b1?auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center shadow-[0_40px_120px_-48px_rgba(15,23,42,0.35)]"></div>
                                <div class="absolute bottom-8 left-8 rounded-[2rem] border border-white/70 bg-white/80 px-5 py-4 shadow-[0_20px_50px_-30px_rgba(15,23,42,0.25)] backdrop-blur-sm dark:border-slate-700/70 dark:bg-slate-950/80">
                                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500 dark:text-slate-400">Premium Electric</p>
                                    <h3 class="mt-2 text-2xl font-semibold text-slate-950 dark:text-slate-100">E-Velocity GT</h3>
                                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-400">Driving with a refined silhouette and a whisper-quiet electric heartbeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <section id="fleet" class="relative px-6 pb-24 pt-16 lg:px-8">
            <div class="mx-auto max-w-7xl space-y-8">
                <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl space-y-3">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-600 dark:text-indigo-400">Armada Terlaris Bulan Ini</p>
                        <h2 class="text-4xl font-semibold tracking-tight text-slate-950 dark:text-slate-100">Kendaraan favorit yang paling banyak dipesan.</h2>
                        <p class="max-w-xl text-base leading-7 text-slate-600 dark:text-slate-400">Temukan mobil dan motor yang dipilih oleh pelanggan premium kami, dengan pengalaman sewa yang cepat dan menyenangkan.</p>
                    </div>
                    <a href="#stats" class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:translate-x-1.5 hover:text-indigo-500">
                        Lihat Semua
                        <span aria-hidden="true">➔</span>
                    </a>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    <article class="group overflow-hidden rounded-[2rem] border border-slate-200/80 bg-white/95 p-6 shadow-[0_18px_60px_-40px_rgba(15,23,42,0.15)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:border-slate-800 dark:bg-slate-900">
                        <div class="overflow-hidden rounded-[1.75rem] bg-slate-100 p-6 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:bg-slate-50 dark:bg-slate-950 dark:group-hover:bg-slate-900">
                            <div class="h-60 overflow-hidden rounded-[1.5rem] bg-[radial-gradient(circle_at_center,_rgba(99,102,241,0.18),transparent_40%)] transition-transform duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[1.04]"></div>
                        </div>
                        <div class="mt-6 space-y-4">
                            <div class="space-y-2">
                                <p class="text-xs uppercase tracking-[0.32em] text-slate-500 dark:text-slate-400">Tesla Model S</p>
                                <h3 class="text-2xl font-semibold text-slate-950 dark:text-slate-100">Executive Drive</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">4 Seats</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">2 Bags</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">Automatic</span>
                            </div>
                        </div>
                    </article>

                    <article class="group overflow-hidden rounded-[2rem] border border-slate-200/80 bg-white/95 p-6 shadow-[0_18px_60px_-40px_rgba(15,23,42,0.15)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:border-slate-800 dark:bg-slate-900">
                        <div class="overflow-hidden rounded-[1.75rem] bg-slate-100 p-6 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:bg-slate-50 dark:bg-slate-950 dark:group-hover:bg-slate-900">
                            <div class="h-60 overflow-hidden rounded-[1.5rem] bg-[radial-gradient(circle_at_center,_rgba(79,70,229,0.18),transparent_40%)] transition-transform duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[1.04]"></div>
                        </div>
                        <div class="mt-6 space-y-4">
                            <div class="space-y-2">
                                <p class="text-xs uppercase tracking-[0.32em] text-slate-500 dark:text-slate-400">Ducati Panigale</p>
                                <h3 class="text-2xl font-semibold text-slate-950 dark:text-slate-100">Rider Elite</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">2 Seats</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">1 Bag</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">Manual</span>
                            </div>
                        </div>
                    </article>

                    <article class="group overflow-hidden rounded-[2rem] border border-slate-200/80 bg-white/95 p-6 shadow-[0_18px_60px_-40px_rgba(15,23,42,0.15)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:border-slate-800 dark:bg-slate-900">
                        <div class="overflow-hidden rounded-[1.75rem] bg-slate-100 p-6 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:bg-slate-50 dark:bg-slate-950 dark:group-hover:bg-slate-900">
                            <div class="h-60 overflow-hidden rounded-[1.5rem] bg-[radial-gradient(circle_at_center,_rgba(79,70,229,0.2),transparent_40%)] transition-transform duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[1.04]"></div>
                        </div>
                        <div class="mt-6 space-y-4">
                            <div class="space-y-2">
                                <p class="text-xs uppercase tracking-[0.32em] text-slate-500 dark:text-slate-400">BMW i8</p>
                                <h3 class="text-2xl font-semibold text-slate-950 dark:text-slate-100">Luxury Groove</h3>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">4 Seats</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">2 Bags</span>
                                <span class="rounded-full bg-slate-100 px-3 py-2 text-xs font-semibold text-slate-700 dark:bg-slate-800 dark:text-slate-300">Hybrid</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="stats" class="px-6 pb-24 lg:px-8">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.2fr_0.8fr] lg:items-center">
                <div class="space-y-10 rounded-[2.5rem] border border-slate-200/70 bg-white/90 p-10 shadow-[0_36px_90px_-54px_rgba(15,23,42,0.18)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] dark:border-slate-800/70 dark:bg-slate-900/95">
                    <div class="space-y-4">
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-600 dark:text-indigo-400">Trusted by Professionals</p>
                        <h2 class="text-4xl font-semibold tracking-tight text-slate-950 dark:text-slate-100">Pengalaman sewa yang transparan dan meyakinkan.</h2>
                        <p class="max-w-xl text-base leading-7 text-slate-600 dark:text-slate-400">AutoRent memberi Anda akses ke armada terbaik dengan kontrol pemesanan intuitif, support cepat, dan jaminan keamanan perjalanan.</p>
                    </div>
                    <div class="grid gap-6 sm:grid-cols-3">
                        <div class="space-y-3">
                            <p class="text-5xl font-semibold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-500">12+</p>
                            <p class="text-sm uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Premium Locations</p>
                        </div>
                        <div class="space-y-3">
                            <p class="text-5xl font-semibold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-500">200+</p>
                            <p class="text-sm uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Kendaraan Tersedia</p>
                        </div>
                        <div class="space-y-3">
                            <p class="text-5xl font-semibold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-500">98%</p>
                            <p class="text-sm uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Rating Kepuasan</p>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-[3rem] bg-slate-100 p-6 shadow-[0_40px_90px_-52px_rgba(15,23,42,0.18)] dark:bg-slate-900">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(79,70,229,0.18),transparent_28%)]" />
                    <div class="relative h-[420px] rounded-[2.5rem] border border-white/60 bg-[linear-gradient(180deg,rgba(255,255,255,0.75),rgba(255,255,255,0.35))] shadow-inner shadow-slate-200/40 dark:border-slate-800/80 dark:bg-slate-950/80">
                        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1200&q=80')] bg-cover bg-center opacity-80 mix-blend-overlay"></div>
                        <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-b from-transparent via-transparent to-slate-50/80 dark:to-slate-950/80"></div>
                        <div class="absolute bottom-6 left-6 w-[calc(100%-3rem)] rounded-[2rem] border border-white/70 bg-white/90 p-5 shadow-[0_30px_70px_-36px_rgba(15,23,42,0.22)] backdrop-blur-sm dark:border-slate-700/70 dark:bg-slate-950/85">
                            <p class="text-xs uppercase tracking-[0.34em] text-slate-500 dark:text-slate-400">Main Hub</p>
                            <h3 class="mt-2 text-xl font-semibold text-slate-950 dark:text-slate-100">SCBD Jakarta</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-400">Ruanggenggam pusat kota, akses premium ke semua armada AutoRent.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="px-6 pb-24 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-indigo-600 dark:text-indigo-400">Testimoni</p>
                        <h2 class="mt-3 text-4xl font-semibold tracking-tight text-slate-950 dark:text-slate-100">Suara pelanggan premium kami.</h2>
                    </div>
                    <p class="max-w-xl text-sm leading-7 text-slate-600 dark:text-slate-400">Lihat bagaimana perjalanan mereka menjadi mulus, bebas repot, dan dipenuhi layanan eksklusif AutoRent.</p>
                </div>

                <div class="mt-10 grid gap-6 lg:grid-cols-3">
                    <article class="group overflow-hidden rounded-[2.5rem] bg-white/95 p-8 shadow-[0_30px_70px_-44px_rgba(15,23,42,0.18)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:bg-slate-900">
                        <div class="flex items-center gap-4">
                            <div class="h-14 w-14 rounded-full border border-slate-200 bg-slate-50 p-1 dark:border-slate-800 dark:bg-slate-950">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=facearea&facepad=3&w=128&h=128&q=80" alt="Avatar" class="h-full w-full rounded-full object-cover" />
                            </div>
                            <div>
                                <p class="font-semibold text-slate-950 dark:text-slate-100">Nadia Pratama</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Founder, LuxeRide</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-amber-500">
                            <span>★★★★★</span>
                            <span class="text-sm text-slate-500 dark:text-slate-400">5.0</span>
                        </div>
                        <p class="mt-6 text-sm leading-7 text-slate-600 dark:text-slate-400">"Pemesanannya mulus dan kendaraan mewahnya selalu on-point. AutoRent membuat acara korporat kami terasa lebih eksklusif."</p>
                    </article>

                    <article class="group overflow-hidden rounded-[2.5rem] bg-white/95 p-8 shadow-[0_30px_70px_-44px_rgba(15,23,42,0.18)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:bg-slate-900 lg:mt-10">
                        <div class="flex items-center gap-4">
                            <div class="h-14 w-14 rounded-full border border-slate-200 bg-slate-50 p-1 dark:border-slate-800 dark:bg-slate-950">
                                <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?auto=format&fit=facearea&facepad=3&w=128&h=128&q=80" alt="Avatar" class="h-full w-full rounded-full object-cover" />
                            </div>
                            <div>
                                <p class="font-semibold text-slate-950 dark:text-slate-100">Raka Wijaya</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Event Planner</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-amber-500">
                            <span>★★★★★</span>
                            <span class="text-sm text-slate-500 dark:text-slate-400">4.9</span>
                        </div>
                        <p class="mt-6 text-sm leading-7 text-slate-600 dark:text-slate-400">"Armada dan layanan dukungannya luar biasa. Setiap pertanyaan dijawab dengan cepat dan penuh perhatian."</p>
                    </article>

                    <article class="group overflow-hidden rounded-[2.5rem] bg-white/95 p-8 shadow-[0_30px_70px_-44px_rgba(15,23,42,0.18)] transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-2 dark:bg-slate-900">
                        <div class="flex items-center gap-4">
                            <div class="h-14 w-14 rounded-full border border-slate-200 bg-slate-50 p-1 dark:border-slate-800 dark:bg-slate-950">
                                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=facearea&facepad=3&w=128&h=128&q=80" alt="Avatar" class="h-full w-full rounded-full object-cover" />
                            </div>
                            <div>
                                <p class="font-semibold text-slate-950 dark:text-slate-100">Alya Sari</p>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Creative Director</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-2 text-amber-500">
                            <span>★★★★★</span>
                            <span class="text-sm text-slate-500 dark:text-slate-400">4.8</span>
                        </div>
                        <p class="mt-6 text-sm leading-7 text-slate-600 dark:text-slate-400">"Desain situsnya mewah dan responsif. Proses sewa menjadi jauh lebih cepat dan lebih elegan."</p>
                    </article>
                </div>
            </div>
        </section>

        <footer id="footer" class="border-t border-slate-200/70 bg-white/90 px-6 py-16 text-slate-700 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] dark:border-slate-800/70 dark:bg-slate-950/90 dark:text-slate-300 lg:px-8">
            <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[1.5fr_1fr_1fr_1fr]">
                <div class="space-y-5">
                    <h3 class="text-lg font-semibold text-slate-950 dark:text-slate-100">AutoRent</h3>
                    <p class="max-w-sm text-sm leading-7 text-slate-600 dark:text-slate-400">Solusi sewa kendaraan premium dengan pengalaman digital yang elegan, cepat, dan sepenuhnya terintegrasi.</p>
                </div>
                <div class="space-y-4">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Company</p>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Tentang</a></li>
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Karir</a></li>
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Dukungan</p>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Bantuan</a></li>
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Ketentuan</a></li>
                        <li><a href="#" class="transition-colors hover:text-slate-900 dark:hover:text-white">Privasi</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-slate-500 dark:text-slate-400">Social</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:bg-indigo-500 hover:text-white dark:bg-slate-900 dark:text-slate-300 dark:hover:bg-indigo-500">TW</a>
                        <a href="#" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:bg-indigo-500 hover:text-white dark:bg-slate-900 dark:text-slate-300 dark:hover:bg-indigo-500">FB</a>
                        <a href="#" class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-100 text-slate-700 transition-all duration-[550ms] ease-[cubic-bezier(0.19,1,0.22,1)] hover:-translate-y-1 hover:bg-indigo-500 hover:text-white dark:bg-slate-900 dark:text-slate-300 dark:hover:bg-indigo-500">IG</a>
                    </div>
                </div>
            </div>

            <div class="mt-10 border-t border-slate-200/70 pt-8 text-center text-sm text-slate-500 dark:border-slate-800/70 dark:text-slate-400">
                © 2026 AutoRent. Semua hak dilindungi.
            </div>
        </footer>
    </div>
</template>
