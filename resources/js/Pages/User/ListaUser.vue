<template>
    <Header />
    <div class="container mt-5">
        <h1 class=" text-center">Lista de Usuarios</h1>

        <div class="col-10 ms-5">
            <a href="/user/create" class="btn btn-primary m-2">
                Cadastrar Usuarios
            </a>
        </div>
        <div class="text-center mx-auto border p-4 rounded">
            <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id">
                    <!-- <th scope="row">1</th> -->
                    <td>{{ user.name }} </td>
                    <td>{{ user.email }} </td>
                    <td class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary"
                            @click="editar(user.id)">
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger"
                            @click="deletar(user.id)">
                            Deletar
                        </button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-evenly mx-auto mt-4 mb-4" style="width: 250px;">
            <button class="px-3 py-1 border rounded" 
                @click="paginacao(users.prev_page_url)"
                :disabled="!users.prev_page_url">
                Anterior
            </button>

            <button class="px-3 py-1 border rounded"
                @click="paginacao(users.next_page_url)"
                :disabled="!users.next_page_url">
                Próximo
            </button>
      </div>       
    </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
import { router } from '@inertiajs/vue3'
import Swal from 'sweetalert2'

const { users } = defineProps(['users'])             

function editar(id) {
    router.get(`/user/${id}/edit`)
}

function deletar(id) {
  Swal.fire({
    title: 'Tem certeza?',
    text: 'Essa ação não pode ser desfeita!',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sim, deletar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      router.delete(`/user/${id}`)
    }
  })
}

function paginacao(url) {
    if(url) {
        router.visit(url)
    }
}

// function mudarPagina(url) {
//   if (url) {
//     router.get(url, { busca: busca.value }, {
//       preserveState: true,
//       preserveScroll: true,
//     })
//   }
// }

</script>

<style lang="scss" scoped>

</style>