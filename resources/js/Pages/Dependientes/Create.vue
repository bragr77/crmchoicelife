<template>
    <Head title="Agregar Dependientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check me-2"></i>
                <span class="fw-bolder">Agregar Dependiente para:</span> {{ cliente.nombres }} {{ cliente.apellidos }}
            </div>

            <div class="card-body">
                <form @submit.prevent="submit">
                    <h4 class="text-center">Información del Dependiente</h4>
                    <hr>

                    <input type="text" class="form-control" id="cy_cliente_id" valued="{{ cliente.id }}" v-model="form.cy_cliente_id" style="visibility:hidden">

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="cy_nombres" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" id="cy_nombres" v-model="form.dp_nombres">
                            <div v-if="errors.dp_nombres">
                                <p class="text-error">
                                    {{ errors.dp_nombres }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="dp_apellidos" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="dp_apellidos" v-model="form.dp_apellidos">
                            <div v-if="errors.dp_apellidos">
                                <p class="text-error">
                                    {{ errors.dp_apellidos }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="dp_genero" class="form-label">Genero:</label>
                            <select class="form-select" aria-label="Default select example" id="dp_genero" v-model="form.dp_genero">
                                <option :value="null">Selecciona....</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                            <div v-if="errors.dp_genero">
                                <p class="text-error">
                                    {{ errors.dp_genero }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="dp_fechan" class="form-label">Fecha de Nacimiento</label>
                            <datepicker class="vuejs3-datepicker-form-control" language="es" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="dp_fechan" v-model="form.dp_fechan"></datepicker>
                            <div v-if="errors.dp_fechan">
                                <p class="text-error">
                                    {{ errors.dp_fechan }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="dp_relacion" class="form-label">Relacion:</label>
                            <select class="form-select" aria-label="Default select example" id="dp_relacion" v-model="form.dp_relacion">
                                <option :value="null">Selecciona....</option>
                                <option value="Padre">Padre</option>
                                <option value="Madre">Madre</option>
                                <option value="Hijo">Hijo</option>
                                <option value="Hija">Hija</option>
                                <option value="Abuelo">Abuelo</option>
                                <option value="Abuela">Abuela</option>
                                <option value="Nieto">Nieto</option>
                                <option value="Nieta">Nieta</option>
                                <option value="Sobrino">Sobrino</option>
                                <option value="Sobrina">Sobrina</option>
                            </select>
                            <div v-if="errors.dp_relacion">
                                <p class="text-error">
                                    {{ errors.dp_relacion }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="dp_estatus" class="form-label">Estatus Legal:</label>
                            <select class="form-select" aria-label="Default select example" id="dp_estatus" v-model="form.dp_estatus">
                                <option :value="null">Selecciona....</option>
                                <option value="Ciudadano">Ciudadano</option>
                                <option value="Residente">Residente</option>
                                <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                                <option value="Solicitud de Asilo">Solicitud de Asilo</option>
                                <option value="Petición">Petición</option>
                            </select>
                            <div v-if="errors.dp_estatus">
                                <p class="text-error">
                                    {{ errors.dp_estatus }}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="dp_ssn" class="form-label">Nro. Seguro Social:</label>
                            <input type="text" class="form-control" id="dp_ssn" v-model="form.dp_ssn" placeholder="000-00-0000" autocomplete="off">
                            <div v-if="errors.dp_ssn">
                                <p class="text-error">
                                    {{ errors.dp_ssn }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="dp_cobertura" class="form-label">Cobertura:</label>
                            <select class="form-select" aria-label="Default select example" id="dp_cobertura" v-model="form.dp_cobertura">
                                <option :value="null">Selecciona....</option>
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <div v-if="errors.dp_cobertura">
                                <p class="text-error">
                                    {{ errors.dp_cobertura }}
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <Link class="col-6 btn btn-secondary" :href="route('clientes.show', cliente.id)">
                                    Regresar
                                </Link>
                                <button type="submit" class="col-6 btn btn-primary">Siguiente</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

<script>

    import { Link } from '@inertiajs/vue3'
    import { router, useForm } from '@inertiajs/vue3'
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    import Datepicker from 'vuejs3-datepicker';

    export default {

    data() {
        return {

        };
    },

    components:{
        AuthenticatedLayout,
        Head,
        Link,
        Datepicker,
    },

    props: {
        cliente: Object,
        errors: Object,
    },

    mounted(){

        this.getmimascara();
    },

    methods:{

        getmimascara(){
            $(document).ready(function() {
                $('#dp_ssn').mask('000-00-0000');
            });
        },
    },

    setup(props){
        const form = useForm({
            id: props.cliente.id,
            dp_clienteid:null, dp_nombres: null, dp_apellidos: null, dp_genero: null, dp_fechan: null, dp_relacion: null, dp_estatus: null, dp_ssn: null, dp_cobertura:null,

        })

        function submit(){
            router.post(route('nuevocliente.storedependiente2', form.id), form);
        }

        return { form, submit };
    }



}
</script>

<style>
.vuejs3-datepicker__value{
    width: 100%;
    padding: 6px 5px 6px 17px !important;
    border: none !important;
}

.vuejs3-datepicker__inputvalue {
    width: 100%;
    padding: 6px 5px 6px 35px !important;
    border: none !important;
}

.vuejs3-datepicker-form-control {
    display: block;
    width: 100%;
    font-size: 1.52rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.vuejs3-datepicker__calendar .cell.day-header {
    font-size: 1rem !important;
}

</style>
