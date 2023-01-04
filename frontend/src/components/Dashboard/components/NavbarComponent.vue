<template>
    <div class="navbar">
        <h4 class="logo"> 
            <i class="fa-sharp fa-solid fa-chalkboard-user"></i>    
            &nbsp;Netschool Dashboard
        </h4>

        <a @click="logout" href="" class="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            &nbsp;Sair
        </a>
    </div>
</template>

<script>
export default {
   name: 'NavbarComponent',
   methods: {
    logout() {
        this.$router.push('login')
    }
   }, 
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Gugi&display=swap');

.logo {
    color: white;
    font-weight: 100;
    font-family: 'Gugi';
}

.logout {
    color: white;
    font-size: 18px;
    font-weight: 100;
    text-decoration: none;   
}

.navbar a:hover {
    color: #e0e1ee;
}

</style>