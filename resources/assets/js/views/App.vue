<template>
    <div>
        <h3>App</h3>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <router-link :to="{name: 'home'}" class="navbar-brand">Home</router-link>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>

    export default{
    }
    
</script>