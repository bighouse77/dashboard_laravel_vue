<template>
    <div class="sidebar">
        <div class="topo">
            <div class="avatar">
                <span>
                    <img src="@/assets/logo.png" alt="">
                </span>     
            </div>

            <div class="info">
                <p class="name">Maurício Casagrande</p>
                <p class="status">Online</p>
            </div>

            <hr>
        </div>
        
        <div class="menu">
            <ul>
                <li><router-link :to="{name: 'home'}">
                    <i class="fa-solid fa-house-user"></i>
                    &nbsp;&nbsp;&nbsp;Início
                </router-link></li>
                <li><router-link :to="{name: 'produtos'}">
                    <i class="fa-solid fa-store"></i>
                    &nbsp;&nbsp;&nbsp;Produtos
                </router-link></li>
                <li><router-link :to="{name: 'atendimentos'}">
                    <i class="fa-solid fa-headset"></i>
                    &nbsp;&nbsp;&nbsp;Atendimentos</router-link></li>
                <li><router-link :to="{name: 'relatorios'}">
                    <i class="fa-sharp fa-solid fa-chart-simple"></i>
                    &nbsp;&nbsp;&nbsp;Relatórios</router-link></li>
            </ul>
        </div>
        
    </div>
</template>

<script>
export default {
   name: 'SidebarComponent' 
}
</script>

<style>

.sidebar {
    text-decoration: none;
}

.topo {
    width: 100%;
    display: block;
    text-align: center;
    justify-items: center;
    padding: 20px 10px;
}

.info {
    color: white;
}

.name {
    font-size: 18px;
}

.status {
    font-size: 13px;
    font-weight: bold;
    color: rgb(2, 196, 2);
}

.menu {
    font-size: 16px;
    font-weight: 100;
}

.menu ul li {
    list-style: none;
    font-style: none; 
    padding: 15px 5px;
}

.menu ul li a {
    color: white;
    text-decoration: none;
}

</style>