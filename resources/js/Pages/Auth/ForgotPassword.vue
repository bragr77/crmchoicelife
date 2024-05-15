<template>
  <GuestLayout>
    <Head title="Forgot Password"/>

    <div class="flex flex-col overflow-y-auto md:flex-row">
      <div class="h-32 md:h-auto md:w-1/2">
        <img
            aria-hidden="true"
            class="object-cover w-full h-full"
            src="/images/forgot-password.jpg"
            alt="Office"
        />
      </div>
      <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full">
          <p class="">
            <!-- Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that will allow you to choose a new one. -->
            ¿Olvidaste tu contraseña? Ningún problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña que le permitirá elegir una nueva.
          </p>

          <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
          </div>

          <form @submit.prevent="submit">
            <div>
              <InputLabel for="email" value="Email"/>
              <TextInput id="email" type="email" class="block w-full mt-1" v-model="form.email" required autofocus autocomplete="username" />
              <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-end mt-4">
              <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                <!-- Email Password Reset Link -->
                Enlace para restablecer contraseña
              </PrimaryButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>
