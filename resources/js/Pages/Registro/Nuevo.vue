<template>
    <Head title="Cliente Nuevo"/>

        <LoadingModal :show="mostrarloading">
            <template v-slot:title>
                Culminando Registro
            </template>

            <template v-slot:content>
                <p class="p-4">
                    Espere por favor.
                </p>
                <!-- <p>
                    <span class="span-delete">Nombres: </span> {{ this.deleteNombres }}
                </p>
                 <p>
                    <span class="span-delete">Apellidos: </span> {{ this.deleteApellidos }}
                </p> -->
            </template>
        </LoadingModal>

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
                            <i class="fa-solid fa-address-card"></i> El Registro fue exitoso
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-user-pen me-3"></i>Información Personal
                                        </div>
                                        <div class="card-body">
                                            <h5>Nombres: {{ cliente.nombres }}</h5>
                                            <h5>Apellidos: {{ cliente.apellidos }}</h5>
                                            <h5>Estado Civil: {{ cliente.estadocivil }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-restroom me-3"></i>Información del Conyugue
                                        </div>
                                        <div class="card-body">
                                            <div v-if="cliente.estadocivil === 'casado'">
                                                <h5>Nombres: {{ conyugue.nombres }}</h5>
                                                <h5>Apellidos: {{ conyugue.apellidos }}</h5>
                                            </div>
                                            <div v-if="cliente.estadocivil === 'soltero'">
                                                <h5>No tiene conyugue registrado</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-6 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-children me-3"></i>Información de los Dependientes
                                        </div>
                                        <div class="card-body">
                                            <div v-if="cliente.dependientes === 'si'">
                                                <template v-for="dependiente in dependientes" :key="dependiente.id">
                                                    <h5>Nombres: {{ dependiente.nombres }}</h5>
                                                    <h5>Apellidos: {{ dependiente.apellidos }}</h5>
                                                </template>
                                            </div>
                                            <div v-if="cliente.dependientes === 'no'">
                                                <h5>No tiene dependientes registrados</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-square-check me-3"></i>Acciones
                                        </div>
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col-12 col-xl-4 mb-xl-0 mb-2">
                                                    <Link class="btn btn-primary" :href="route('registrocliente.createdependiente', cliente.id)">
                                                        <i class="fa-solid fa-plus me-2"></i>Agregar Dependiente
                                                    </Link>
                                                </div>
                                                <div class="col-12 col-xl-4 mb-xl-0 mb-2" v-show="cliente.estadocivil === 'soltero'">
                                                    <Link class="btn btn-info" :href="route('registrocliente.createconyugue', cliente.id)">
                                                        <i class="fa-solid fa-plus me-2"></i>Agregar Conyugue
                                                    </Link>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <Link class="btn btn-secondary"  @click="mostrarloading=true" :href="route('finalizar.registro', cliente.id)">
                                                        <i class="fa-solid fa-right-from-bracket me-2"></i>Finalizar Registro
                                                    </Link>
                                                    <!-- <div class="">
                                                        <a :href="route('finalizar', cliente.id)" target="_blank" class="btn btn-secondary"><i class="fas fa-search"></i> finalizar</a>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="container-fluid d-flex justify-content-end mb-3">
           <!--  <Link class="btn btn-primary" :href="route('clientes.create')">
                <i class="fa-solid fa-plus me-2"></i>Prueba ultimo cliente guardado
            </Link> -->
        </div>

</template>

<script>

    import { Link } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import LoadingModal from '@/Components/LoadingModal.vue'

    export default {

        data() {
            return {
                mostrarloading:false,
            };
        },

        components:{
            AuthenticatedLayout,
            Head,
            Link,
            router,
            LoadingModal,

        },

        props: {
            cliente: Object,
            dependientes: Object,
            conyugue: Object,
            errors: Object,
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
