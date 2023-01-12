<template>
    <div class="popup">
        <div class="popup-inner">
            <h3>Cadastro de {{ cadastrotitle }}</h3>

            <div class="form" method="post">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">{{columns[0]}}</label>
                      <input 
                        v-model="name"
                        type="text" 
                        class="form-control" 
                        id="name" 
                        aria-describedby="emailHelp" 
                        placeholder="Digite seu nome completo..."
                    >
                    {{ name }}
                    </div>

                    

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">{{ columns[1] }}</label>
                      <input
                        v-model="email"
                        type="email" 
                        class="form-control" 
                        id="email" 
                        placeholder="exemplo@exemplo.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">{{ columns[2] }}</label>
                        <input 
                            v-model="information"
                            type="text" 
                            class="form-control" 
                            id="website">
                      </div>

                    <div class="btn-form">
                        <button @click="popup" class="btn btn-danger">Cancelar</button>&nbsp;&nbsp;
                        <button @click="postData" type="submit" class="btn btn-success">Cadastrar</button>
                    </div>

                    
                  </form>
            </div>      
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'CadastroPopupComponent',
    data() {
        return {
            name: '', 
            email: '',
            information: ''
        }     
    },
    methods: {
        popup() {
            this.$emit('close');
        },

        async postData() {

            if ('{{dataIns}}' == 'prof') {
                
                try {
                    axios.post('http://localhost:8000/api', {
                        data:[
                            nome = this.name,
                            email = this.email,
                            website = this.information
                        ]
                    })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });              
                } catch (error) {
                    console.log(error);
                }

            } else if('{{dataIns}}'== 'cont') {
                
                try {
                    axios.post('http://localhost:8000/api', {
                        data: [
                            nome = this.name,
                            email =this.email,
                            disciplina = this.information
                        ]
                    })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });              
                } catch (error) {
                    console.log(error);
                }

            }                          
        }
    },
    props: {
        cadastrotitle: String,
        infoquest: Array,
        columns: Array,
        dataIns: String
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');
.popup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 99;
    background-color: rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Inter';
    color: #293746;    
}

.popup-inner {
    background-color: white;
    padding: 32px;
    width: 800px;
    box-shadow: 3px 2px 2px black; 
}

.popup-inner h3 {
    font-weight: bold;
}

.form {
    margin-top: 50px;
    font-weight: bold;
}

.btn-form {
    margin-top: 40px;
    display: flex;
    justify-content: right;
}


</style>