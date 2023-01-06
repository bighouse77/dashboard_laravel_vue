<template>
    <div :class="{'my_cards_up':true, my_cards_down:isDown}">
        <div class="content top">
            <h3>{{ type }}</h3>
            <div class="percentage">
                <i :class=[updown]></i>
                &nbsp;&nbsp;<p>{{ percentage }}</p>
            </div>
        </div>

        <div class="content footer">
            <i :class=[icon]></i>
            <p class="qtd">{{ qtd }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardsComponent',
    data() {
        return {
           isDown: false
        }
    },
    props: {
        type: String,
        updown: String,
        percentage: String,
        icon: String,
        qtd: String
    }
}
</script>

<style scoped>

.my_cards_up {
    width: 100%;
    display: flex;
    flex-direction: column;
    padding: 15px;
    border: 3px solid rgb(2, 196, 2);
    border-radius: 15px;
    background-color: white;
    color: #37485c;
}

.my_cards_down {
    width: 100%;
    display: flex;
    flex-direction: column;
    padding: 15px;
    border: 3px solid rgb(255, 20, 20);
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

.percentage{
    display: flex;
    color: rgb(2, 196, 2);
}

.footer {
    display: flex;
    font-size: 25px;
    margin: 0px;
}

.qtd {
    margin: 0px;
}

</style>