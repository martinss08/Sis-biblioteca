<template>
    <div style="display: flex; flex-direction: column; align-items: center; margin-top:3rem;">
        <h1>Criar usuario</h1>
        <div id="box">
            <form @submit.prevent="submit">
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
                <button type="submit"> Cadastrar </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
 
const form = useForm({
    name: '',
    email: '',
    password: ''
})

function submit() {
    console.log('clik');
    form.post('/user')
}

</script>

<style scoped>

    #box {
        border:1px solid #8080805e;
        border-radius: .7rem;
        padding: 10px;
        width: 390px;
        height: 330px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: .5rem;

    }
    form {
        display: flex;
        flex-direction: column;
        
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
        border: 1px solid black;
        border: 1px solid #8080805e;
        height: 38px;
        border-radius: .4rem;
        background-color: grey;
    }   
</style>