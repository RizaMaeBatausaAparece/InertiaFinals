<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <Homelayout>
        <main id="page-trans">
            <header class="welcome">Welcome  {{ $page.props.auth.user.name }}!</header>
            <img src="https://i.pinimg.com/originals/a1/00/84/a10084a924344a5339547af15e726550.gif" alt="">
            <h1>BROWSE FOR MORE MOVIES!</h1>
        </main>
    </Homelayout>
</template>

<style scoped>
.welcome {
    text-align: center;
    margin-top: 15px;
    font-weight: bold;
    font-size: 25px;
    color: #4a90e2;
}
img {
    margin-top: 15px;
    border-radius: 50%;
    margin-left:270px;
    height: 300px;
}
#page-trans{
    background-color: black;
    height: 600px;
}
h1 {
    color: white;
    text-align: center;
    font-size: 50px;
    border: 1px solid white;
    border-radius: 10px;
    max-width: 100%;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-30px);
    }
    60% {
        transform: translateY(-15px);
    }
}

</style>
