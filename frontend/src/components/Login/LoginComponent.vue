<template>
    <div class="main">
        <div class="login">
            <div class="content-login">
                <header>
                    <h1>Autenticação</h1>
                    <p>Netschool</p>
                </header>

                <div class="form">
                    <form>
                        <div class="mb-3">
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário">
                        </div>
                        <div class="mb-3">
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <button type="submit" class="bt" @click.prevent="login">Acessar</button>
                      </form>
                </div>

                <a href="http://www.republiquedesmangues.fr" @click="help">Precisa de ajuda?</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'LoginComponent',

        data() {
            return {
                
            }
        },

        methods: {
            login() {
                this.$router.push({name: 'home'})
            },
            help() {
                alert('Se vira parceiro, chupa essa manga')
            }
        },
    }
</script>

<style src="./style.css" scoped></style>