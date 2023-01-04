<template>
    <div class="main-dashboard">
        <div class="sidebar">
            <SidebarComponent />
        </div>

        <div class="content-right">
            <div class="navbar">
                <NavbarComponent />
            </div>
            
            <div class="pages">
                
            </div>
        </div>
    </div>
</template>


<script>
import SidebarComponent from '../Dashboard/components/SidebarComponent.vue'
import NavbarComponent from '../Dashboard/components/NavbarComponent.vue'

export default {
    name: 'DashboardComponent',
    components: {
        SidebarComponent,
        NavbarComponent
    }
}
</script>

<style src="@/components/Dashboard/style.css" scoped></style>