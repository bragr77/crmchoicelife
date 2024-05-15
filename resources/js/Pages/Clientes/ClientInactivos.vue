<template>
    <Head title="Clientes"/>

    <AuthenticatedLayout>

        <ConfirmationModal :show="confirmDeleteActive">
            <template v-slot:title>
                Confirmación
            </template>

            <template v-slot:content>
                <p class="p-4">
                    ¿Seguro desea activar al Cliente:?
                </p>
                <p>
                    <span class="span-delete">Nombres: </span> {{ this.deleteNombres }}
                </p>
                 <p>
                    <span class="span-delete">Apellidos: </span> {{ this.deleteApellidos }}
                </p>
            </template>

            <template v-slot:footer>
                <button type="button" class="btn btn-success me-4" @click="confirmDeleteActive=false">Cancelar</button>
                <button type="button" class="btn btn-primary" @click="activarCliente">Activar</button>
            </template>
        </ConfirmationModal>

        <!-- <div class="container-fluid d-flex justify-content-end mb-3">
            <Link class="btn btn-primary" :href="route('clientes.create')">
                <i class="fa-solid fa-plus me-2"></i>Agregar Clientes
            </Link>
        </div> -->

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-slash text-danger"></i>
                Clientes Inactivos
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="cliente-inactivo" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Nombres y Apellidos</th>
                                <th scope="col">Agente</th>
                                <th scope="col">Fecha de Registro</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr v-for="(cliente, index) in clientes" :key="cliente.id">

                                    <td scope> {{ index + 1 }}  </td>
                                    <td>{{ cliente.nombres }} {{ cliente.apellidos }}</td>
                                    <td>{{ cliente.user.name }} {{ cliente.user.lastname }}</td>
                                    <td>{{ formatodefecha2(cliente.created_at) }}</td>
                                    <td>
                                        <Link class="mr-1 btn btn-success btn-sm" :href="route('clientes.show', cliente.id)">Ver</Link>
                                        <!-- <a :href="route('clientes.show', cliente.id)" class="mr-1 btn btn-success btn-sm">Ver</a> -->
                                        <button type="button"
                                                class="btn btn-primary btn-sm"
                                                @click="confirmDeleteActive=true;
                                                        activeClienteRow=cliente.id
                                                        deleteNombres=cliente.nombres
                                                        deleteApellidos=cliente.apellidos">
                                            Activar
                                        </button>
                                    </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>

<script>

    import { Link } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3';
    import moment from 'moment/moment'
    import 'moment/locale/es';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Modal from '@/Components/Modal.vue';
    import ConfirmationModal from '@/Components/ConfirmationModal.vue'
    import AgregarModal from '@/Components/AgregarModal.vue'


    export default {

        data() {
            return {
                confirmDeleteActive:false,
                activeClienteRow:"",
                confirmAgregarActive:false,
                contadorcl : 1,
            };
        },

        components:{
            AuthenticatedLayout,
            Head,
            Link,
            Modal,
            ConfirmationModal,
            AgregarModal,

        },

        props: {
            clientes: Object,
            errors: Object,

        },

        mounted(){
            this.getmidatatable();
        },

        methods:{

            formatodefecha2(created_at){
                moment.locale('es');
                return moment(created_at).format("LL")
                /* return moment(created_at).fromNow(true); */
            },

            activarCliente() {
                router.get(route("clientinactivo.active", this.activeClienteRow));
                this.confirmDeleteActive = false;
            },

            getmidatatable(){
                $(document).ready( function () {
                    $('#cliente-inactivo').DataTable({
                        language: {
                            "sShow": "Mostrar",
                            "sLengthMenu":      'Mostrar <select class="ancho-input custom-select custom-select-sm form-control form-control-sm">'+
                                                '<option value="10">10</option>'+
                                                '<option value="20">15</option>'+
                                                '<option value="30">20</option>'+
                                                '<option value="50">50</option>'+
                                                '<option value="-1">Todos</option>'+
                                                '</select> Registros',
                            "sProcessing":     "Procesando...",
                            "sZeroRecords":    "No se encontraron resultados",
                            "sEmptyTable":     "Ningún dato disponible en esta tabla",
                            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix":    "",
                            "sSearch":         "Buscar:",
                            "sUrl":            "",
                            "sInfoThousands":  ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst":    "Primero",
                                "sLast":     "Último",
                                "sNext":     "Siguiente",
                                "sPrevious": "Anterior"
                            },
                            "oAria": {
                                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            },
                            "buttons": {
                                "copy": "Copiar",
                                "colvis": "Visibilidad"
                            }
                        },
                        "order": [[0, "desc"]],
                        "pageLength": 10
                    });
                });
            }
        }

    }
</script>

<style>
    .span-delete{
        color: #000;
        font-weight: 600;
    }
</style>
