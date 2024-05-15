<template>
    <Head title="Agregar-Agentes"/>

    <AuthenticatedLayout>

        <div class="card">
            <div class="card-header">
                Agregar Agentes
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
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="role" class="form-label">Rol:</label>
                                    <select class="form-select" aria-label="Default select example" id="role" v-model="form.role">
                                        <option :value="null">Selecciona....</option>
                                        <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.nombre_rol }}</option>
                                    </select>
                                    <div v-if="errors.role">
                                        <p class="text-error">
                                            {{ errors.role }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" v-model="form.email">
                                    <div v-if="errors.email">
                                        <p class="text-error">
                                            {{ errors.email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="phone" class="form-label">Teléfono:</label>
                                    <input type="text" class="form-control" id="phone" v-model="form.phone" placeholder="(000) 000-0000">
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
                            <div class="row mt-4">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" v-model="form.password">
                                    <div v-if="errors.password">
                                        <p class="text-error">
                                            {{ errors.password }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <label for="password_confirmation" class="form-label">Confirmar Password:</label>
                                    <input type="password" class="form-control" id="password_confirmation" v-model="form.password_confirmation">
                                    <div v-if="errors.password_confirmation">
                                        <p class="text-error">
                                            {{ form.errors.password_confirmation }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-4 text-right">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <Link class="btn btn-secondary ms-4" :href="route('usuarios.index')">
                                Regresar
                            </Link>
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

    export default {

    data() {
        return {
            confirmDeleteActive:false,
            deleteAgenteRow:"",
        };
    },

    components:{
        AuthenticatedLayout,
        Head,
        Link,
    },

    props: {
        usuarios: Object,
        roles: Object,
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


    setup(){
        const form = useForm({
            name: null,
            lastname: null,
            role: null,
            email: null,
            phone: null,
            npn: null,
            password: null,
            password_confirmation: null,
        })

        /* function submit(){
            router.post(route('usuarios.store'), form);
        } */

        function submit(){
            form.post(route('usuarios.store'), {
                onFinish: () => form.reset('password', 'password_confirmation'),
            });
        }

        return { form, submit };
    }



}
</script>
