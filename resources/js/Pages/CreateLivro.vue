<template>
    <Header />
  <div class="container_livro">
    <h1>Cadastro de livro</h1>

    <form @submit.prevent="submit">
      <div class="box">
        <label for="titulo">Título</label>
        <input v-model="form.titulo" type="text" id="titulo"
          class="form-control"
          :class="{ 'is-invalid': form.errors.titulo }"
        />

     </div>
      <div class="invalid-feedback" v-if="form.errors.titulo">
        {{ form.errors.titulo }}
      </div>

      <div class="box">
        <label for="autor">Autor</label>
        <input v-model="form.autor" type="text" id="autor"
          class="form-control"
          :class="{ 'is-invalid': form.errors.autor }"
        />
      </div>
      <div class="invalid-feedback" v-if="form.errors.autor">
        {{ form.errors.autor }}
      </div>

      <div class="box">
        <label for="isbn">ISBN</label>
        <input v-model="form.isbn" type="text" id="isbn" 
          class="form-control"
          :class="{ 'is-invalid': form.errors.isbn }"
        />

      </div>
      <div class="invalid-feedback" v-if="form.errors.isbn">
        {{ form.errors.isbn }}
      </div>

      <div class="box menor">
        <label for="ano">Ano de Publicação</label>
        <input v-model="form.ano" type="number" id="ano" min="1500"
          class="form-control data"
          :class="{ 'is-invalid': form.errors.ano }"
        />

      </div>
      <div class="invalid-feedback" v-if="form.errors.ano">
        {{ form.errors.ano }}
      </div>

      <div class="box menor">
        <label for="quantidade">Qtd. em Estoque</label>
        <input v-model="form.quantidade" type="number" id="quantidade"
          class="form-control"
          :class="{ 'is-invalid': form.errors.quantidade }"
        />
        
      </div>
      <div class="invalid-feedback" v-if="form.errors.quantidade">
        {{ form.errors.quantidade }}
      </div>

      <!-- Ajustar descrição -->
      <div class="box">
        <label for="descricao">Descrição</label>
        <textarea 
          v-model="form.descricao"
          id="descricao"
          class="form-control"
          :class="{ 'is-invalid': form.errors.descricao }"
        ></textarea>
        
      </div>
      <div class="invalid-feedback" v-if="form.errors.descricao">
        {{ form.errors.descricao }}
      </div>
    
      <div class="btn">
        <button type="submit" :disabled="form.processing" >
          Salvar Livro
        </button>
      </div>
    </form>
    
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import Header from '@/Components/Header.vue'


const form = useForm({
  titulo: '',
  autor: '',
  isbn: '',
  ano: '',
  quantidade: '',
  descricao: '',
})

const submit = () => {
  console.log("oi");
  form.post('/livro/store');

}

//motivo das massagens nao aparecerem. Pois assifim ficava reativa e atualizava quando
//  vinha validação do back
// const errors = form.errors
</script>

<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

    .container_livro {
      display: flex;
      width: 500px;
      /* height: 530px; */
      margin: 3rem auto;
      padding: 10px;
      flex-direction: column;
      border: 1px solid #a19d9d79;
      border-radius: 1rem;
      box-shadow: 0px 0px 5px  #00000056;
        
    }

    .container_livro h1 {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      margin: 1rem 0 2rem 0;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 90%;
      margin: auto;
    }

    form .box {
      display: flex;
      width: 80%;
      padding: 2px;
      flex-direction: column;
      gap: 4px;
      margin-top: 5px;
    }
   
    form label {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 600;
      margin-bottom: -6px;
    }
    form input {
      border: none;
      text-align: left;
      /* border: 1px solid #a19d9d79 ; */
      border-bottom: 1px solid #a19d9d79 ;
      height: 30px;
      font-size: 1rem;
      color:#221f1f ;
    }
    input[type="text"] {
      padding-left: 20px;
    }

    input:focus {
      outline: none;
      border-bottom: 1px solid #a19d9db7 ;
    }

    input[type="date"] {
      color: transparent;
      text-shadow: 0 0 0 #978c8c;
    }

    textarea {
      border: 1px solid #a19d9d79;
      /* padding-left: 20px; */
      padding:10px 0 0 20px ;
      margin-top: 5px;
    }

    input.is-invalid {
      border-bottom: 1px solid #dc3545 !important;
    }
    .invalid-feedback {
      font-family: Arial, Helvetica, sans-serif;
      color: #dc3545;
      font-size: .6rem;
    }
    textarea.is-invalid {
      border: 1px solid #dc3545 !important;
    }
     
    .box.menor {
      margin-top: 1.2rem;
    }
    
    .box.menor input{
      width: 170px;
      text-align: center;
      margin-top: .4rem;
      
    }

    .btn {
      width: 100%;
      margin-top: 2rem;
      
    }
    .btn button {
      padding: 7px;
      height: 37px;
      border-radius: .8rem;
      background-color: #0000db;
      color: #fff;
      font-weight: 600;
      border: none;
      cursor: pointer;
    }

</style>
