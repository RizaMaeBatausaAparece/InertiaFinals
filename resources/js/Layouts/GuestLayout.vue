<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex flex-col justify-center items-center pt-6 bg-gradient-to-b from-blue-100 to-blue-600">
    <div class="w-full max-w-md mt-6 px-6 py-4 bg-white shadow-lg rounded-lg mb-5">
      <slot />
    </div>
    <Link href="/" class="py-2 px-4 border border-white text-white bg-transparent rounded-full mb-4 hover:bg-white hover:text-blue-600 transition duration-300 ease-in-out">← Return</Link>
  </div>
</template>

<style scoped>
a {
  text-decoration: none;
}
</style>
