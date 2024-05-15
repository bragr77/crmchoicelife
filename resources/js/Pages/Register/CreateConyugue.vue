<template>
    <Head title="Add Spouse"/>

    <div class="container d-flex justify-content-between">
        <div class="">
            <img class="logo-menu" src="/images/logo-horizontal.png" alt="">
        </div>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check me-2"></i>
                <span class="fw-bolder">Add Spouse to:</span> {{ cliente.nombres }} {{ cliente.apellidos }}
            </div>

            <div class="card-body">
                <form @submit.prevent="submit">
                    <!-- información del conyugue -->
                    <h4 class="text-center">Spouse Information</h4>
                    <hr>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="cy_nombres" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="cy_nombres" v-model="form.cy_nombres">
                            <div v-if="errors.cy_nombres">
                                <p class="text-error">
                                    The Names field is required.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="cy_apellidos" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="cy_apellidos" v-model="form.cy_apellidos">
                            <div v-if="errors.cy_apellidos">
                                <p class="text-error">
                                    The Surnames field is required.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="cy_genero" class="form-label">Gender:</label>
                            <select class="form-select" aria-label="Default select example" id="cy_genero" v-model="form.cy_genero">
                                <option :value="null">select....</option>
                                <option value="Femenino">Female</option>
                                <option value="Masculino">Male</option>
                            </select>
                            <div v-if="errors.cy_genero">
                                <p class="text-error">
                                    The Gender field is required.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="cy_fechan" class="form-label">Birthdate:</label>
                            <datepicker class="vuejs3-datepicker-form-control" language="en" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="cy_fechan" v-model="form.cy_fechan"></datepicker>
                            <div v-if="errors.cy_fechan">
                                <p class="text-error">
                                    The Birthdate field is required.
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="cy_estatus" class="form-label">Legal status:</label>
                            <select class="form-select" aria-label="Default select example" id="cy_estatus" v-model="form.cy_estatus">
                                <option :value="null">Select....</option>
                                <option value="Ciudadano">Citizen</option>
                                <option value="Residente">Resident</option>
                                <option value="Permiso de Trabajo">(PT) Work permit</option>
                                <option value="Solicitud de Asilo">Asylum Application</option>
                                <option value="Petición">Petition</option>
                            </select>
                            <div v-if="errors.cy_estatus">
                                <p class="text-error">
                                    The Legal status field is required.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="cy_ssn" class="form-label">SSN:</label>
                            <input type="text" class="form-control" id="cy_ssn" v-model="form.cy_ssn" placeholder="000-00-0000" autocomplete="off">
                            <div v-if="errors.cy_ssn">
                                <p class="text-error">
                                    The SSN field is required.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- fin información del conyugue -->



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
                $('#cy_ssn').mask('000-00-0000');
            });
        },
    },

    setup(props){
        const form = useForm({
            id: props.cliente.id,
            cy_clienteid:null, cy_nombres: null, cy_apellidos: null, cy_genero: null, cy_fechan: null, cy_estatus: null, cy_ssn: null,

        })

        function submit(){
            router.post(route('recordnew.storeconyugue', form.id), form);
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
