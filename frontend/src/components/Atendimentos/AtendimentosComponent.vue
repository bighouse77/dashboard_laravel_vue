<template>
    <DashboardComponent>
        <template v-slot:slot-pages>
            <div class="content-pages">
                <header class="title-pages">
                    Atendimentos
                </header> 
            </div>
        </template>
    </DashboardComponent>
</template>

<script>
import DashboardComponent from '../Dashboard/DashboardComponent.vue';

export default {
    name: 'AtendimentosComponent',
    components: {
        DashboardComponent,
    }
}
</script>

<style src="./style.css" scoped></style>