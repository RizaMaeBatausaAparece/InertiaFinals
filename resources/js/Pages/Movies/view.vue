<template>
    <div class="container mx-auto flex justify-center items-center h-screen">
      <div class="card border border-gray-300 rounded-lg bg-white shadow-md">
        <h1 class="card-header text-xl text-white font-bold bg-orange-500 py-2 px-4 rounded-t-lg">Product Profile</h1>
        <div class="card-body">
          <div v-if="showEdit">
            <form @submit.prevent="submit">
              <div class="mb-4">
                <label for="title" class="form-label text-gray-700">Title</label>
                <input type="text" id="name" class="form-input" v-model="form.title">
              </div>
              <div class="mb-4">
                <label for="director" class="form-label text-gray-700">Director</label>
                <input type="text" id="description" class="form-input" v-model="form.director">
              </div>
              <div class="mb-4">
                <label for="rating" class="form-label text-gray-700">Rating</label>
                <input type="number" id="price" class="form-input" v-model="form.rating">
              </div>
              <button type="submit" class="btn bg-orange-500 text-white py-2 px-6 rounded">Save</button>
            </form>
          </div>
          <div class="row" v-else>
            <table class="col-md-6">
              <tr><th class="text-gray-700">Title:</th><td>{{ movies.title }}</td></tr>
              <tr><th class="text-gray-700">Director:</th><td>{{ movies.director }}</td></tr>
              <tr><th class="text-gray-700">Rating:</th><td>{{ movies.rating }}</td></tr>
            </table>
          </div>
          <div class="col-12 flex justify-center mt-6">
            <button onclick="window.history.back()" class="btn bg-orange-500 text-white py-2 px-6 rounded">Back</button>
            <button class="btn bg-orange-500 text-white py-2 px-6 rounded ml-4" @click="toggleEdit">{{ showEdit ? 'Cancel' : 'Edit' }}</button>
            <button class="btn bg-orange-500 text-white py-2 px-6 rounded ml-4" @click="delProduct">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </template>

  <script>
  import { ref } from 'vue';
  import { useForm } from '@inertiajs/vue3';
  import Homelayout from '@/Layouts/Homelayout.vue';

  export default {
    layout: Homelayout,
    props: {
      movies: Object
    },

    setup(props) {
      const showEdit = ref(false);

      const form = useForm({
        title: props.movies.title,
        director: props.movies.director,
        rating: props.movies.rating,
      });

      const submit = async () => {
        await form.put(`/movies/${props.movies.id}`);
      };

      const toggleEdit = () => {
        showEdit.value = !showEdit.value;
      };

      const delProduct = () => {
        const del = confirm('Are you sure you want to delete this product?');
        if (del) {
          form.submit('delete', `/movie/${props.movies.id}`);
        }
      };

      return { showEdit, form, submit, toggleEdit, delProduct };
    }
  }
  </script>

  <style scoped>
  .container {
    background: linear-gradient(45deg, #000000, #cecfce);
    max-width: 100%;
  }

  .card {
    width: 80%;
    max-width: 600px;
    border-radius: 8px;
    background-color: #fff;
  }

  .card-header {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }

  .card-body {
    padding: 20px;
    background: linear-gradient(45deg, #838383, #9cdd9c);
  }

  .form-label {
    font-weight: bold;
  }

  .form-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .btn {
    cursor: pointer;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn:hover {
    filter: brightness(90%);
    transform: translateY(-2px);
  }

  .bg-orange-500 {
    background-color: #6b6b6b;
  }

  .text-white {
    color: white;
  }

  .text-gray-700 {
    color: #4a4a4a;
  }
  </style>
