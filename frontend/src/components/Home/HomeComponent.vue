<template>
    <DashboardComponent>
        <template v-slot:slot-pages>
            <div class="content-pages">
                <header class="title-pages">
                    Início
                </header>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <CardsComponent 
                        :type="'Alunos'"
                        :updown="'fa-solid fa-arrow-up'" 
                        :percentage="'90%'" 
                        :icon="'fa-solid fa-graduation-cap'"
                        :qtd="'17900'"
                    />
                </div>

                <div class="col-12 col-md-3">
                    <CardsComponent 
                        :type="'Receita'" 
                        :updown="'fa-solid fa-arrow-down'" 
                        :percentage="'15%'" 
                        :icon="'fa-solid fa-sack-dollar'"
                        :qtd="'R$886,2 Mi'"
                    />
                </div>

                <div class="col-12 col-md-3">
                    <CardsComponent 
                        :type="'Inscrições'" 
                        :updown="'fa-solid fa-arrow-up'" 
                        :percentage="'35%'" 
                        :icon="'fa-solid fa-people-group'"
                        :qtd="'7.000'"
                    />
                </div>

                <div class="col-12 col-md-3">
                    <CardsComponent 
                        :type="'Abandonos'" 
                        :updown="'fa-solid fa-arrow-up'" 
                        :percentage="'18%'" 
                        :icon="'fa-solid fa-heart-crack'"
                        :qtd="'1.899'"
                    />
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="users" :description="'Professores'" :columns="['Nome', 'E-mail', 'Website']" />
                    </div>
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="users" :description="'Conteudistas'" :columns="['Nome', 'E-mail', 'Disciplina']" />
                    </div>
                </div>
            </div>

            
        </template>
    </DashboardComponent>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';
import CardsComponent from '../CardsComponent.vue';
import ListsComponent from '../ListsComponent.vue';

const axios = require('axios').default;

export default {
    name: 'HomeComponent',
    mounted() {
        this.getUsers();
    },
    data() {
        return{
            users: []
        }  
    },
    methods: {
        // GET
        async getUsers() {
            // MAKE A REQUEST FOR A USER WITH A GIVEN ID
            const response = await axios.get('https://jsonplaceholder.typicode.com/users')
            if (response.status == 200) {
                this.users = response.data;
            } else {
                console.error("Erro na API");
            }
        }
    },
    components: {
        DashboardComponent,
        CardsComponent,
        ListsComponent
    }
}
</script>

<style src="./style.css" scoped></style>