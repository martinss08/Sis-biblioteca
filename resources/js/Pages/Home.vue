<template>
    <Header />
    <div class="box-bsc">
        <div class="busca">
            <form action="">
                <input type="text" placeholder="Buscar um livro">
                <button type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="main">
        <h1>Catalogo de Livro</h1>
        <div class="container_main">
            <div class="box_card">
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
                        <button>Saber mais</button>
                    </div>
                </div>
                <div class="cards">
                    <div class="card_img">
                        <img src="https://picsum.photos/150/110" alt="Imagem aleatória">
                    </div>
                    <div class="card_title">
                        <h3>Cavalinho 123</h3>
                        <p>
                            <span>descrição:</span>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="card_btn">
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
</template>

<script setup>

import Header from '@/Components/Header.vue'

</script>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .main h1 {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
    .box-bsc {
        display: flex;
        justify-content: end;
        /* border: 1px solid black; */
        width: 100%;
        /* background: green; */
        margin-right: 2rem;
        /* margin-left: 50px ; */
        
    }
    
    form {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 264px;
        /* padding: 2px;'' */
        border: 1px solid #8080807c;
        /* margin-left: 50px ;'' */
        border-radius: .6rem;
        margin: 10px 20px;
    }
    form input[type="text"] {
        /* border: 1px solid #8080807c; */
        border-radius:.8rem;
        width: 210px;
        margin-right:10px ;
    }
    form button {
        border: none;
        /* border: 1px solid #8080807c; */
        background-color: transparent;
        cursor: pointer;
        width: 30px;
        height: 30px;
        border-radius: .5rem;
    }
    form button i {
        font-size: 1rem;
    }

    .container_main {
        width:90%;
        border: 1px solid #8080807c;
        border-radius:.8rem;
        margin: 2.5rem auto 1rem auto;
        /* padding: 10px; */
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
        /* margin:auto; */
        width: 200px;
        /* height: 210px; */
        border: 1px solid #8080807c;
        padding:10px;
        border-radius: .5rem;
        box-shadow: 0px 0px 2px #0000008f;

    }
    .card_img {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #8080807c;
        /* box-shadow: 0px 0px 2px #0000008f; */
        border-radius: .5rem;
        padding: 5px;
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

    /* .card_btn { */
        /* display: flex; */
        /* justify-content: center; */
        /* margin:auto; */
        /* border:1px solid black */
    /* } */
    .card_btn button {
        padding: 6px;
        /* border:none; */
        border: 1px solid #8080807c;
        border-radius: .5rem;
        /* background-color: #edae3a; */
        background-color: #8080807c;
        cursor: pointer;
    }

    .container_btn {
        width: 100%;
        /* border: 1px solid black; */
        display: flex;
        /* align-items: center; */
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
    
</style>