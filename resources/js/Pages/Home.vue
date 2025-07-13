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
                
                <button> Cadastrar </button>
            </form>
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
                
                <button> Cadastrar </button>
            </form>
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
    }

    .box {
        display: flex;
        flex-direction: column;
        text-align: center;
        width: 300px;
        border: 1px solid black;
    }

    .box h1 {
        font-family: Arial, Helvetica, sans-serif;
    }

    form .caixa {
        display: flex;
        /* background: black; */
        flex-direction: column;
    }

   
</style>