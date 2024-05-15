<template>
    <Head title="Agregar Clientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check"></i>
                Agregar Clientes
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <!-- información del cliente -->
                    <div class="container-fluid card py-4">
                        <h4 class="text-center">Información Personal</h4>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_nombres" class="form-label">Nombres:</label>
                                <input type="text" class="form-control" id="cl_nombres" v-model="form.cl_nombres">
                                <div v-if="errors.cl_nombres">
                                    <p class="text-error">
                                        {{ errors.cl_nombres }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_apellidos" class="form-label">Apellidos:</label>
                                <input type="text" class="form-control" id="cl_apellidos" v-model="form.cl_apellidos">
                                <div v-if="errors.cl_apellidos">
                                    <p class="text-error">
                                        {{ errors.cl_apellidos }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_genero" class="form-label">Genero:</label>
                                <select class="form-select" aria-label="Default select example" id="cl_genero" v-model="form.cl_genero">
                                    <option :value="null">Selecciona....</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                                <div v-if="errors.cl_genero">
                                    <p class="text-error">
                                        {{ errors.cl_genero }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_fechan" class="form-label">Fecha de Nacimiento:</label>
                                <datepicker class="vuejs3-datepicker-form-control" language="es" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="cl_fechan" v-model="form.cl_fechan"></datepicker>
                                <div v-if="errors.cl_fechan">
                                    <p class="text-error">
                                        {{ errors.cl_fechan }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <label for="cl_direccion" class="form-label">Direccion:</label>
                                <input type="text" class="form-control" id="cl_direccion" v-model="form.cl_direccion">
                                <div v-if="errors.cl_direccion">
                                    <p class="text-error">
                                        {{ errors.cl_direccion }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_ciudad" class="form-label">Ciudad:</label>
                                <input type="text" class="form-control" id="cl_ciudad" v-model="form.cl_ciudad">
                                <div v-if="errors.cl_ciudad">
                                    <p class="text-error">
                                        {{ errors.cl_ciudad }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_condado" class="form-label">Condado:</label>
                                <input type="text" class="form-control" id="cl_condado" v-model="form.cl_condado">
                                <div v-if="errors.cl_condado">
                                    <p class="text-error">
                                        {{ errors.cl_condado }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_estado" class="form-label">Estado:</label>
                                <input type="text" class="form-control" id="cl_estado" v-model="form.cl_estado">
                                <div v-if="errors.cl_estado">
                                    <p class="text-error">
                                        {{ errors.cl_estado }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-3">
                                <label for="cl_postal" class="form-label">Codigo Postal:</label>
                                <input type="text" class="form-control" id="cl_postal" v-model="form.cl_postal">
                                <div v-if="errors.cl_postal">
                                    <p class="text-error">
                                        {{ errors.cl_postal }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <label for="telefono" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" v-model="form.cl_telefono" placeholder="(000) 000-0000" autocomplete="off">
                                <div v-if="errors.cl_telefono">
                                    <p class="text-error">
                                        {{ errors.cl_telefono }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="cl_email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="cl_email" v-model="form.cl_email">
                                <div v-if="errors.cl_email">
                                    <p class="text-error">
                                        {{ errors.cl_email }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_estatus" class="form-label">Estatus Legal:</label>
                                <select class="form-select" aria-label="Default select example" id="cl_estatus" v-model="form.cl_estatus">
                                    <option :value="null">Selecciona....</option>
                                    <option value="Ciudadano">Ciudadano</option>
                                    <option value="Residente">Residente</option>
                                    <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                                    <option value="Solicitud de Asilo">Solicitud de Asilo</option>
                                    <option value="Petición">Petición</option>
                                </select>
                                <div v-if="errors.cl_estatus">
                                    <p class="text-error">
                                        {{ errors.cl_estatus }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_ssn" class="form-label">Nro. Seguro Social:</label>
                                <input type="text" class="form-control" id="cl_ssn" v-model="form.cl_ssn" placeholder="000-00-0000" autocomplete="off">
                                <div v-if="errors.cl_ssn">
                                    <p class="text-error">
                                        {{ errors.cl_ssn }}
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
                        <h4 class="text-center">Información de Ingresos</h4>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_ingreso" class="form-label">Ingreso Grupal Anual en USD($):</label>
                                <input type="text" class="form-control" id="cl_ingreso" v-model="form.cl_ingreso">
                                <div v-if="errors.cl_ingreso">
                                    <p class="text-error">
                                        {{ errors.cl_ingreso }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_banco" class="form-label">Banco:</label>
                                <input type="text" class="form-control" id="cl_banco" v-model="form.cl_banco">
                                <div v-if="errors.cl_banco">
                                    <p class="text-error">
                                        {{ errors.cl_banco }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="cl_ruta" class="form-label">Ruta:</label>
                                <input type="text" class="form-control" id="cl_ruta" v-model="form.cl_ruta">
                                <div v-if="errors.cl_ruta">
                                    <p class="text-error">
                                        {{ errors.cl_ruta }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cl_cuenta" class="form-label">Nro. de Cuenta:</label>
                                <input type="text" class="form-control" id="cl_cuenta" v-model="form.cl_cuenta">
                                <div v-if="errors.cl_cuenta">
                                    <p class="text-error">
                                        {{ errors.cl_cuenta }}
                                    </p>
                                </div>
                            </div>

                            <!-- <div v-if="user.role_id != 3" class="col-12 col-md-4">
                                <label for="cl_user_id" class="form-label">Agente:</label>
                                <select class="form-select" aria-label="Default select example" id="cl_user_id" v-model="form.cl_user_id">
                                    <option :value="null">Selecciona....</option>
                                    <option v-for="usuario in usuarios" :key="usuario.id" :value="usuario.id">{{ usuario.name }} {{ usuario.lastname }}</option>
                                </select>

                                <div v-if="errors.cl_user_id">
                                    <p class="text-error">
                                        {{ errors.cl_user_id }}
                                    </p>
                                </div>
                            </div> -->

                            <div class="col-12 col-md-4">
                                <label for="cl_cuenta" class="form-label">Agente:</label>
                                <p>{{ user.name }} {{ user.lastname }}</p>
                            </div>

                            <div class="col-12 col-md-4">
                                <a href="!#" data-bs-toggle="modal" data-bs-target="#modalTerminos">
                                    Condiciones y Terminos
                                </a>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="acepto" id="flexCheckDefault" v-model="form.cl_acepta">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       Aceptar las condiciones
                                    </label>
                                </div>
                                <div v-if="errors.cl_acepta">
                                    <p class="text-danger">
                                        Debe <span class="fw-bold">aceptar</span> las condiciones.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- fin información de ingresos -->


                    <div class="container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <Link class="col-6 btn btn-secondary" :href="route('clientes.index')">
                                    Regresar
                                </Link>
                                <button type="submit" class="col-6 btn btn-primary">Siguiente</button>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalTerminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Condiciones y términos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Doy consentimiento a <span class="fw-bold">starsseguros</span>, para actuar como corredor de seguros médicos para mí y para todo mi hogar, si corresponde. para fines de inscripción en un Plan de salud calificado ofrecido en el Mercado facilitado a nivel federal. Al dar mi consentimiento a este acuerdo, autorizo a <span class="fw-bold">starsseguros</span> a ver y utilizar la información confidencial proporcionada por mí por escrito, electrónicamente o por teléfono solo para uno o más de los siguientes:
                        </p>
                        <ul class="lista">
                            <li>
                                Búsqueda de una aplicación de Marketplace existente.
                            </li>
                            <li>
                                Completar una solicitud de elegibilidad e inscripción en un plan de salud calificado del Mercado u otros programas gubernamentales de asequibilidad de seguros, como Medicaid y CHIP o créditos fiscales anticipados para ayudar a pagar las primas del Mercado.
                            </li>
                            <li>
                                Proporcionar mantenimiento continuo de la cuenta y asistencia para la inscripción, según sea necesario.
                            </li>
                            <li>
                                Responder a consultas del Mercado sobre mi solicitud
                            </li>
                        </ul>
                        <p>
                            Entiendo que <span class="fw-bold">starsseguros</span> no utilizará ni compartirá mi información de identificación personal (PII) para ningún propósito distinto de los enumerados anteriormente. El Agente se asegurará de que mi PII se mantenga privada y segura al recopilar, almacenar y utilizar mi PII para los fines indicados anteriormente.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
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
                $('#cl_ingreso').mask('$000.000.000.000.000.000,00 $', { reverse: true });
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
            router.post(route('clientes.store'), form);
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

    .lista{
        list-style: disc;
    }
</style>
