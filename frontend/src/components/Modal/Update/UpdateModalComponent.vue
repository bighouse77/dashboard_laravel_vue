<template>
    <div class="popup">
        <div class="popup-inner">
            <h1>Atualizar dados</h1>

            <div class="form" method="post">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">{{columns[0]}}</label>
                      <input
                        v-model="form.name"
                        type="text" 
                        class="form-control" 
                        id="name"
                    >
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">{{ columns[1] }}</label>
                      <input
                        v-model="form.email"
                        type="email" 
                        class="form-control" 
                        id="email" 
                        placeholder="exemplo@exemplo.com"
                      >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">{{ columns[2] }}</label>
                        <input 
                            v-model="form.information"
                            type="text" 
                            class="form-control" 
                            id="website"
                        >
                      </div>

                    <div class="btn-form">
                        <button @click="popup" class="btn btn-danger">Cancelar</button>&nbsp;&nbsp;
                        <button @click="postData" type="submit" class="btn btn-success">Atualizar</button>
                    </div>

                </form>

            </div>      
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'UpdateModalComponent',
    data() {
        return {
          form: {
            name: this.dataShow[0].name,
            email: this.dataShow[0].email,
            information: this.dataShow[0].website
          }
        }     
    },
    methods: {
        updateData() {
          this.$emit('updateData');
        },
        popup() {
            this.$emit('close');
        },

        // UPDATE
        async postData() {
            try {
                await axios.put('http://localhost:8000/api/put/' + this.dataDel, this.form)
                  .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
                this.$emit('close');
            } catch (error) {
                console.log(error);
            }
            this.updateData();
            this.$emit('close');
        }
    },
    props: {
        data: Array,
        dataShow: Array,
        columns: Array,
        dataDel: String
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
    font-family: 'Inter',serif;
    color: #293746;    
}

.popup-inner {
    background-color: white;
    padding: 60px;
    width: 800px;
    box-shadow: 3px 2px 2px black;
    border-radius: 20px;
}

.popup-inner h1 {
    font-weight: bold;
    text-align: center;
}

.form {
    margin-top: 50px;
    font-weight: bold;
}

.form input {
  height: 47px;
  border-radius: 20px;
  padding: 20px;
  font-weight: bold;
}

.form label {
  margin-left: 10px;
}

.btn-form {
    margin-top: 40px;
    display: flex;
    justify-content: right;
}

</style>