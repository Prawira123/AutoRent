<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const showPassword = ref(false);
const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const passwordType = computed(() => (showPassword.value ? 'text' : 'password'));

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout
        title="Selamat Datang Kembali"
        subtitle="Silakan masuk ke akun AutoRent Anda."
        panelCopy="Masuk untuk mengatur pemesanan kendaraan, pembayaran, dan akun Anda di AutoRent."
    >
        <Head title="Masuk" />

        <div class="space-y-6">
            <div class="space-y-3">
                <InputLabel for="email" value="Email Address" />
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                            <path fill="currentColor" d="M4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5A2.25 2.25 0 0 1 19.5 6.75v10.5A2.25 2.25 0 0 1 17.25 19.5H6.75A2.25 2.25 0 0 1 4.5 17.25V6.75Zm1.5-.75v11.25c0 .414.336.75.75.75h10.5a.75.75 0 0 0 .75-.75V6h-12Zm1.024 2.051L12 12.596l4.226-3.271a.75.75 0 0 1 .902 1.198l-5 3.875a.75.75 0 0 1-.956 0l-5-3.875a.75.75 0 1 1 .902-1.198Z"/>
                        </svg>
                    </span>
                    <TextInput
                        id="email"
                        type="email"
                        class="w-full pl-14"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="name@autoren.com"
                    />
                </div>
                <InputError :message="form.errors.email" />
            </div>

            <div class="space-y-3">
                <InputLabel for="password" value="Password" />
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                            <path fill="currentColor" d="M17.25 9V7.5A5.25 5.25 0 0 0 7.5 7.5V9h-1.5A2.25 2.25 0 0 0 3.75 11.25v7.5A2.25 2.25 0 0 0 6 21h12a2.25 2.25 0 0 0 2.25-2.25v-7.5A2.25 2.25 0 0 0 18.75 9H17.25Zm-9.75 0V7.5A3.75 3.75 0 0 1 11.25 3.75 3.75 3.75 0 0 1 15 7.5V9H7.5Zm10.5 2.25v7.5a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75v-7.5c0-.414.336-.75.75-.75h11.25c.414 0 .75.336.75.75Z"/>
                        </svg>
                    </span>
                    <TextInput
                        id="password"
                        :type="passwordType"
                        class="w-full pl-14 pr-14"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                        placeholder="Kata sandi Anda"
                    />
                    <button
                        type="button"
                        @click="showPassword = !showPassword"
                        class="absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400 transition hover:text-slate-600"
                        aria-label="Toggle password visibility"
                    >
                        <svg v-if="!showPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                            <path fill="currentColor" d="M12 5.25c4.556 0 8.31 2.82 9.75 6.75-1.44 3.93-5.194 6.75-9.75 6.75S3.69 15.93 2.25 12c1.44-3.93 5.194-6.75 9.75-6.75Zm0 1.5a8.63 8.63 0 0 0-8.002 5.25A8.63 8.63 0 0 0 12 17.25a8.63 8.63 0 0 0 8.002-5.25A8.63 8.63 0 0 0 12 6.75Zm0 2.25a3.375 3.375 0 1 1 0 6.75 3.375 3.375 0 0 1 0-6.75Z"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                            <path fill="currentColor" d="M12 6.75a8.63 8.63 0 0 0-8.002 5.25A8.63 8.63 0 0 0 12 17.25a8.63 8.63 0 0 0 8.002-5.25A8.63 8.63 0 0 0 12 6.75Zm0 1.5c2.22 0 4.218 1.31 5.218 3.25A6.13 6.13 0 0 1 12 15.75a6.13 6.13 0 0 1-5.218-3.25A6.13 6.13 0 0 1 12 8.25Zm0 1.5a4.625 4.625 0 1 0 0 9.25 4.625 4.625 0 0 0 0-9.25Z"/>
                        </svg>
                    </button>
                </div>
                <InputError :message="form.errors.password" />
            </div>

            <div class="flex items-center justify-between gap-4">
                <label class="inline-flex items-center gap-2 text-sm text-slate-500 dark:text-slate-300">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    Ingat Saya
                </label>

                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-sm font-semibold text-indigo-600 transition hover:text-indigo-500"
                >
                    Lupa Kata Sandi?
                </Link>
            </div>

            <div>
                <PrimaryButton
                    type="submit"
                    :class="{ 'opacity-70': form.processing }"
                    :disabled="form.processing"
                >
                    Masuk Ke Akun
                </PrimaryButton>
            </div>

            <p class="text-center text-sm text-slate-500 dark:text-slate-400">
                Belum memiliki akun? 
                <Link href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">
                    Daftar Sekarang
                </Link>
            </p>
        </div>
    </GuestLayout>
</template>
