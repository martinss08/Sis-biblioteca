<template>
    <Header />
    <div class="box-bsc">
        <div class="busca">
            <form class="form" action="">
                <input class="intTxt" type="text" placeholder="Buscar um livro">
                <button class="intBtn" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="main">
        <div class="conteudo">
            <h1>Catalogo de Livro</h1>

            <div class="container_main">
                <div class="box_card">

                    <div v-if="livros.length === 0">
                        <p>Nenhum livro encontrado.</p>
                    </div>

                    <div class="cards" v-for="livro in livros" :key="livro.id">
                        <div class="card_img">
                            <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                        </div>
                        <div class="card_title">
                            <h3>{{ livro.titulo }}</h3>

                            <div class="card_desc">
                                <p>
                                    <span>Descrição: </span>
                                    {{ livro.descricao }}
                                </p>
                            </div>
                        </div>
                        <div class="card_btn" @click="abrirDetalhes(livro)">
                            <button>Saber mais</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_btn">
                <button>Anterior</button>
                <button>Proximo</button>
            </div>
        </div>

        <div class="sobre"  v-if="mostrar">
            <button id="close"  @click="mostrar = false">
                X
            </button>
            <h1>Saber mais sobre </h1>
            <div class="sobre_cont"  v-if="livroSelecionado">
                <div class="sobre_img">
                    <img src="https://picsum.photos/300/200" alt="Imagem aleatória">
                </div>
                <div class="sobre_inf">
                    <p> <span>Titulo: </span> {{ livroSelecionado.titulo }}</p>
                    <p> <span>Autor: </span> {{ livroSelecionado.autor }} </p>
                    <p> <span>Ano de pubicação: </span> {{ livroSelecionado.ano }} </p>
                    <p> <span>Qnt. desponivel: </span> {{ livroSelecionado.quantidade }}</p>
                    <p> <span>Descrição: </span>   {{ livroSelecionado.descricao ?? 'Sem descrição.' }}
                    </p>
                </div>
            </div>
            
            <div class="sobre_btn">
                <button class="btn_resevar">Reservar livro</button>
                <button class="btn_editar">Editar</button>
                <button class="btn_deletar">Deletar</button>
            </div>

        </div>
    </div>
</template>

<script setup>

import Header from '@/Components/Header.vue'
import { usePage } from '@inertiajs/vue3'
import { computed, ref } from 'vue'

const props = usePage().props
// 'livros' vem do controller Laravel via Inertia
const livros = computed(() => props.livros ?? [])

const mostrar = ref(false)
const livroSelecionado = ref(null)

const abrirDetalhes = (livro) => {
  livroSelecionado.value = livro
  mostrar.value = true
}

</script>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    .main h1 {
        text-align: center;
    }
    .box-bsc {
        display: flex;
        justify-content: end;
        width: 100%;
        margin-right: 2rem;
    }

    
    .form {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 264px;
        margin: 10px 20px;
        border: 1px solid #8080807c;
        border-radius: .6rem;
    }
    .form .intTxt {
        width: 210px;
        border-radius:.8rem;
        margin-right:10px ;
    }
    .form .intBtn {
        width: 30px;
        height: 30px;
        border: none;
        cursor: pointer;
        background-color: transparent;
        border-radius: .5rem;
    }
    .form .intBtn i {
        font-size: 1rem;
    }

    .container_main {
        width:90%;
        border: 1px solid #8080807c;
        border-radius:.8rem;
        margin: 2.5rem auto 1rem auto;
        box-shadow: 0px 0px 2px #0000008f;
    }
    .box_card {
        display: grid;
        grid-template-columns: 200px 200px 200px 200px 200px;
        gap: 2rem 2.3rem;
        /* flex-direction: column; */
        /* justify-content: center; */
        /* grid: 5px; */
        /* border: 1px solid black;*/
        padding:20px 

    }
    .cards {
        width: 200px;
        padding:10px;
        border: 1px solid #8080807c;
        border-radius: .5rem;
        box-shadow: 0px 0px 2px #0000008f;

    }
    .card_img {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px;
        border: 1px solid #8080807c;
        /* box-shadow: 0px 0px 2px #0000008f; */
        border-radius: .5rem;
    }
    .card_title h3 {
        text-align: center;
        padding: 5px;
    }
    .card_title p {
        padding: 5px;
    }
    .card_title p span {
        font-weight: 800;
        padding: 3px;
    }

    .card_desc {
        height: 45px;
        overflow: hidden;
    }
    .card_desc p {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0;
        line-height: 1.2;
    }

    /* .card_btn { */
        /* display: flex; */
        /* justify-content: center; */
        /* margin:auto; */
        /* border:1px solid black */
    /* } */
    .card_btn button {
        padding: 6px;
        border: 1px solid #8080807c;
        border-radius: .5rem;
        background-color: #8080807c;
        cursor: pointer;
    }

    .container_btn {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .container_btn button {
        margin: 10px;
        width: 100px;
        padding: 5px;
        border: 1px solid gray;
        border-radius: .5rem;
        cursor: pointer;
    }

    .main {
        position: relative;
    }

    .conteudo {
        position: relative;
        z-index: 2;
    }

    .sobre {
        display: flex;
        flex-direction: column;
        position: absolute;
        /* left: 30%; */
        left: 21%;
        top:0;
        z-index: 3;
        width: 55%;
        padding: 1rem;
        border: 1px solid #8080807c;
        box-shadow: 0px 0px 2px #0000008f;
        border-radius:.8rem;

        backdrop-filter: blur(5px);
        /* background-color: rgba(0, 0, 0, 0.2); escurece um pouco o fundo */
        background-color: rgba(168, 168, 168, 0.2); /* escurece um pouco o fundo */
    }
    #close {
        position: absolute;
        background-color: transparent;
        border: none;
        font-size: 1rem;
        cursor: pointer;
        width: 30px;
        top: 5px;
        right: 10px;
    }
    .sobre h1 {
        text-align: center;
        padding: 20px;
        margin:-1rem auto 2rem auto;
    }

    .sobre_img {
        float: left; 
        width: 50%;
        margin: -1rem 1rem 1rem;
        padding: 10px;
        border: 1px solid #8080807c;
        box-shadow: 0px 0px 2px #0000008f;
    }
    .sobre_img img {
        width:100% ;
    }
    .sobre_inf p {
        margin-bottom: 4px ;
    }
    .sobre_inf span {
        font-weight: 800;
        padding: 5px;
    }

    .sobre_btn {
        display: flex;
        justify-content: space-around;
        width: 500px;
        margin: 1rem auto;
    }
    .sobre_btn button {
        width: 130px;
        padding: 2px;
        cursor: pointer;
        border: 1px solid #8080807c;
        border-radius: .5rem;
        background-color: #edae3a;
        /* background-color: #f700007c; */
        /* font-size: 1rem; */
        letter-spacing: 3px;
    }
    .sobre_btn .btn_resevar {
        background-color: aquamarine;
    }
    .sobre_btn .btn_editar {
        background-color: rgb(135, 247, 24);
    }
    .sobre_btn .btn_deletar {
        background-color:rgb(255, 18, 18);
    }

</style>