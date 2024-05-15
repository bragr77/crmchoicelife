<template>
    <Head title="Registro finalizado"/>

    <div class="container d-flex justify-content-between">
            <div class="">
                <img class="logo-menu" src="/images/logo-horizontal.png" alt="">
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="container">
                    <div class="card">
                        <div class="card-header text-center">
                            <i class="fa-solid fa-address-card me-2"></i> <span class="fw-bold">Registro Satisfactorio / Satisfactory Record</span>
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

                            <hr>

                            <p>
                                The record of: <span class="fw-bold">{{ cliente.nombres }} {{ cliente.apellidos }}</span>, was carried out satisfactorily.
                            </p>
                            <p>
                                The agent in charge is: <span class="fw-bold">{{ cliente.user.name }} {{ cliente.user.lastname }}.</span>
                            </p>
                            <p>
                                You will shortly receive an email, where you can download your consent form. As proof that upon registration
                                 accept all terms and conditions.
                            </p>
                        </div>
                        <div class="container text-center mb-3">
                            <!-- <Link class="btn btn-primary" :href="route('dashboard.index')">
                                <i class="fa-solid fa-rotate-left me-2"></i>Regresar
                            </Link> -->
                            <a class="btn btn-primary" href="https://starsseguros.com/">
                                <i class="fa-solid fa-rotate-left me-2"></i>Regresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>


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

    .logo-menu{
        width: 250px;
    }
</style>
