<template>
    <Header />
  <div class="container_livro">
    <h1>Edição de livro</h1>

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
          Editar Livro
        </button>
      </div>
    </form>
    
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import Header from '@/Components/Header.vue'
import { reactive } from 'vue'
const props = defineProps(['livro'])

const form = useForm({
  titulo: props.livro.titulo,
  autor: props.livro.autor,
  isbn: props.livro.isbn,
  ano: props.livro.ano,
  quantidade: props.livro.quantidade,
  descricao: props.livro.descricao,
})

const submit = () => {
  console.log("oi");
  form.put(`/livro/${props.livro.id}`);
}

//motivo das massagens nao aparecerem. Pois assifim ficava reativa e atualizava quando
//  vinha validação do back
// const errors = form.errors
</script>


