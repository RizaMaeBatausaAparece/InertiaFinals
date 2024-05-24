<template>
    <div class="container">
      <div class="form-container">
        <div class="form-content">
          <h1>Create Movie</h1>
          <form @submit.prevent="submit">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="name" v-model="form.title">
            </div>
            <div class="form-group">
              <label for="director">Director</label>
              <input type="text" id="description" v-model="form.director">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <input type="number" id="price" v-model="form.rating">
            </div>
            <button type="submit">Save</button>
          </form>
          <button @click="goBack" class="btn-back">Back</button>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { useForm } from '@inertiajs/vue3';
  import Homelayout from '@/Layouts/Homelayout.vue';

  export default {
    layout: Homelayout,
    setup() {
      const form = useForm({
        title: '',
        director: '',
        rating: '',
      });

      const submit = async () => {
        form.post('/movies');
      };

      const goBack = () => {
        window.history.back();
      };

      return { form, submit, goBack };
    }
  };
  </script>

  <style scoped>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(45deg, #ff8971, #48ec07);
  }

  .form-container {
    display: flex;
    max-width: 42rem;
    margin: 0 auto;
    padding: 2rem;
    background: linear-gradient(to bottom right, #868686, #d5ff86);
    border-radius: 0.75rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), inset 0 1px 3px rgba(255, 255, 255, 0.2);
    transform: scale(1);
    transition: transform 0.3s;
  }
  .form-content {
    width: 100%;
  }

  .form-content h1 {
    font-size: 1.875rem;
    color: white;
    font-weight: bold;
    margin-bottom: 1.5rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .form-group {
    margin-bottom: 1rem;
  }

  .form-group label {
    display: block;
    color: white;
    font-weight: bold;
    margin-bottom: 0.5rem;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  }

  .form-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid transparent;
    border-radius: 0.375rem;
    outline: none;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2), 0 1px 2px rgba(0, 0, 0, 0.1);
  }

  .form-group input:focus {
    border-color: #ff4500;
  }

  button[type="submit"] {
    width: 100%;
    background-color: #ff4500;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  button[type="submit"]:hover {
    background-color: #e60000;
  }

  .btn-back {
    position: absolute;
    bottom: -2rem;
    left: 50%;
    transform: translateX(-50%);
    background-color: #ff6347;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-back:hover {
    background-color: #ff4500;
    transform: translateX(-50%) scale(1.05);
  }
  </style>
