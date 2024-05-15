<template>
    <Head title="Agente"/>

    <AuthenticatedLayout>
        <div class="container">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-children me-3"></i>Información del Agente</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Nombres: </strong>{{ usuario.name }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Apellidos: </strong>{{ usuario.lastname }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Role: </strong>{{ usuario.role.nombre_rol }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Email: </strong>{{ usuario.email }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Telefono: </strong>{{ usuario.phone }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>NPN: </strong>{{ usuario.npn }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <Link class="col-6 btn btn-primary" :href="route('usuarios.edit', usuario.id)">
                                    Editar
                                </Link>
                                <Link class="col-6 btn btn-secondary" :href="route('usuarios.index')">
                                    Regresar
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
    import { Link } from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3';
    import moment from 'moment/moment'
    import 'moment/locale/es';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

    export default {
        data(){
            return{

            }
        },

        components:{
            Link,
            Head,
            AuthenticatedLayout
        },

        props: {
            usuario:Object
        },

        methods: {
            formatodefecha(created_at){
                moment.locale('es');
                return moment(created_at).format("LL")
                /* return moment(created_at).fromNow(true); */
            },
        },
    }
</script>
