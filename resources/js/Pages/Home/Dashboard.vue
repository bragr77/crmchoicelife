<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <!-- <template #header>
            Dashboard Inicio
        </template> -->

        <div class="container-fluid">
            <div class="row">
                <div v-if="user.role_id != 3" class="col-12 col-md-6 col-xl-4">
                    <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-9">
                            <div class="card-body ms-2">
                                <h5 class="card-title card-title-color">Total Clientes ChoiceLife:</h5>
                                <h4>{{ totalclientes }}</h4>
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <span class="icon-card-home"><i class="fa-solid fa-users"></i></span>
                        </div>
                    </div>
                    </div>
                </div>

                <div v-if="user.role_id == 3" class="col-12 col-md-6 col-xl-4">
                    <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-9">
                            <div class="card-body ms-2">
                                <h5 class="card-title card-title-color">Clientes de {{ user.name }} {{ user.lastname }}:</h5>
                                <h4>{{ clientecount }}</h4>
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-center">
                            <span class="icon-card-home"><i class="fa-solid fa-users"></i></span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


            <div v-if="user.role_id != 3" class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-user-shield"></i>
                            Agentes
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="cliente" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Agente</th>
                                            <th scope="col">Agente</th>
                                            <th scope="col">Clientes Registrados</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr v-for="user in users" :key="user.id">
                                            <td>{{ user.id }}</td>
                                            <td>{{ user.name }}</td>
                                            <td>{{ user.clientes_count }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </AuthenticatedLayout>
</template>

 <script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    export default {

        data() {
            return {

            };
        },

        components:{
            AuthenticatedLayout,
            Head,

        },

        props: {
            users: Object,
            user: Object,
            clientecount: "",
            totalclientes: "",
        },


        methods:{


        }

    }
</script>

<style>
    .icon-card-home{
        color: #663F8C;
        font-size: 3rem;
    }

    .card-title-color{
        color: #3D2F59;
        font-weight: 600;
        font-size: 1rem
    }
</style>
