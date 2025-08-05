<template>
    <div class="d-flex align-items-center justify-content-center mt-5 flex-column">
        <h1> {{ props.user ? 'Editar usuario' : 'Cadastrar usuario'  }} </h1>

        <div class="col-6 ">
            <a href="/user" class="btn btn-secondary">
                <- Voltar
            </a>
        </div>

        <div class="d-flex align-items-center justify-content-center mt-5 rounded" id="box">
            <form class="d-flex flex-column" 
            @submit.prevent="submit">
                <div class="caixa">
                    <label for="name">Name</label>
                    <input type="text" name="name" v-model="form.name">
                </div>
                <div class="caixa">
                    <label for="email">Email</label>
                    <input type="text" name="email" v-model="form.email">
                </div>
                <div class="caixa">
                    <label for="password">Password</label>
                    <input type="password" name="password" v-model="form.password">
                </div>
                <button type="submit"> 
                    {{ props.user ? 'Editar' : 'Cadastrar' }}    
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    user: {
        type: Object,
        default: null
    }
})
 
const form = useForm({
    name: props.user?.name || '',
    email: props.user?.email || '',
    password: props.user?.password || ''
})

function submit() {
    if(props.user) {
        console.log("oi")
        form.put(`/user/${props.user.id}`)
    } else {
        form.post('/user')
    }
}

</script>

<style scoped>

    #box {
        border:1px solid #8080805e;
        width: 390px;
        height: 330px;
    }
    .caixa {
        display: flex;
        flex-direction: column;
        margin-top: .5rem;
    }
    .caixa label {
        font-size: 1.1rem;
        font-weight: 500;
    }
    .caixa input {
        border: 1px solid #8080805e;
        border-radius: .4rem;
        height: 38px;
        width: 250px;
    }
    button {
        margin-top: 2.4rem;
        border: 1px solid #8080805e;
        height: 38px;
        border-radius: .4rem;
        background-color: grey;
    }   
</style>