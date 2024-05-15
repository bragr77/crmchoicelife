<template>
    <Head title="Dependiente"/>

    <AuthenticatedLayout>
        <div class="container">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-children me-3"></i>Información del Dependiente del Cliente: <span class="fw-bolder">{{ dependiente.cliente.nombres }} {{ dependiente.cliente.apellidos }}</span></span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Nombres: </strong>{{ dependiente.nombres }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Apellidos: </strong>{{ dependiente.apellidos }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Genero: </strong>{{ dependiente.genero }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Fec. Nac.: </strong>{{ formatodefecha(dependiente.fechan) }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Relación: </strong>{{ dependiente.relacion }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Estatus: </strong>{{ dependiente.estatus }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>SSN: </strong>{{ dependiente.ssn }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Cobertura: </strong>{{ dependiente.cobertura }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <Link class="col-6 btn btn-secondary" :href="route('clientes.show', dependiente.cliente.id)">
                                    Regresar
                                </Link>
                                <Link class="col-6 btn btn-primary" :href="route('dependiente.edit', dependiente.id)">
                                    Editar
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
            dependiente:Object
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
