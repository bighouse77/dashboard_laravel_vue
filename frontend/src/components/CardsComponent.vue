<template>
    <div class="my_cards">
        <div class="content top">
            <h3>Alunos</h3>
            <div class="percentage">
                <i class="fa-solid fa-arrow-up"></i>
                &nbsp;&nbsp;<p>90%</p>
            </div>
        </div>

        <div class="content footer">
            <i class="fa-solid fa-graduation-cap"></i>
            <p class="qtd">17900</p>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style scoped>

.my_cards {
    width: 205px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    border: 3px solid rgb(2, 196, 2);
    border-radius: 15px;
    background-color: white;
    color: #37485c;
}

.content {
    display: flex;
    justify-content: space-between;
}

.top {
    display: flex;
}

.percentage {
    display: flex;
    color: rgb(2, 196, 2);
}

.footer {
    display: flex;
}

</style>