<template>
    <Head title="New client"/>

        <LoadingModal :show="mostrarloading">
            <template v-slot:title>
                Completing Registration
            </template>

            <template v-slot:content>
                <p class="p-4">
                    Please wait.
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
                            <i class="fa-solid fa-address-card"></i> Registration was successful
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-user-pen me-3"></i>Personal information
                                        </div>
                                        <div class="card-body">
                                            <h5>Names: {{ cliente.nombres }}</h5>
                                            <h5>Surnames: {{ cliente.apellidos }}</h5>
                                            <h5>Civil status: <span v-if="cliente.estadocivil === 'casado'">married</span><span v-if="cliente.estadocivil === 'soltero'">unmarried</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-restroom me-3"></i>Spouse Information
                                        </div>
                                        <div class="card-body">
                                            <div v-if="cliente.estadocivil === 'casado'">
                                                <h5>Names: {{ conyugue.nombres }}</h5>
                                                <h5>Surnames: {{ conyugue.apellidos }}</h5>
                                            </div>
                                            <div v-if="cliente.estadocivil === 'soltero'">
                                                <h5>Does not have a registered spouse</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-6 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-children me-3"></i>Dependent Information
                                        </div>
                                        <div class="card-body">
                                            <div v-if="cliente.dependientes === 'si'">
                                                <template v-for="dependiente in dependientes" :key="dependiente.id">
                                                    <h5>Names: {{ dependiente.nombres }}</h5>
                                                    <h5>Surnames: {{ dependiente.apellidos }}</h5>
                                                </template>
                                            </div>
                                            <div v-if="cliente.dependientes === 'no'">
                                                <h5>You have no registered dependents</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <i class="fa-solid fa-square-check me-3"></i>Actions
                                        </div>
                                        <div class="card-body">
                                            <div class="row text-center">
                                                <div class="col-12 col-xl-4 mb-xl-0 mb-2">
                                                    <Link class="btn btn-primary" :href="route('recordnew.createdependiente', cliente.id)">
                                                        <i class="fa-solid fa-plus me-2"></i>Add Dependent
                                                    </Link>
                                                </div>
                                                <div class="col-12 col-xl-4 mb-xl-0 mb-2" v-show="cliente.estadocivil === 'soltero'">
                                                    <Link class="btn btn-info" :href="route('recordnew.createconyugue', cliente.id)">
                                                        <i class="fa-solid fa-plus me-2"></i>Add Spouse
                                                    </Link>
                                                </div>
                                                <div class="col-12 col-xl-4">
                                                    <Link class="btn btn-secondary" @click="mostrarloading=true" :href="route('finalizar.registro', cliente.id)">
                                                        <i class="fa-solid fa-right-from-bracket me-2"></i>Finish Registration
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
