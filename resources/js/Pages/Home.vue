<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

</script>

<template>
    <main id="page-trans">
        <div class="info">
        <img src="https://cdn.dribbble.com/users/1461209/screenshots/3832229/film-dribbble1.gif" alt="Movie Icon">
        <h1 class="text-4xl text-center font-bold mt-5">Movie Collection</h1>
        <p class="text-center font-bold">(MC)</p>
        <p class="mt-5 text-center">A movie collection is a compilation of films available for viewing.</p>
        <p class="text-center">It typically includes details such as titles,</p>
        <p class="text-center">genres, and sometimes additional data like release dates and directors.</p>
        <p class="text-center">Movie collections are essential for film enthusiasts,</p>
        <p class="text-center">providing a way to track viewed films, discover new favorites, </p>
        <p class="text-center mb-5">and organize movie marathons. </p>
        <Link href="/movies" class="route font-bold bg-red-600 py-2 px-5 text-center rounded">Explore now</Link>
        </div>
    </main>
</template>

<style scoped>
.route{
    margin-left: 430px;
}
.route:hover{
    background-color: rgb(248, 121, 121);
}
.info {
    background-color: black;
    color: white;
    height: 200vh;
}
img {
    height: 100px;
    width: 110px;
    border-radius: 50%;
    margin-left: 440px;
}
</style>
