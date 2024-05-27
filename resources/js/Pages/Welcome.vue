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
        <div class="content">
            <img src="https://usagif.com/wp-content/uploads/2021/4fh5wi/welcome-15.gif" alt="">
            <p class="text-center text-4xl font-bold text-black mb-5">Welcome Employees!</p>
            <p class="text-center text-xl font-bold text-white mt-2">You want to gain more money?</p>
            <p class="text-center text-xl font-bold text-white mt-2">Try our Company</p>
            <p class="text-center text-xl font-bold text-white mt-2">Here in our Company we are all Family</p>
            <p class="text-center text-xl font-bold text-white-600 mt-5 mb-5">Apply now!</p>
            <div class="routes">
            <Link v-if="canRegister" :href="route('register')" class="route-link">Sign up</Link>
            <Link :href="route('login')" class="route-link2">Log in</Link>
            </div>
        </div>
    </div>

</template>

<style>
.home {
    height: 100vh;
    background-image: url(https://static.vecteezy.com/system/resources/previews/000/549/541/original/technology-network-background-for-business-and-online-marketing-vector-illustration.jpg);
    background-repeat: no-repeat;
    background-size: cover;
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
    margin-left: 600px;
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
    margin-left: 10%;
}

.route-link2:hover {
    background-color: #fff;
    border-color: #4a90e2;
    color: #4a90e2;
}

</style>
