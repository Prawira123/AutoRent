<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout
        title="Pulihkan Kata Sandi"
        subtitle="Masukkan alamat email Anda untuk menerima tautan pemulihan kata sandi."
        panelCopy="Jaga keamanan akun AutoRent Anda dengan proses pemulihan yang cepat dan bersih."
    >
        <Head title="Pulihkan Kata Sandi" />

        <div class="space-y-6">
            <div class="text-sm leading-7 text-slate-500 dark:text-slate-400">
                Lupa password? Tidak masalah. Masukkan alamat email Anda, dan kami akan mengirimkan tautan pemulihan untuk mengatur ulang kata sandi Anda.
            </div>

            <div v-if="status" class="rounded-2xl border border-emerald-200/80 bg-emerald-50/80 p-4 text-sm text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-900/20 dark:text-emerald-200">
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="space-y-6">
                <div class="space-y-2">
                    <InputLabel for="email" value="Email" />
                    <TextInput
                        id="email"
                        type="email"
                        class="w-full"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="name@autoren.com"
                    />
                    <InputError :message="form.errors.email" />
                </div>

                <div>
                    <PrimaryButton
                        type="submit"
                        :class="{ 'opacity-70': form.processing }"
                        :disabled="form.processing"
                    >
                        Kirim Tautan Pemulihan
                    </PrimaryButton>
                </div>
            </form>

            <div>
                <Link href="/login" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    ← Kembali ke halaman Login
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
