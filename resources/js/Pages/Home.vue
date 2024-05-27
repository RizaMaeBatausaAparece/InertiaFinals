<template>
    <main id="page-trans">
        <div class="info">
            <img src="https://cdn.dribbble.com/users/1052957/screenshots/3453371/factory-1.gif" alt="Company Icon">
            <h1 class="text-4xl text-center font-bold mt-5">MyCompany</h1>
            <p class="text-center font-bold">(SG)</p>
            <p class="mt-5 text-center">MyCompany is a leading provider of innovative solutions in the tech industry.</p>
            <p class="text-center">We offer a wide range of services including software development, </p>
            <p class="text-center">consulting, and digital transformation solutions.</p>
            <p class="text-center">Our team of experts is dedicated to delivering cutting-edge solutions </p>
            <p class="text-center">that drive business growth and success.</p>
            <Link href="/services" class="route font-bold bg-red-600 py-2 px-5 text-center rounded">Explore now</Link>
        </div>
    </main>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})
</script>

<style scoped>
.route {
    margin-left: 430px;
}

.route:hover {
    background-color: rgb(248, 121, 121);
}

.info {
    background-color: rgb(255, 255, 255);
    color: rgb(0, 0, 0);
    max-height: 100%;
}

img {
    height: 200px;
    width: 250px;
    border-radius: 50%;
    margin-left: 440px;
}
</style>
