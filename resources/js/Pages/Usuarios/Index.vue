<template>
    <Head title="Usuarios"/>

    <AuthenticatedLayout>
        <ConfirmationModal :show="confirmDeleteActive">
            <template v-slot:title>
                Confirmación
            </template>

            <template v-slot:content>
                <p class="p-4">
                    ¿Seguro desea eliminar al Agente:?
                </p>
                <p>
                    <span class="span-delete">Nombre: </span> {{ this.deleteName }}
                </p>
                 <p>
                    <span class="span-delete">Correo: </span> {{ this.deleteEmail }}
                </p>
            </template>

            <template v-slot:footer>
                <button type="button" class="btn btn-success me-4" @click="confirmDeleteActive=false">Cancelar</button>
                <button type="button" class="btn btn-danger" @click="deleteAgente">Eliminar</button>
            </template>
        </ConfirmationModal>

        <div class="container-fluid d-flex justify-content-end mb-3">
            <Link class="btn btn-primary" :href="route('usuarios.create')">
                <i class="fa-solid fa-plus me-2"></i>Agregar Usuario / Agente
            </Link>
            <!-- <button type="button" class="btn btn-primary" @click="confirmAgregarActive=true">
                <i class="fa-solid fa-plus me-2"></i>Agregar Usuario / Agente
            </button> -->
        </div>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-shield"></i>
                Usuarios Administradores / Agentes
            </div>
            <div class="card-body">
                <div class="table-responsive-lg">
                    <table id="administrador" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                <th scope="col">NPN</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="usuario in usuarios" :key="usuario.id">
                                    <tr v-if="usuario.role_id != 1">
                                        <td>{{ usuario.id }}</td>
                                        <td>{{ usuario.name }} {{ usuario.lastname }}</td>
                                        <td>{{ usuario.role.nombre_rol }}</td>
                                        <td>{{ usuario.email }}</td>
                                        <td>{{ usuario.npn }}</td>
                                        <td>
                                            <!-- <a href="#!" class="mr-1 btn btn-success btn-sm">Ver</a> -->
                                            <Link class="mr-1 btn btn-success btn-sm" :href="route('usuarios.show',usuario.id)">Ver</Link>
                                            <!-- <button type="button"
                                                    class="btn btn-danger btn-sm"
                                                    @click="confirmDeleteActive=true;
                                                            deleteUsuarioRow=usuario.id
                                                            deleteName=usuario.name
                                                            deleteEmail=usuario.email">
                                                Eliminar
                                            </button> -->
                                        </td>
                                    </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

<script>

    import moment from "moment"

    import { Link } from '@inertiajs/vue3'
    import { router, useForm } from '@inertiajs/vue3'
    import { Head } from '@inertiajs/vue3';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Modal from '@/Components/Modal.vue';
    import ConfirmationModal from '@/Components/ConfirmationModal.vue'
    import AgregarModal from '@/Components/AgregarModal.vue'


    export default {

        data() {
            return {
                confirmDeleteActive:false,
                deleteAgenteRow:"",
                confirmAgregarActive:true,
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
            usuarios: Object,
            roles: Object,
            errors: Object,

        },

        mounted(){
            this.getmidatatable();
        },

        methods:{

            deleteAgente() {
                router.delete(route("usuarios.destroy", this.deleteUsuarioRow));
                this.confirmDeleteActive = false;
            },

            getmidatatable(){
                $(document).ready( function () {
                    $('#agente, #administrador').DataTable({
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
                        "order": [[0, "asc"]],
                        "pageLength": 10
                    });
                });
            }
        },

    }
</script>

<style>
    .span-delete{
        color: #000;
        font-weight: 600;
    }
</style>
