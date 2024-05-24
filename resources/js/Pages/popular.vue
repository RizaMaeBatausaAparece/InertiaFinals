<script setup>
import { defineProps } from 'vue';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

const props = defineProps({
    popular: Array
});
</script>

<template>
    <div class="popular-container">
        <h1>Popular Movies</h1>
        <div class="popular-cards">
            <!-- New popular movie cards -->
            <div class="popular-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa7JfLBBzqlVjQErf1OHV-ph374j34Utb8jTOALdrODw&s" alt="Popular Movie 1">
                <p><strong>Title:</strong>Spider-Man: No Way Home</p>
                <p><strong>Director:</strong>Jon Watts</p>
                <p><strong>Rating:</strong> 8.9</p>
            </div>
            <div class="popular-card">
                <img src="https://m.media-amazon.com/images/M/MV5BN2QyZGU4ZDctOWMzMy00NTc5LThlOGQtODhmNDI1NmY5YzAwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" alt="Popular Movie 2">
                <p><strong>Title:</strong>Dune</p>
                <p><strong>Director:</strong>Denis Villeneuve</p>
                <p><strong>Rating:</strong> 9.5</p>
            </div>
            <div class="popular-card">
                <img src="https://m.media-amazon.com/images/M/MV5BMGJkNDJlZWUtOGM1Ny00YjNkLThiM2QtY2ZjMzQxMTIxNWNmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg" alt="Popular Movie 3">
                <p><strong>Title:</strong> The Matrix Resurrections</p>
                <p><strong>Director:</strong>Lana Wachowski</p>
                <p><strong>Rating:</strong> 7.8</p>
            </div>
            <div class="popular-card">
                <img src="https://m.media-amazon.com/images/M/MV5BYWQ2NzQ1NjktMzNkNS00MGY1LTgwMmMtYTllYTI5YzNmMmE0XkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg" alt="Popular Movie 4">
                <p><strong>Title:</strong>No Time to Die</p>
                <p><strong>Director:</strong> Cary Joji Fukunaga</p>
                <p><strong>Rating:</strong> 8.3</p>
            </div>
            <!-- Existing popular movie cards -->
            <div v-for="popular in popular" :key="popular.id" class="popular-card">
                <p><strong>Title:</strong> {{ popular.title }}</p>
                <p><strong>Director:</strong> {{ popular.director }}</p>
                <p><strong>Rating:</strong> {{ popular.rating }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.popular-container {
    padding: 20px;
    margin: auto; /* Center the container */
    width: 900px;
    background-color: goldenrod;
}

.popular-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.popular-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.popular-card img {
    width: 100%;
    height: auto;
    border-radius: 5px 5px 0 0; /* Rounded corners only at the top */
}

.popular-card h2 {
    margin: 0 0 10px;
    font-size: 1.25rem;
}

.popular-card p {
    margin: 5px 0;
}

h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
}
</style>
