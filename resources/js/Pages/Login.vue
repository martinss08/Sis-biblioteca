<template>

    <div class="container">
        <div class="box" id="primeira">
            <h1>Cadastrar</h1>

            <form action="">
                <div class="caixa">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="caixa">
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="caixa">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo">
                </div>
            </form>

            <div class="btn">
                <button> Cadastrar </button>
            </div>
        </div>

        <div class="box" id="segunda">
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

            <div class="btn">
                <button> Login </button>
            </div>
        </div>
    </div>

</template>

<script>


</script>

<style scoped>

    .container {
        display: flex;
        justify-content: center;
        gap: 20px;

        align-items: center;
        flex-direction: column;
    }

    .box {
        display: flex;
        flex-direction: column;
        width: 300px;
        border: 1px solid #a19d9d79;
        border-radius: 1rem;
        box-shadow: 0px 0px 5px  #00000056;
        padding: 10px;
    }

    .box h1 {
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }

    form .caixa {
        display: flex;
        margin: auto;
        width: 80%;
        /* border: 1px solid black; */
        padding: 7px;
        /* background: black; */
        flex-direction: column;
        gap: 10px;
    }

    form label {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
        /* color: a19d9d79; */
        /* margin-bottom: -10px; */
    }
    form input {
        border: none;
        text-align: left;
        border: 1px solid #a19d9d79 ;
        /* border-bottom: 1px solid #a19d9d79 ; */
        height: 34px;
        width: 100%;
        border-radius: .3rem;
    }

    .btn {
        margin-top: 1.3rem;
        width: 100px;
    }
    .btn button {
        padding: 7px;
        width:100%;
        height: 37px;
        border-radius: .8rem;
        background-color: #0000db;
        color: #fff;
        font-weight: 600;
        border: none;
        cursor: pointer;
    }

   
</style>