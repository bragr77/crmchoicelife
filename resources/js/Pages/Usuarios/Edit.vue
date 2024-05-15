<template>
    <Head title="Edit Datos Dependiente"/>

    <AuthenticatedLayout>
        <div class="card">
            <div class="card-header">
                <i class="fa-solid fa-user-check"></i>
                Editar Datos del Dependiente de: <span>{{ usuario.name }} {{ usuario.lastname }}</span>
            </div>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="name" class="form-label">Nombres:</label>
                                    <input type="text" class="form-control" id="name" v-model="form.name">
                                    <div v-if="errors.name">
                                        <p class="text-error">
                                            {{ errors.name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="lastname" class="form-label">Apellidos:</label>
                                    <input type="text" class="form-control" id="lastname" v-model="form.lastname">
                                    <div v-if="errors.lastname">
                                        <p class="text-error">
                                            {{ errors.lastname }}
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="col-12 col-md-6 col-lg-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" v-model="form.email">
                                    <div v-if="errors.email">
                                        <p class="text-error">
                                            {{ errors.email }}
                                        </p>
                                    </div>
                                </div> -->

                            </div>

                            <div class="row mt-4">
                               <div class="col-12 col-md-6 col-lg-4">
                                    <label for="phone" class="form-label">Teléfono:</label>
                                    <input type="text" class="form-control" id="phone" v-model="form.phone">
                                    <div v-if="errors.phone">
                                        <p class="text-error">
                                            {{ errors.phone }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="npn" class="form-label">NPN:</label>
                                    <input type="text" class="form-control" id="npn" v-model="form.npn">
                                    <div v-if="errors.npn">
                                        <p class="text-error">
                                            {{ errors.npn }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <div class="container-fluid mt-4 text-center">
                        <div class="d-grid">
                            <div class="row">
                                <button type="submit" class="col-6 btn btn-primary">Enviar</button>
                                <Link class="col-6 btn btn-secondary" :href="route('usuarios.show', usuario.id)">
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
            usuario: Object,
            errors: Object,
        },

        mounted(){
            this.getmimascara();
        },

        methods:{
            getmimascara(){
                $(document).ready(function() {
                    $('#phone').mask('(000) 000-0000');
                });
            },
        },

        setup(props){
            const form = useForm({
                id: props.usuario.id,
                name: props.usuario.name,
                lastname: props.usuario.lastname,
                phone: props.usuario.phone,
                npn: props.usuario.npn,
                /* email: props.usuario.email,
                password: props.usuario.password, */
            })

            function submit(){
                router.put(route('usuarios.update', form.id), form);
            }

            return { form, submit };
        }
    }
</script>
