<template>
    <Head title="Edit Datos Clientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check"></i>
                Editar Datos del Cliente
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <!-- información del cliente -->
                    <div class="container-fluid card py-4">
                        <h4 class="text-center">Información Personal</h4>
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
                                <label for="fechan" class="form-label">Fecha de Nacimiento:</label>
                                <datepicker class="vuejs3-datepicker-form-control" language="es" use-utc="true" format="dd/MMMM/yyyy" :full-month-name="true" id="fechan" v-model="form.fechan"></datepicker>
                                <div v-if="errors.fechan">
                                    <p class="text-error">
                                        {{ errors.fechan }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <label for="direccion" class="form-label">Direccion:</label>
                                <input type="text" class="form-control" id="direccion" v-model="form.direccion">
                                <div v-if="errors.direccion">
                                    <p class="text-error">
                                        {{ errors.direccion }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="ciudad" class="form-label">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad" v-model="form.ciudad">
                                <div v-if="errors.ciudad">
                                    <p class="text-error">
                                        {{ errors.ciudad }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="condado" class="form-label">Condado:</label>
                                <input type="text" class="form-control" id="condado" v-model="form.condado">
                                <div v-if="errors.condado">
                                    <p class="text-error">
                                        {{ errors.condado }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="estado" class="form-label">Estado:</label>
                                <input type="text" class="form-control" id="estado" v-model="form.estado">
                                <div v-if="errors.estado">
                                    <p class="text-error">
                                        {{ errors.estado }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-3">
                                <label for="postal" class="form-label">Codigo Postal:</label>
                                <input type="text" class="form-control" id="postal" v-model="form.postal">
                                <div v-if="errors.postal">
                                    <p class="text-error">
                                        {{ errors.postal }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <label for="telefono" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" v-model="form.telefono" placeholder="(000) 000-0000" autocomplete="off">
                                <div v-if="errors.telefono">
                                    <p class="text-error">
                                        {{ errors.telefono }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" v-model="form.email">
                                <div v-if="errors.email">
                                    <p class="text-error">
                                        {{ errors.email }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
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
                            <div v-if="$page.props.auth.user.role_id != 3"  class="col-12 col-md-4">
                                    <label for="user_id" class="form-label">Agente:</label>
                                    <select class="form-select" aria-label="Default select example" id="user_id" v-model="form.user_id">
                                        <option :value="null">Selecciona....</option>
                                        <option v-for="usuario in usuarios" :key="usuario.id" :value="usuario.id">{{ usuario.name }} {{ usuario.lastname }}</option>
                                    </select>

                                    <div v-if="errors.user_id">
                                        <!-- <p class="text-error">
                                            {{ errors.cl_user_id }}
                                        </p> -->
                                        <p class="text-error">
                                            Debe seleccionar un agente
                                        </p>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <!-- fin información del cliente -->

                    <div class="container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <button type="submit" class="col-6 btn btn-primary">Enviar</button>
                                <Link class="col-6 btn btn-secondary" :href="route('clientes.show', cliente.id)">
                                    Regresar
                                </Link>
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
        usuarios: Object,
        errors: Object,
    },

    mounted(){

        this.getmimascara();
    },

    methods:{

        getmimascara(){
            $(document).ready(function() {
                $('#ssn').mask('000-00-0000');
                $('#telefono').mask('(000) 000-0000');
                $('#cl_ingreso').mask('$000.000.000.000.000,00 $', { reverse: true });
                $('#comision').mask('000.000.000.000.000,00', { reverse: true });
                $('#cl_ruta').mask('000000000', { reverse: true });
                $('#cl_cuenta').mask('00000000000000000000', { reverse: true });
            });
        },
    },

    setup(props){
        const form = useForm({
            id: props.cliente.id,
            nombres: props.cliente.nombres,
            apellidos: props.cliente.apellidos,
            genero: props.cliente.genero,
            fechan: props.cliente.fechan,
            direccion: props.cliente.direccion,
            ciudad: props.cliente.ciudad,
            condado: props.cliente.condado,
            estado: props.cliente.estado,
            postal: props.cliente.postal,
            telefono: props.cliente.telefono,
            email: props.cliente.email,
            estatus: props.cliente.estatus,
            ssn: props.cliente.ssn,
            user_id: props.cliente.user_id,
        })

        function submit(){
            router.put(route('updatedatos.update', form.id), form);
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
