<template>
    <div class="cellphones-container">
      <h1>Popular Cellphones</h1>
      <Link :href="'cellphones/create'" class="btn inline-block px-6 py-2 font-semibold leading-5 text-white bg-red-600 hover:bg-red-700 rounded-lg mb-6 shadow-lg transition-transform transform hover:scale-105">Create New</Link>
      <div class="cellphones-cards">
        <div v-for="cellphone in cellphones" :key="cellphone.id" class="cellphone-card">
          <p><strong>Brand:</strong> {{ cellphone.brand_name }}</p>
          <p><strong>Price:</strong> ${{ cellphone.price }}</p>
          <p><strong>Released:</strong> {{ cellphone.released }}</p>
          <Link :href="'/cellphones/' + cellphone.id" class="view-product-btn mt-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
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
    cellphones: Array
  });
  </script>

  <style scoped>
  .cellphones-container {
    padding: 20px;
    margin: auto;
    width: 900px;
    background-color: #c1e1c5;
  }

  .cellphones-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .cellphone-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    width: 200px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .cellphone-card p {
    margin: 5px 0;
  }

  h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
  }
  </style>
