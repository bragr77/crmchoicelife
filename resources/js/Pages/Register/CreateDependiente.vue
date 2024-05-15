<template>
    <Head title="Add Dependents"/>

        <div class="container d-flex justify-content-between">
            <div class="">
                <img class="logo-menu" src="/images/logo-horizontal.png" alt="">
            </div>
        </div>

        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa-solid fa-user-check me-2"></i>
                    <span class="fw-bolder">Add Dependent for:</span> {{ cliente.nombres }} {{ cliente.apellidos }}
                </div>

                <div class="card-body">
                    <form @submit.prevent="submit">
                        <!-- información del Dependiente -->
                        <h4 class="text-center">Dependent Information</h4>
                        <hr>

                        <input type="text" class="form-control" id="cy_cliente_id" valued="{{ cliente.id }}" v-model="form.cy_cliente_id" style="visibility:hidden">

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cy_nombres" class="form-label">First Name:</label>
                                <input type="text" class="form-control" id="cy_nombres" v-model="form.dp_nombres">
                                <div v-if="errors.dp_nombres">
                                    <p class="text-error">
                                        The Names field is required.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="dp_apellidos" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="dp_apellidos" v-model="form.dp_apellidos">
                                <div v-if="errors.dp_apellidos">
                                    <p class="text-error">
                                        The Surnames field is required.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="dp_genero" class="form-label">Gender:</label>
                                <select class="form-select" aria-label="Default select example" id="dp_genero" v-model="form.dp_genero">
                                    <option :value="null">select....</option>
                                    <option value="Femenino">Female</option>
                                    <option value="Masculino">Male</option>
                                </select>
                                <div v-if="errors.dp_genero">
                                    <p class="text-error">
                                        The Gender field is required.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="dp_fechan" class="form-label">Birthdate</label>
                                <datepicker class="vuejs3-datepicker-form-control" language="en" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="dp_fechan" v-model="form.dp_fechan"></datepicker>
                                <div v-if="errors.dp_fechan">
                                    <p class="text-error">
                                        The Birthdate field is required.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="dp_relacion" class="form-label">Relationship:</label>
                                <select class="form-select" aria-label="Default select example" id="dp_relacion" value="hola" v-model="form.dp_relacion">
                                    <option :value="null">Selecciona....</option>
                                    <option value="Padre">Father</option>
                                    <option value="Madre">Mother</option>
                                    <option value="Hijo">Son</option>
                                    <option value="Hija">Daughter</option>
                                    <option value="Abuelo">Grandfather</option>
                                    <option value="Abuela">Grandmother</option>
                                    <option value="Nieto">Grandchild</option>
                                    <option value="Nieta">Granddaughter</option>
                                    <option value="sobrino">nephew</option>
                                    <option value="sobrina">niece</option>
                                </select>
                                <div v-if="errors.dp_relacion">
                                    <p class="text-error">
                                        The Relationship field is required.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="dp_estatus" class="form-label">Legal status:</label>
                                <select class="form-select" aria-label="Default select example" id="dp_estatus" v-model="form.dp_estatus">
                                    <option :value="null">Selecciona....</option>
                                    <option value="Ciudadano">Citizen</option>
                                    <option value="Residente">Resident</option>
                                    <option value="Permiso de Trabajo">(PT) Work permit</option>
                                    <option value="Solicitud de Asilo">Asylum Application</option>
                                    <option value="Petición">Petition</option>
                                </select>
                                <div v-if="errors.dp_estatus">
                                    <p class="text-error">
                                        The Legal status field is required.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="dp_ssn" class="form-label">SSN:</label>
                                <input type="text" class="form-control" id="dp_ssn" v-model="form.dp_ssn" placeholder="000-00-0000" autocomplete="off">
                                <div v-if="errors.dp_ssn">
                                    <p class="text-error">
                                        The SSN field is required.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="dp_cobertura" class="form-label">Cobertura:</label>
                                <select class="form-select" aria-label="Default select example" id="dp_cobertura" v-model="form.dp_cobertura">
                                    <option :value="null">Select....</option>
                                    <option value="si">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <div v-if="errors.dp_cobertura">
                                    <!-- <p class="text-error">
                                        {{ errors.dp_cobertura }}
                                    </p> -->
                                    <p class="text-error">
                                        You must select an option
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- fin información del Dependiente -->



                        <div class="container-fluid mt-4 text-center">
                            <div class="d-grid">
                                <div class="row">
                                    <Link class="col-6 btn btn-secondary" :href="route('recordnew.show' , cliente.id)">
                                        Return
                                    </Link>
                                    <button type="submit" class="col-6 btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>



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
            router.post(route('recordnew.storedependiente', form.id), form);
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

.logo-menu{
        width: 250px;
}

</style>
