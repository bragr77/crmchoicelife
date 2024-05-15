<template>
    <Head title="Edit Finanzas Clientes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check"></i>
                Editar Finanzas del Cliente
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">

                    <!-- información de ingresos -->
                    <div class="container-fluid card py-4 mt-4">
                        <h4 class="text-center">Información de Ingresos</h4>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="ingreso" class="form-label">Ingreso Grupal Anual en USD($):</label>
                                <input type="text" class="form-control" id="ingreso" v-model="form.ingreso">
                                <div v-if="errors.ingreso">
                                    <p class="text-error">
                                        {{ errors.ingreso }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="banco" class="form-label">Banco:</label>
                                <input type="text" class="form-control" id="banco" v-model="form.banco">
                                <div v-if="errors.banco">
                                    <p class="text-error">
                                        {{ errors.banco }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="ruta" class="form-label">Ruta:</label>
                                <input type="text" class="form-control" id="ruta" v-model="form.ruta">
                                <div v-if="errors.ruta">
                                    <p class="text-error">
                                        {{ errors.ruta }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 col-md-4">
                                <label for="cuenta" class="form-label">Nro. de Cuenta:</label>
                                <input type="text" class="form-control" id="cuenta" v-model="form.cuenta">
                                <div v-if="errors.cuenta">
                                    <p class="text-error">
                                        {{ errors.cuenta }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- fin información de ingresos -->

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
        errors: Object,
    },

    mounted(){

        this.getmimascara();
    },

    methods:{

        getmimascara(){
            $(document).ready(function() {
                $('#ingreso').mask('$000.000.000.000.000,00 $', { reverse: true });
                $('#ruta').mask('000000000', { reverse: true });
                $('#cuenta').mask('00000000000000000000', { reverse: true });
            });
        },
    },

    setup(props){
        const form = useForm({
            id: props.cliente.id,
            ingreso: props.cliente.ingreso,
            banco: props.cliente.banco,
            ruta: props.cliente.ruta,
            cuenta: props.cliente.cuenta,
        })

        function submit(){
            router.put(route('updatefinanzas.update', form.id), form);
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

