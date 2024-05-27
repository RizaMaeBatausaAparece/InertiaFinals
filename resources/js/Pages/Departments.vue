<template>
    <div class="departments-container">
      <h1>All Departments</h1>
      <table class="departments-table">
        <thead>
          <tr>
            <th>Department Name</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="department in departments" :key="department.id">
            <td>{{ department.department_name }}</td>
            <td>{{ department.location }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

  <script setup>
  import { defineProps } from 'vue';
  import Homelayout from '@/Layouts/Homelayout.vue';

  defineOptions({
    layout: Homelayout
})

  const props = defineProps({
    departments: Array
  });
  </script>

  <style scoped>
  .departments-container {
    padding: 20px;
    margin: auto;
    width: 900px;
    background-color: #c1e1c5;
  }

  .departments-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .departments-table th,
  .departments-table td {
    border: 1px solid #dee2e6;
    padding: 8px;
    text-align: left;
  }

  .departments-table th {
    background-color: #343a40;
    color: #fff;
  }

  .departments-table th:first-child,
  .departments-table td:first-child {
    border-left: none;
  }

  .departments-table th:last-child,
  .departments-table td:last-child {
    border-right: none;
  }

  h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
  }
  </style>
