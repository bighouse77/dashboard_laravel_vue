<template>
    <DashboardComponent>
        <template v-slot:slot-pages>
            <div class="content-pages">
                <header class="title-pages">
                    Conteúdos
                </header> 
            </div>
        </template>
    </DashboardComponent>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';

export default {
    name: 'ContentComponent',
    components: {
        DashboardComponent,
    }
}
</script>

<style src="./style.css" scoped></style>