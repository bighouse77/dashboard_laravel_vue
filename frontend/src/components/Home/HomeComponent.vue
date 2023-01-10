<template>
    <DashboardComponent>
        <template v-slot:slot-pages>
            <div class="content-pages">

                <div v-if="errorOn" class="alert alert-danger alert" role="alert">
                    Erro ao consumir API
                </div>

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
                        :type="'Professores'" 
                        :updown="'fa-solid fa-arrow-up'" 
                        :percentage="'35%'" 
                        :icon="'fa-solid fa-people-group'"
                        :qtd="professores.length"
                    />
                </div>

                <div class="col-12 col-md-3">
                    <CardsComponent 
                        :type="'Conteudistas'" 
                        :updown="'fa-solid fa-arrow-up'" 
                        :percentage="'18%'" 
                        :icon="'fa-solid fa-book-open'"
                        :qtd="conteudistas.length"
                    />
                </div>
            </div>

            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="professores" :description="'Professores'" :columns="['Nome', 'E-mail', 'Website']" />
                    </div>
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="conteudistas" :description="'Conteudistas'" :columns="['Nome', 'E-mail', 'Disciplina']" />
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
        this.getData();
    },
    data() {
        return{
            professores: [],
            conteudistas: [],
            errorOn: false
        }  
    },
    methods: {
        
        async getData() { 
            try {

                let response = await axios.get('http://localhost:8000/api') 

                if (response.status == 200) {
                    this.professores = response.data.professores;
                    this.conteudistas = response.data.conteudistas;
                } else {
                    this.errorOn = true;
                }

            } catch (error) {
                this.errorOn = true;
            }
        },

    },
    components: {
        DashboardComponent,
        CardsComponent,
        ListsComponent
    }
}
</script>

<style src="./style.css" scoped></style>