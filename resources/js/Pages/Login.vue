<template>

    <div class="container_login">
        <div class="box" id="primeira" v-if="mostrarCadastro">
            <h1>Cadastrar</h1>

            <form id="form_primeira" @submit.prevent="submit">
                <div class="caixa">
                    <label for="name">Name</label>
                    <input type="text" name="name" v-model="form.name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.name }"
                    >
                </div>
                <div class="invalid-feedback" v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>


                <div class="caixa">
                    <label for="email">Email</label>
                    <input type="text" name="email" v-model="form.email"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.email }"
                    >
                </div>
                <div class="invalid-feedback" v-if="form.errors.email">
                    {{ form.errors.email }}
                </div>

                <div class="caixa" style=" margin-bottom:1rem ;">
                    <label for="password">Password</label>
                    <input type="password" name="password" v-model="form.password"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.password }"
                    >
                </div>
                <div class="invalid-feedback" v-if="form.errors.password">
                    {{ form.errors.password }}
                </div>
                <!-- <div class="caixa">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo">
                </div> -->

                 <div class="btn">
                    <button type="submit"> Cadastrar </button>
                </div>
            </form>
           
            <div>
                <button class="logs" @click="mostrarCadastro = false">
                    Fazer login
                </button>
            </div>
        </div>

        <div class="box" id="segunda" v-if="!mostrarCadastro">
            <h1>Login</h1>

            <form action="">
                <div class="caixa">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="caixa">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
            </form>

            <div class="btn" style=" margin-top:-1.3rem" >
                <button> Login </button>
            </div>

            <div>
                <button class="logs" @click="mostrarCadastro = true">
                    Fazer Cadastro
                </button>
            </div>
        </div>
    </div>

</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'

const mostrarCadastro = ref(false)

const form = useForm({
  name: '',
  email: '',
  password: ''
})

const submit = () => {
    console.log('oi')
  form.post('/user', {
    onSuccess: () => {
      form.reset()
      mostrarCadastro.value = false
    }
  })
}
</script>


<style scoped>

    * {
        font-family: Arial, Helvetica, sans-serif;
    }

    .container_login {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        margin: 3rem auto;
    }

    .box {
        display: flex;
        flex-direction: column;
        min-height: 400px;
        width: 340px;
        border: 1px solid #a19d9d79;
        border-radius: 1rem;
        box-shadow: 0px 0px 5px  #00000056;
        padding: 10px;
    }
    .box h1 {
        text-align: center;
        padding: 1rem;
    }

    #form_primeira {
        margin-top: 1.3rem;
    }
    form .caixa {
        display: flex;
        width: 80%;
        padding: 7px;
        flex-direction: column;
        gap: 10px;
    }

    form label {
        font-weight: 600;
    }
    form input {
        border: none;
        text-align: left;
        border: 1px solid #a19d9d79 ;
        height: 34px;
        width: 100%;
        border-radius: .3rem;
        border: none;
        border-bottom: 1px solid #a19d9d79 ;
    }
    input.is-invalid {
      border-bottom: 1px solid #dc3545 !important;
    }
    .invalid-feedback {
      color: #dc3545;
      font-size: .6rem;
    }

    .btn {
        margin: 1.1rem auto 2.2rem;
        width: 100px;
    }
    .btn button {
        width:100%;
    }

    .logs {
        border: none;
        margin: auto;
        display: flex;
        background:transparent;
        font-size: .9rem;
        color:#0000db
    }
    .logs:hover {
        cursor: pointer;
        text-decoration: underline;
    }
</style>