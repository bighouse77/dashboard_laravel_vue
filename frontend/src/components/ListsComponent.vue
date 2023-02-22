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
                        <button @click="edit(
                            user.id,
                            user.name,
                            user.email,
                            user.website)">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button @click="deleteData(user.id)"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </td>     
                  </tr>

                  <DeleteModalComponent
                      @close="closeDelete"
                      @deleteOk="deleteData"
                      v-if="showDelete"
                  />
                </tbody>
              </table>

              <div class="add">
                <button @click="add"><i class="fa-solid fa-plus"></i></button>
              </div>

              <UpdateModalComponent
                @close="closeUpdate"
                @updateData="updateDataList"
                v-if="showUpdate"
                :columns="columns"
                :dataDel="dataDel"
                :dataShow="dataShow"
              />

              <CadastroModalComponent
                @close="closePopup"
                @cadOk="showCadastroOk"
                @upOk="updateList"
                v-if="showPopup"
                :columns=columns
                :cadastrotitle=title
                :dataIns=dataInsert
              />



        </div>
    </div>
</template>

<script>

import CadastroModalComponent from "@/components/Modal/Cadastro/CadastroModalComponent.vue";
import UpdateModalComponent from "@/components/Modal/Update/UpdateModalComponent.vue";
import DeleteModalComponent from "@/components/Modal/Delete/DeleteModalComponent.vue";
//import {default as axios} from "axios";

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
        showUpdate: false,
        showDelete: false,
        cadastroRealizadoOn: false,
        dataDel: '',
        dataDelete: '',
        dataShow: [],
      }
    },
    methods: {
        updateList() {
          this.$emit('updateCadList')
        },
        updateDataList(){
          this.$emit('updateDataList');
        },
        add() {
          this.showPopup = true;
        },
        closePopup() {
          this.showPopup = false;
        },
        closeUpdate() {
          this.showUpdate = false;
        },
        closeDelete() {
          this.showDelete = false;
        },
        showCadastroOk(){
          this.cadastroRealizadoOn = true;
          setTimeout(function () {
            this.cadastroRealizadoOn = false;
          }.bind(this), 7000);
        },
        async edit(id, name, email, info) {
          this.showUpdate = true;
          this.dataDel = id;
          this.dataShow = [{
            "name" : name,
            "email" : email,
            "website" : info
          }];
          await this.getData();
        },
        deleteData(id) {
          if (this.showDelete === false){
            this.showDelete = true;
            this.dataDelete = id;
          }
          else {
            console.log("TO AQUI PARÇA");
            this.closeDelete();
            this.$emit('delete', this.dataDelete);
          }
        },
    },
    components: {DeleteModalComponent, UpdateModalComponent, CadastroModalComponent}
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
  font-family: 'Inter',serif;
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