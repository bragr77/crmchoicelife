<template>
    <Head title="Edit Datos Clientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check"></i>
                Editar Datos del Conyugue de: <span>{{ cliente.nombres }}</span>
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <!-- información del conyugue -->
                    <h4 class="text-center">Información del Conyugue</h4>
                    <hr>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="nombres" class="form-label">Nombres:</label>
                            <input type="text" class="form-control" id="nombres" v-model="form.nombres">
                            <div v-if="errors.nombres">
                                <p class="text-error">
                                    {{ errors.nombres }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="apellidos" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" v-model="form.apellidos">
                            <div v-if="errors.apellidos">
                                <p class="text-error">
                                    {{ errors.apellidos }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="genero" class="form-label">Genero:</label>
                            <select class="form-select" aria-label="Default select example" id="genero" v-model="form.genero">
                                <option :value="null">Selecciona....</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Masculino">Masculino</option>
                            </select>
                            <div v-if="errors.genero">
                                <p class="text-error">
                                    {{ errors.genero }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-4">
                            <label for="fechan" class="form-label">Fecha de Nacimiento</label>
                            <datepicker class="vuejs3-datepicker-form-control" language="es" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="fechan" v-model="form.fechan"></datepicker>
                            <div v-if="errors.fechan">
                                <p class="text-error">
                                    {{ errors.fechan }}
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label for="estatus" class="form-label">Estatus Legal:</label>
                            <select class="form-select" aria-label="Default select example" id="estatus" v-model="form.estatus">
                                <option :value="null">Selecciona....</option>
                                <option value="Ciudadano">Ciudadano</option>
                                <option value="Residente">Residente</option>
                                <option value="Permiso de Trabajo">Permiso de Trabajo</option>
                                <option value="Solicitud de Asilo">Solicitud de Asilo</option>
                                <option value="Petición">Petición</option>
                            </select>
                            <div v-if="errors.estatus">
                                <p class="text-error">
                                    {{ errors.estatus }}
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="ssn" class="form-label">Nro. Seguro Social:</label>
                            <input type="text" class="form-control" id="ssn" v-model="form.ssn" placeholder="000-00-0000" autocomplete="off">
                            <div v-if="errors.ssn">
                                <p class="text-error">
                                    {{ errors.ssn }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- fin información del conyugue -->

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
        conyugue: Object,
        errors: Object,
    },

    mounted(){

        this.getmimascara();
    },

    methods:{

        getmimascara(){
            $(document).ready(function() {
                $('#ssn').mask('000-00-0000');
            });
        },
    },

    setup(props){
        const form = useForm({
            id: props.conyugue.id,
            nombres: props.conyugue.nombres,
            apellidos: props.conyugue.apellidos,
            genero: props.conyugue.genero,
            fechan: props.conyugue.fechan,
            estatus: props.conyugue.estatus,
            ssn: props.conyugue.ssn,
        })

        function submit(){
            router.put(route('updateconyugue.update', form.id), form);
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
