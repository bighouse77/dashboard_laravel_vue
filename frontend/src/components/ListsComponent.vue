<template>

    <div v-if="cadastroRealizadoOn" class="alert alert-success" role="alert">
      Cadastro realizado com sucesso!
    </div>

    <div class="lists">
        <div class="top">
            <p>
              <strong>{{ description }}</strong>
              &nbsp;<span class="badge text-bg-info">{{ data.length }} </span>
            </p>
        </div>

        <div class="content">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">{{ columns[0] }}</th>
                    <th scope="col">{{ columns[1] }}</th>
                    <th scope="col">{{ columns[2] }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td class="btn-style">
                      {{ description == 'Professores' ? user.website : user.disciplina}}
                      <div class="actions">
                        <button @click="edit"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button @click="deleteData"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </td>     
                  </tr>        
                </tbody>
              </table>

              <div class="add">
                <button @click="add"><i class="fa-solid fa-plus"></i></button>
              </div>

              <CadastroPopupComponent 
                @close="closePopup"
                @cadastroOk="showCadastroOk"
                v-if="showPopup"
                :columns=columns
                :cadastrotitle=title
                :dataIns=dataInsert
              />

        </div>
    </div>
</template>

<script>
import CadastroPopupComponent from './Cadastro/CadastroPopupComponent.vue';
import axios from 'axios';

export default {
    name: "ListsComponent",
    props: {
        data: Array,
        info: Array,
        title: String,
        description: String,
        dataInsert: String,
        columns: {},
    },
    data() {
      return {
        showPopup: false,
        cadastroRealizadoOn: false,
        dataDel: this.data
      }
    },
    methods: {
        add() {
          this.showPopup = true;
        },
        closePopup() {
          this.showPopup = false;
        },
        showCadastroOk(){
          this.cadastroRealizadoOn = true;
        },
        edit() {
          return console.log("Editando");
        },
        deleteData() {

          try {
            axios.delete('http://localhost:8000/api/delete', this.dataDel)

                .then(function (response) {
                  console.log(response);
                })
                .catch(function (error) {
                  console.log(error);
                });

          } catch (error) {
            console.log(error);
          }

        },
    },
    components: { CadastroPopupComponent }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');
.lists {
  width: 100%;
  padding: 20px;
  border: 1px solid gray;
  border-radius: 3px;
}

.top p {
  font-size: 23px;
  font-family: 'Inter';
}

.btn-style {
  display: flex;
  justify-content: space-between;
}

.btn-style button {
  border: none;
  font-size: 16px;
  background-color: transparent;
}

.actions {
  padding: 5px;
}

.add {
  border: none;
  display: flex;
  justify-content: right;
}
</style>