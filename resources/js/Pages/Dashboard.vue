<script setup>
import Homelayout from '@/Layouts/Homelayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Dashboard" />

    <Homelayout>
        <main id="page-trans">
            <header class="welcome">Welcome  {{ $page.props.auth.user.name }}!</header>
            <img src="https://www.pskitservices.com/wp-content/uploads/2020/10/homepage-banner-animated-2.gif" alt="">
            <h1>Hassle Hard!!</h1>
        </main>
    </Homelayout>
</template>

<style scoped>
.welcome {
    text-align: center;
    margin-top: 15px;
    font-weight: bold;
    font-size: 25px;
    color: #000000;
}
img {
    margin-top: 15px;
    margin-left:350px;
    height: 300px;
    width: 500px;
}
#page-trans img {
    animation: bounce 2s infinite alternate;
}

#page-trans h1 {
    animation: grow-shrink 2s infinite alternate;
}

@keyframes bounce {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}
h1 {
    text-align: center;
    font-size: 50px;
    border: 1px solid white;
    border-radius: 500px;
    max-width: 50%;
    margin-left: 300px;
    margin-top: 50px;
    animation: grow-shrink 2s infinite alternate;
    color: rgb(0, 0, 0);
}

@keyframes grow-shrink {
    0% {
        font-size: 50px;
    }
    50% {
        font-size: 60px;
    }
    100% {
        font-size: 50px;
    }
}

</style>
