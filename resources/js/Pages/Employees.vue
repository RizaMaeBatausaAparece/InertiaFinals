<template>
    <div class="employees-container">
        <h1>All Employees</h1>
        <Link :href="'employees/create'" class="btn-create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
</svg></Link>
        <div class="employees-cards">
            <div v-for="employee in employees" :key="employee.id" class="employee-card">
                <p><strong>First Name:</strong> {{ employee.first_name }}</p>
                <p><strong>Last Name:</strong> {{ employee.last_name }}</p>
                <p><strong>Phone Number:</strong> {{ employee.phone_number }}</p>
                <p><strong>Salary:</strong> ${{ employee.salary }}</p>
                <Link :href="'/employees/' + employee.id" class="btn-edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></Link>
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
    employees: Array
});
</script>

<style scoped>
.employees-container {
    padding: 20px;
    margin: auto;
    width: 900px;
    background-color: #777474;
    width: 1200px;
}

.employees-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-left: 50px;
}

.employee-card {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    width: 250px; /* Updated width */
    height: 200px; /* Updated height */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.employee-card p {
    margin: 5px 0;
}

h1 {
    text-align: center;
    font-size: 40px;
    font-family: monospace;
}

.btn-create {
    display: inline-block;
    padding: 8px 20px;
    font-weight: bold;
    text-decoration: none;
    background-color: #ff3333;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.btn-create:hover {
    background-color: #cc0000;
}

.btn-edit {
    display: inline-block;
    padding: 6px 12px; /* Adjusted padding */
    font-size: 14px; /* Adjusted font size */
    font-weight: bold;
    text-decoration: none;
    background-color: #3399ff;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
}

.btn-edit:hover {
    background-color: #0066cc;
}
</style>
