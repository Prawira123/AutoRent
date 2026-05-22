<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    phone: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout
        title="Mulai Perjalanan Anda"
        subtitle="Buat akun untuk menikmati pemesanan instan tanpa ribet."
        panelCopy="Daftar sekarang dan nikmati akses langsung ke kendaraan terbaik serta pengalaman pemesanan yang elegan dan cepat."
    >
        <Head title="Daftar" />

        <form @submit.prevent="submit" class="space-y-6">
            <div class="grid gap-4 md:grid-cols-2">
                <div class="space-y-2">
                    <InputLabel for="name" value="Nama Lengkap" />
                    <TextInput
                        id="name"
                        type="text"
                        class="w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Nama Lengkap"
                    />
                    <InputError :message="form.errors.name" />
                </div>

                <div class="space-y-2">
                    <InputLabel for="phone" value="Nomor WhatsApp Aktif" />
                    <TextInput
                        id="phone"
                        type="tel"
                        class="w-full"
                        v-model="form.phone"
                        required
                        autocomplete="tel"
                        placeholder="0812xxxxxxx"
                    />
                    <InputError :message="form.errors.phone" />
                </div>
            </div>

            <div class="space-y-2">
                <InputLabel for="email" value="Alamat Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                    placeholder="name@autoren.com"
                />
                <InputError :message="form.errors.email" />
            </div>

            <div class="grid gap-4 md:grid-cols-2">
                <div class="space-y-2">
                    <InputLabel for="password" value="Kata Sandi" />
                    <TextInput
                        id="password"
                        type="password"
                        class="w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                        placeholder="Minimal 8 karakter"
                    />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="space-y-2">
                    <InputLabel for="password_confirmation" value="Konfirmasi Kata Sandi" />
                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="w-full"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                        placeholder="Ketik ulang kata sandi"
                    />
                    <InputError :message="form.errors.password_confirmation" />
                </div>
            </div>

            <label class="flex items-start gap-3 text-sm text-slate-500 dark:text-slate-300">
                <Checkbox name="terms" v-model:checked="form.terms" />
                <span class="leading-6">
                    Saya setuju dengan Ketentuan Layanan dan menyetujui persyaratan penahanan identitas asli (KTP/Paspor) saat masa sewa kendaraan berlangsung.
                </span>
            </label>
            <InputError :message="form.errors.terms" />

            <div>
                <PrimaryButton
                    type="submit"
                    :class="{ 'opacity-70': form.processing }"
                    :disabled="form.processing"
                >
                    Buat Akun Baru
                </PrimaryButton>
            </div>

            <p class="text-center text-sm text-slate-500 dark:text-slate-400">
                Sudah terdaftar? 
                <Link href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">
                    Masuk Sini
                </Link>
            </p>
        </form>
    </GuestLayout>
</template>
