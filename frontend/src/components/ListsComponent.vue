<template>
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
                        <button @click="erase"><i class="fa-solid fa-trash"></i></button>
                      </div>
                    </td>     
                  </tr>        
                </tbody>
              </table>

              <div class="add">
                <button @click="add"><i class="fa-solid fa-plus"></i></button>
              </div>

              <CadastroPopupComponent @close="closePopup" v-if="showPopup"/>

        </div>
    </div>
</template>

<script>
import CadastroPopupComponent from './Cadastro/CadastroPopupComponent.vue';

export default {
    name: "ListsComponent",
    props: {
        data: Array,
        description: String,
        columns: {},
    },
    data() {
      return {
        showPopup: false
      }
    },
    methods: {
        edit() {
            return console.log("Editando");
        },
        erase() {
            return console.log("Deletando");
        },
        add() {
          this.showPopup = true;
        },
        closePopup() {
          this.showPopup = false;
        }
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