<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout
        title="Atur Ulang Kata Sandi"
        subtitle="Silakan masukkan kata sandi baru Anda yang lebih aman."
        panelCopy="Perbarui akses akun Anda dengan kata sandi baru yang kuat dan laporkan keamanan maksimal."
    >
        <Head title="Atur Ulang Kata Sandi" />

        <form @submit.prevent="submit" class="space-y-6">
            <div class="space-y-2">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    type="email"
                    class="w-full bg-slate-50 dark:bg-slate-900"
                    v-model="form.email"
                    readonly
                />
                <InputError :message="form.errors.email" />
            </div>

            <div class="space-y-2">
                <InputLabel for="password" value="Kata Sandi Baru" />
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
                <InputLabel for="password_confirmation" value="Konfirmasi Kata Sandi Baru" />
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

            <div>
                <PrimaryButton
                    type="submit"
                    :class="{ 'opacity-70': form.processing }"
                    :disabled="form.processing"
                >
                    Perbarui Kata Sandi
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
