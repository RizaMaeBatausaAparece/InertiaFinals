<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <div class="home">
        <div class="routes">
            <Link v-if="canRegister" :href="route('register')" class="route-link">Sign up</Link>
        </div>
        <div class="content">
            <img src="https://cdn.dribbble.com/users/172091/screenshots/5318042/lightfilms_logo.gif" alt="">
            <p class="text-center text-4xl font-bold text-white mb-5">Welcome to our Movie List!</p>
            <p class="text-center text-xl font-bold text-white mt-2">Here is where you can watch movies anytime</p>
            <p class="text-center text-xl font-bold text-white mt-2">So don't miss out!</p>
            <p class="text-center text-xl font-bold text-blue-600 mt-5 mb-5">Explore now!</p>
            <Link :href="route('login')" class="route-link2">Log in</Link>
        </div>
    </div>

</template>

<style>
.home {
    background-color: rgb(53, 53, 53);
    height: 100vh;
}
img {
    margin-left: 35%;
    max-width: 500px;
    height: 300px;
    margin-bottom: 50px;
    border-radius: 8px;
    box-shadow: 0 5px 6px rgba(0, 0, 0, 0.1);
}
.routes {
    margin-bottom: 20px;
    padding: 15px;
    margin-left: 80%;
}

.route-link {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #4a90e2;
    color: #fff;
    text-decoration: none;
}

.route-link:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}

.route-link2 {
    font-weight: 600;
    margin: 0 10px;
    padding: 8px 16px;
    border: 2px solid transparent;
    border-radius: 4px;
    transition: all 0.3s ease;
    background-color: #4a90e2;
    color: #fff;
    text-decoration: none;
    margin-left: 47%;
}

.route-link2:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}

</style>
