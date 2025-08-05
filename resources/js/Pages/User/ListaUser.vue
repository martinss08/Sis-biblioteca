<template>
    <div class="container mt-5">
        <h1 class=" text-center">Lista de Usuarios</h1>

        <div class="col-10 ms-5">
            <a href="/user/create" class="btn btn-primary m-2">
                Criar Usuarios
            </a>
        </div>
        <div class="col-10 text-center mx-auto border p-4 rounded">

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
                <tr v-for="user in users" :key="user.id">
                    <!-- <th scope="row">1</th> -->
                    <td>{{ user.name }} </td>
                    <td>{{ user.email }} </td>
                    <td class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger"
                            @click="deletar(user.id)">
                            Deletar
                        </button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import Swal from 'sweetalert2'

const { users } = defineProps(['users'])

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

</script>

<style lang="scss" scoped>

</style>