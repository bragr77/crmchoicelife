<template>
    <Head title="Customer registration"/>

        <div class="container d-flex justify-content-between">
            <div class="">
                <img class="logo-menu" src="/images/logo-horizontal.png" alt="">
            </div>
            <div class="d-flex align-items-center me-4">
                <a class="btn btn-secondary" href="https://choicelifefg.com/">
                    Return
                </a>
            </div>
        </div>



        <div class="container mt-2">
            <div class="card">
                <div class="card-header text-center">
                    <i class="fa-solid fa-user-check me-2"></i>
                    <span class="fw-bold">REGISTRATION FORM</span>
                </div>
                <div class="card-body">
                    <form @submit.prevent="submit">
                        <!-- información del cliente -->
                        <div class="container-fluid card py-4">
                            <h4 class="text-center">Personal Information</h4>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_nombres" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="cl_nombres" v-model="form.cl_nombres">
                                    <div v-if="errors.cl_nombres">
                                        <p class="text-error">
                                            The Names field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_apellidos" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="cl_apellidos" v-model="form.cl_apellidos">
                                    <div v-if="errors.cl_apellidos">
                                        <p class="text-error">
                                            The Surnames field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_genero" class="form-label">Gender:</label>
                                    <select class="form-select" aria-label="Default select example" id="cl_genero" v-model="form.cl_genero">
                                        <option :value="null">select....</option>
                                        <option value="Femenino">Female</option>
                                        <option value="Masculino">Male</option>
                                    </select>
                                    <div v-if="errors.cl_genero">
                                        <p class="text-error">
                                            The Gender field is required.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_fechan" class="form-label">Birthdate:</label>
                                    <datepicker class="vuejs3-datepicker-form-control" language="en" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="cl_fechan" v-model="form.cl_fechan"></datepicker>
                                    <div v-if="errors.cl_fechan">
                                        <p class="text-error">
                                            The Birthdate field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <label for="cl_direccion" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="cl_direccion" v-model="form.cl_direccion">
                                    <div v-if="errors.cl_direccion">
                                        <p class="text-error">
                                            The Address field is required.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_ciudad" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="cl_ciudad" v-model="form.cl_ciudad">
                                    <div v-if="errors.cl_ciudad">
                                        <p class="text-error">
                                            The City field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_condado" class="form-label">County:</label>
                                    <input type="text" class="form-control" id="cl_condado" v-model="form.cl_condado">
                                    <div v-if="errors.cl_condado">
                                        <p class="text-error">
                                            The County field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_estado" class="form-label">State:</label>
                                    <input type="text" class="form-control" id="cl_estado" v-model="form.cl_estado">
                                    <div v-if="errors.cl_estado">
                                        <p class="text-error">
                                            The State field is required.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-3">
                                    <label for="cl_postal" class="form-label">ZIP Code:</label>
                                    <input type="text" class="form-control" id="cl_postal" v-model="form.cl_postal">
                                    <div v-if="errors.cl_postal">
                                        <p class="text-error">
                                            The ZIP Code field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label for="telefono" class="form-label">Phone:</label>
                                    <input type="text" class="form-control" id="telefono" v-model="form.cl_telefono" placeholder="(000) 000-0000" autocomplete="off">
                                    <div v-if="errors.cl_telefono">
                                        <p class="text-error">
                                            The Phone field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="cl_email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="cl_email" v-model="form.cl_email">
                                    <div v-if="errors.cl_email">
                                        <p class="text-error">
                                            The Email field is required.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_estatus" class="form-label">Legal status:</label>
                                    <select class="form-select" aria-label="Default select example" id="cl_estatus" v-model="form.cl_estatus">
                                        <option :value="null">Select....</option>
                                        <option value="Ciudadano">Citizen</option>
                                        <option value="Residente">Resident</option>
                                        <option value="Permiso de Trabajo">(PT) Work permit</option>
                                        <option value="Solicitud de Asilo">Asylum Application</option>
                                        <option value="Petición">Petition</option>
                                    </select>
                                    <div v-if="errors.cl_estatus">
                                        <p class="text-error">
                                            The Legal status field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_ssn" class="form-label">SSN:</label>
                                    <input type="text" class="form-control" id="cl_ssn" v-model="form.cl_ssn" placeholder="000-00-0000" autocomplete="off">
                                    <div v-if="errors.cl_ssn">
                                        <p class="text-error">
                                            The SSN field is required.
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-4">
                                    <label for="cl_estadocivil" class="form-label">Estado Civil:</label>
                                    <select class="form-select" aria-label="Default select example" id="cl_estadocivil" v-model="form.cl_estadocivil">
                                        <option :value="null">Selecciona....</option>
                                        <option value="casado">Casado(a)</option>
                                        <option value="soltero">Soltero(a)</option>
                                    </select>
                                    <div v-if="errors.cl_estadocivil">
                                        <p class="text-error">
                                            {{ errors.cl_estadocivil }}
                                        </p>
                                    </div>
                                </div> -->
                            </div>

                        </div>
                        <!-- fin información del cliente -->

                        <!-- información de ingresos -->
                        <div class="container-fluid card py-4 mt-4">
                            <h4 class="text-center">Income Information</h4>
                            <hr>
                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_ingreso" class="form-label">Annual Group Income in USD ($):</label>
                                    <input type="text" class="form-control" id="cl_ingreso" v-model="form.cl_ingreso">
                                    <div v-if="errors.cl_ingreso">
                                        <p class="text-error">
                                            The Annual Group Income field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_banco" class="form-label">Name of the bank:</label>
                                    <input type="text" class="form-control" id="cl_banco" v-model="form.cl_banco">
                                    <div v-if="errors.cl_banco">
                                        <p class="text-error">
                                            The Name of the bank field is required.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="cl_ruta" class="form-label">Route:</label>
                                    <input type="text" class="form-control" id="cl_ruta" v-model="form.cl_ruta">
                                    <div v-if="errors.cl_ruta">
                                        <p class="text-error">
                                            The Route field is required.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-4">
                                    <label for="cl_cuenta" class="form-label">Account number:</label>
                                    <input type="text" class="form-control" id="cl_cuenta" v-model="form.cl_cuenta">
                                    <div v-if="errors.cl_cuenta">
                                        <p class="text-error">
                                            The Account number field is required.
                                        </p>
                                    </div>
                                </div>

                                <div  class="col-12 col-md-4">
                                    <label for="cl_user_id" class="form-label">Agent:</label>
                                    <select class="form-select" aria-label="Default select example" id="cl_user_id" v-model="form.cl_user_id">
                                        <option :value="null">Selecciona....</option>
                                        <option v-for="usuario in usuarios" :key="usuario.id" :value="usuario.id">{{ usuario.name }} {{ usuario.lastname }}</option>
                                    </select>

                                    <div v-if="errors.cl_user_id">
                                        <!-- <p class="text-error">
                                            {{ errors.cl_user_id }}
                                        </p> -->
                                        <p class="text-error">
                                            You must select an agent
                                        </p>
                                    </div>
                                </div>

                                <!-- <div class="col-12 col-md-4">
                                    <label for="cl_cuenta" class="form-label">Agente:</label>
                                    <p>{{ user.name }} {{ user.lastname }}</p>
                                </div> -->

                                <div class="col-12 col-md-4">
                                    <a href="!#" data-bs-toggle="modal" data-bs-target="#modalTerminos">
                                        Conditions and Terms
                                    </a>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="acepto" id="flexCheckDefault" v-model="form.cl_acepta">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Accept the conditions
                                        </label>
                                    </div>
                                    <div v-if="errors.cl_acepta">
                                        <p class="text-danger">
                                            You must <span class="fw-bold">accept</span> the terms and conditions
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- fin información de ingresos -->


                        <div class="container-fluid mt-4 text-center">
                            <div class="d-grid">
                                <div class="row">
                                    <a class="col-6 btn btn-secondary" href="https://starsseguros.com/">
                                        Return
                                    </a>
                                    <button type="submit" class="col-6 btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>

        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalTerminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Conditions and Terms</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            I give consent to <span class="fw-bold">starsseguros</span> to act as a health insurance broker for me and my entire household, if applicable. for purposes of enrollment in a Qualified Health Plan offered on the federally facilitated Marketplace. By consenting to this agreement, I authorize <span class="fw-bold">starsseguros</span> to view and use the confidential information provided by me in writing, electronically or by telephone only for one or more of the following:
                        </p>
                        <ul class="lista">
                            <li>
                                Search for an existing Marketplace app.
                            </li>
                            <li>
                                Complete an application for eligibility and enrollment in a qualified Marketplace health plan or other government insurance affordability programs, such as Medicaid and CHIP or advance tax credits to help pay Marketplace premiums.
                            </li>
                            <li>
                                Provide ongoing account maintenance and enrollment assistance as needed.
                            </li>
                            <li>
                                Respond to Market queries about my application
                            </li>
                        </ul>
                        <p>
                            I understand that <span class="fw-bold">starsseguros</span> will not use or share my personally identifiable information (PII) for any purpose other than those listed above. Agent will ensure that my PII is kept private and secure by collecting, storing and using my PII for the purposes indicated above.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
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
        usuarios: Object,
        errors: Object,
        user: Object,
    },

    mounted(){

        this.getmimascara();
    },

    methods:{

        getmimascara(){
            $(document).ready(function() {
                $('#cl_ssn, #cy_ssn, #d1_ssn, #d2_ssn, #d3_ssn, #d4_ssn, #d5_ssn, #d6_ssn, #d7_ssn').mask('000-00-0000');
                $('#telefono').mask('(000) 000-0000');
                $('#cl_ingreso').mask('$000.000.000.000.000,00 $', { reverse: true });
                $('#comision').mask('000.000.000.000.000,00', { reverse: true });
                $('#cl_ruta').mask('000000000', { reverse: true });
                $('#cl_cuenta').mask('00000000000000000000', { reverse: true });
            });
        },
    },

    setup(){
        const form = useForm({
            cl_nombres: null, cl_apellidos: null, cl_genero: null, cl_fechan: null, cl_direccion: null, cl_ciudad: null, cl_condado: null,
            cl_estado: null, cl_postal: null, cl_telefono: null, cl_email: null, cl_estatus: null, cl_ssn: null, cl_estadocivil: null,
            cy_nombres: null, cy_apellidos: null, cy_genero: null, cl_fechan: null, cy_estatus: null, cy_ssn: null, cl_ingreso: null,
            cl_banco: null, cl_ruta: null, cl_cuenta: null, cl_user_id: null, cl_dependientes: null, cl_acepta: null,
        })

        function submit(){
            router.post(route('record.store'), form);
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

    .lista{
        list-style: disc;
    }
</style>


