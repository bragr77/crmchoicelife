<template>
    <Head title="Dependientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-shield"></i>
                Dependientes
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="conyugue" class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Nombres y Apellidos</th>
                                <th scope="col">Relación</th>
                                <th scope="col">Titular</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr v-for="(dependiente, index) in dependientes" :key="dependiente.id">

                                    <td scope> {{ index+1 }}  </td>
                                    <td>{{ dependiente.nombres }} {{ dependiente.apellidos }}</td>
                                    <td>{{ dependiente.relacion }}</td>
                                    <td>{{ dependiente.cliente.nombres }} {{ dependiente.cliente.apellidos }}</td>
                                    <td>
                                        <Link class="mr-1 btn btn-success btn-sm" :href="route('clientes.show', dependiente.cliente_id)">Ver Titular</Link>
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
        },

        props: {
            dependientes: Object,
            errors: Object,

        },

        mounted(){
            this.getmidatatable();
        },

        methods:{

            getmidatatable(){
                $(document).ready( function () {
                    $('#conyugue').DataTable({
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

