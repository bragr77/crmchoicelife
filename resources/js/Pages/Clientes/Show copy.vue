<template>
    <Head title="Cliente"/>

    <AuthenticatedLayout>
        <ConfirmationModal :show="confirmDeleteActive">
            <template v-slot:title>
                Confirmación
            </template>

            <template v-slot:content>
                <p class="p-4">
                    ¿Seguro desea eliminar al Conyugue
                    del Cliente: <br>
                    {{ this.deleteNombrescl }} {{ this.deleteApellidoscl }}?
                </p>
                <p>
                    <span class="span-delete">Nombres: </span> {{ this.deleteNombrescy }}
                </p>
                <p>
                    <span class="span-delete">Apellidos: </span> {{ this. deleteApellidoscy }}
                </p>
            </template>

            <template v-slot:footer>
                <button type="button" class="btn btn-success me-4" @click="confirmDeleteActive=false">Cancelar</button>
                <button type="button" class="btn btn-danger" @click="deleteConyugue">Eliminar</button>
            </template>
        </ConfirmationModal>

        <ConfirmationModal :show="confirmDeleteActive_2">
            <template v-slot:title>
                Confirmación
            </template>

            <template v-slot:content>
                <p class="p-4">
                    ¿Seguro desea eliminar al <span class="text-danger fw-bolder">{{ deleteRelaciondp }}</span>
                    del Cliente: <br>
                    {{ this.deleteNombrescl }} {{ this.deleteApellidoscl }}?
                </p>
                <p>
                    <span class="span-delete">Nombres: </span> {{ this.deleteNombresdp }}
                </p>
                <p>
                    <span class="span-delete">Apellidos: </span> {{ this. deleteApellidosdp }}
                </p>
            </template>

            <template v-slot:footer>
                <button type="button" class="btn btn-success me-4" @click="confirmDeleteActive_2=false">Cancelar</button>
                <button type="button" class="btn btn-danger" @click="deleteDependiente">Eliminar</button>
            </template>
        </ConfirmationModal>

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Información del Cliente</h1>
            <div class="">
                <a :href="route('planillacliente.report', cliente.id)" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm me-2"><i class="fas fa-search"></i> Ver Planilla del Cliente</a>
                <!-- <a href="#!" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" target="_blank"><i class="fas fa-download fa-sm text-white-50"></i> Descargar Planilla del Cliente</a> -->
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-address-card"></i> Datos Personales</span>
                        <Link class="btn btn-sm btn-primary me-2" :href="route('editdatos.edit', cliente.id)">
                            <i class="fas fa-edit"></i> Editar
                        </Link>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Nombres: </strong>{{ cliente.nombres }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Apellidos: </strong>{{ cliente.apellidos }} </p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Genero: </strong>{{ cliente.genero }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Fec. Nac.: </strong>{{ formatodefecha(cliente.fechan) }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Estatus: </strong>{{ cliente.estatus }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>SSN: </strong>{{ cliente.ssn }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Dirección: </strong>{{ cliente.direccion }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Ciudad: </strong>{{ cliente.ciudad }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Condado: </strong>{{ cliente.condado }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Estado: </strong>{{ cliente.estado }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Código Postal: </strong>{{ cliente.postal }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Teléfono: </strong>{{ cliente.telefono }}</p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Email: </strong>{{ cliente.email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-dark"><strong>Agente que lo atendio: </strong> <span class="text-primary font-weight-bold"> {{ cliente.user.name }} {{ cliente.user.lastname }} </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-money-check-dollar"></i> Información financiera</span>
                        <Link class="btn btn-sm btn-primary me-2" :href="route('editfinanzas.edit', cliente.id)">
                            <i class="fas fa-edit"></i> Editar
                        </Link>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Ingreso Grupal Anual $: </strong>{{ cliente.ingreso }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Banco: </strong>{{ cliente.banco }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Ruta: </strong>{{ cliente.ruta }}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Nro. de Cuenta: </strong>{{ cliente.cuenta }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-restroom me-3"></i>Información del Conyugue</span>
                        <template v-if="cliente.estadocivil === 'casado'">
                            <div class="d-flex flex-row">
                                <Link class="btn btn-sm btn-primary me-2" :href="route('editconyugue.edit', cliente.id)">
                                    <i class="fas fa-edit"></i> Editar
                                </Link>
                                <button type="button"
                                        class="btn btn-danger btn-sm"
                                        @click="confirmDeleteActive=true;
                                                deleteConyugueRow=conyugue.id
                                                deleteNombrescy=conyugue.nombres
                                                deleteApellidoscy=conyugue.apellidos
                                                deleteNombrescl=cliente.nombres
                                                deleteApellidoscl=cliente.apellidos">
                                    <i class="fa-solid fa-trash me-2"></i>Eliminar
                                </button>
                            </div>
                        </template>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-dark"><strong>Estado Civil: </strong>{{ cliente.estadocivil }}</p>
                            </div>
                        </div>
                        <template v-if="cliente.estadocivil === 'soltero'">
                            <div class="row">
                                <!-- <button type="button" class="btn btn-outline-primary btn-block">
                                    Agregar Conyugue
                                </button> -->
                                <Link class="btn btn-outline-primary btn-block" :href="route('nuevocliente.createconyugue2', cliente.id)">
                                    <i class="fa-solid fa-plus me-2"></i>Agregar Conyugue
                                </Link>
                            </div>
                        </template>
                        <template v-else>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>Nombres: </strong>{{ conyugue.nombres }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>Apellidos: </strong>{{ conyugue.apellidos }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>Genero: </strong>{{ conyugue.genero }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>Fec. Nac.: </strong>{{ formatodefecha(conyugue.fechan) }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>Estatus: </strong>{{ conyugue.estatus }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-dark"><strong>SSN: </strong>{{ conyugue.ssn }}</p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <span><i class="fa-solid fa-children me-3"></i>Información de los Dependientes</span>
                        <div class="d-flex flex-row">
                            <!-- <a href="#!" class="btn btn-sm btn-primary me-2"><i class="fa-solid fa-plus me-2"></i> Agregar Dependientes</a> -->
                            <Link class="btn btn-sm btn-primary me-2" :href="route('nuevocliente.createdependiente2', cliente.id)">
                                <i class="fa-solid fa-plus me-2"></i> Agregar Dependientes
                            </Link>
                        </div>
                    </div>
                    <div class="card-body">
                        <template v-if="cliente.dependientes === 'no'">
                            <h3>No tiene Dependientes registrados</h3>
                        </template>
                        <template v-else>
                            <div class="table-responsive">
                                <table id="dependientes" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Dependiente</th>
                                            <th scope="col">Nombres y Apellidos</th>
                                            <th scope="col">Relacion</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr v-for="dependiente in dependientes" :key="dependiente.id">
                                            <td> {{ dependiente.id }}  </td>
                                            <td>{{ dependiente.nombres }} {{ dependiente.apellidos }}</td>
                                            <td>{{ dependiente.relacion }}</td>
                                            <td>
                                                <Link class="mr-1 btn btn-success btn-sm" :href="route('dependiente.show', dependiente.id)">Ver</Link>
                                                <!-- <a href="#!" class="mr-1 btn btn-success btn-sm">Ver</a> -->
                                                <button type="button"
                                                        class="btn btn-danger btn-sm"
                                                        @click="confirmDeleteActive_2=true;
                                                                deleteDependienteRow=dependiente.id
                                                                deleteNombresdp=dependiente.nombres
                                                                deleteApellidosdp=dependiente.apellidos
                                                                deleteRelaciondp=dependiente.relacion
                                                                deleteNombrescl=cliente.nombres
                                                                deleteApellidoscl=cliente.apellidos">
                                                    Eliminar
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </template>
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
    import moment from 'moment/moment'
    import 'moment/locale/es';

    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import Modal from '@/Components/Modal.vue';
    import ConfirmationModal from '@/Components/ConfirmationModal.vue'

    export default {

        data() {
            return {
                confirmDeleteActive:false,
                confirmDeleteActive_2:false,
                deleteConyugueRow:"",
            };
        },

        components:{
            AuthenticatedLayout,
            Head,
            Link,
            router,
            Modal,
            ConfirmationModal,

        },

        props: {
            cliente: Object,
            dependientes: Object,
            conyugue: Object,
            errors: Object,
        },

        mounted(){
            this.getmidatatable();
        },

        methods: {

            deleteConyugue() {
                router.delete(route("destroyconyugue.destroy", this.deleteConyugueRow));
                this.confirmDeleteActive = false;
            },

            deleteDependiente() {
                router.delete(route("dependiente.destroy", this.deleteDependienteRow));
                this.confirmDeleteActive_2 = false;
            },

            formatodefecha(created_at){
                moment.locale('es');
                return moment(created_at).format("LL")
                /* return moment(created_at).fromNow(true); */
            },

            getmidatatable(){
                $(document).ready( function () {
                    $('#dependientes').DataTable({
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
