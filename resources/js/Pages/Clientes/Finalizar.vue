<template>
    <Head title="Rgistro"/>

    <AuthenticatedLayout>
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-address-card"></i>
                    </div>
                    <div class="card-body">
                        <p>
                            El registro de: <span class="fw-bold">{{ cliente.nombres }} {{ cliente.apellidos }}</span>, se realizo de manera satisfactoria.
                        </p>
                        <p>
                            El agente encargado es: <span class="fw-bold">{{ cliente.user.name }} {{ cliente.user.lastname }}.</span>
                        </p>
                        <p>
                            En breve momentos recibira un email, donde podra descargar su formato de consentimiento. Como prueba de que al resgistrarse
                            acepta todos los terminos y condiciones.
                        </p>
                    </div>
                    <div class="container text-center mb-3">
                        <Link class="btn btn-primary" :href="route('dashboard.index')">
                            <i class="fa-solid fa-rotate-left me-2"></i>Regresar
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>

    import { Link } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

    export default {

        data() {
            return {

            };
        },

        components:{
            AuthenticatedLayout,
            Head,
            Link,
            router,

        },

        props: {
            cliente: Object,
        },


    }
</script>

<style>
    .span-delete{
        color: #000;
        font-weight: 600;
    }
</style>
