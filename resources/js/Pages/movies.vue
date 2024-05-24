<template>
    <div class="movies-container">
        <h1>Movies</h1>
        <Link :href="'/movies/create'" class="btn inline-block px-6 py-2 font-semibold leading-5 text-white bg-red-600 hover:bg-red-700 rounded-lg mb-6 shadow-lg transition-transform transform hover:scale-105">Create New</Link>
        <div class="movies-cards">
            <!-- New movie cards -->
            <div class="movies-card">
                <img src="https://play-lh.googleusercontent.com/560-H8NVZRHk00g3RltRun4IGB-Ndl0I0iKy33D7EQ0cRRwH78-c46s90lZ1ho_F1so=w240-h480-rw" alt="Movie 1">
                <p><strong>Title:</strong> Titanic</p>
                <p><strong>Director:</strong> James Cameron</p>
                <p><strong>Rating:</strong> 7.5</p>
            </div>
            <div class="movies-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/1/19/Minions_%282015_film%29.jpg" alt="Movie 2">
                <p><strong>Title:</strong> Minions</p>
                <p><strong>Director:</strong>Pierre Coffin</p>
                <p><strong>Rating:</strong> 8.2</p>
            </div>
            <div class="movies-card">
                <img src="data:image/jpeg;base64,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" alt="Movie 3">
                <p><strong>Title:</strong> Avatar 2</p>
                <p><strong>Director:</strong>  James Cameron</p>
                <p><strong>Rating:</strong> 6.9</p>
            </div>
            <div class="movies-card">
                <img src="https://s3.amazonaws.com/nightjarprod/content/uploads/sites/130/2021/12/28151020/juarassic-world-dominion.jpg" alt="Movie 3">
                <p><strong>Title:</strong>Jurassic World: Dominion</p>
                <p><strong>Director:</strong>Colin Trevorrow</p>
                <p><strong>Rating:</strong> 7.9</p>
            </div>
            <!-- Existing movie cards -->
            <div v-for="movie in movies" :key="movie.id" :class="['movies-card', getCardStyle(movie)]">
                <p><strong>Title:</strong> {{ movie.title }}</p>
                <p><strong>Director:</strong> {{ movie.director }}</p>
                <p><strong>Rating:</strong> {{ movie.rating }}</p>
                <Link :href="'/movies/' + movie.id" class="view-product-btn mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
</svg>
                </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

const props = defineProps({
    movies: Array
});

const getCardStyle = (movie) => {

    if (movie.rating >= 8) {
        return 'high-rated';
    } else if (movie.rating >= 6) {
        return 'medium-rated';
    } else {
        return 'low-rated';
    }
}
</script>

<style scoped>
.movies-container {
    padding: 20px;
    margin: auto;
    width: 900px;
}

.movies-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.movies-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.high-rated {
    border-color: #28a745;
}

.medium-rated {
    border-color: #ffc107;
}

.low-rated {
    border-color: #dc3545;
}

.movies-card h2 {
    margin: 0 0 10px;
    font-size: 1.25rem;
}

.movies-card p {
    margin: 5px 0;
}

h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
}
.view-product-btn {
    display: inline-block;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.view-product-btn:hover {
    background-color: #0056b3;
}

.view-product-btn:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.mt-2 {
    margin-top: 0.5rem;
}

.bi-box-seam {
    margin-right: 5px;
}

</style>
