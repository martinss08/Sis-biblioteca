<template>
    <div class="d-flex align-items-center justify-content-center mt-5 flex-column">
        
        <div class="d-flex align-items-center justify-content-center flex-column mt-5 rounded border p-3" style="width: 320px; height: 330px;">
            <h1> Login </h1>
            <form class="d-flex flex-column m-auto" style="width: 100%;"
                @submit.prevent="login">
                <div class="d-flex flex-column m-auto" style="width: 92%;" >
                    <label for="email">Email</label>
                    <input type="text" name="email" class="border rounded-lg" 
                        v-model="form.email"
                    >
                    
                </div>
                <div class="d-flex flex-column m-auto" style="width: 92%;">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="border rounded-lg"
                        v-model="form.password"
                    >
                     
                </div>
                <div class="w-50 m-auto" >
                    <button type="submit" class=" mt-4 border rounded-lg w-100" style="width: 90%;  padding: 10px;"> 
                    Login    
                </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { router, userForm } from '@inertiajs/vue3'
// import { router } from '@inertiajs/vue3'

const form = userForm({
    email: '',
    password: ''
})

function login() {
    router.post('/login')
}

</script>

<style lang="scss" scoped>

</style>