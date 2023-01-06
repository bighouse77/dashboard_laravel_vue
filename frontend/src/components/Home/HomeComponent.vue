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

            

        </template>
    </DashboardComponent>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';
import CardsComponent from '../CardsComponent.vue';

export default {
    name: 'HomeComponent',
    components: {
        DashboardComponent,
        CardsComponent
    }
}
</script>

<style src="./style.css" scoped></style>