<template>
    <div class="container mx-auto flex justify-center items-center h-screen">
        <div class="card border border-gray-300 rounded-lg bg-gray-100 shadow-md">
            <h1 class="card-header text-xl text-white font-bold bg-orange-500 py-2 px-4 rounded-t-lg">Employee Profile</h1>
            <div class="card-body">
                <div v-if="showEdit">
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label for="first_name" class="form-label text-gray-700">First Name</label>
                            <input type="text" id="first_name" class="form-input" v-model="form.first_name">
                        </div>
                        <div class="mb-4">
                            <label for="last_name" class="form-label text-gray-700">Last Name</label>
                            <input type="text" id="last_name" class="form-input" v-model="form.last_name">
                        </div>
                        <div class="mb-4">
                            <label for="phone_number" class="form-label text-gray-700">Phone Number</label>
                            <input type="text" id="phone_number" class="form-input" v-model="form.phone_number">
                        </div>
                        <div class="mb-4">
                            <label for="salary" class="form-label text-gray-700">Salary</label>
                            <input type="number" id="salary" class="form-input" v-model="form.salary">
                        </div>
                        <button type="submit" class="btn bg-orange-500 text-white py-2 px-6 rounded">Save</button>
                    </form>
                </div>
                <div v-else>
                    <table>
                        <tr><th>First Name:</th><td>{{ employee.first_name }}</td></tr>
                        <tr><th>Last Name:</th><td>{{ employee.last_name }}</td></tr>
                        <tr><th>Phone Number:</th><td>{{ employee.phone_number }}</td></tr>
                        <tr><th>Salary:</th><td>{{ employee.salary }}</td></tr>
                    </table>
                </div>
                <div class="flex justify-center mt-6">
                    <button @click="goBack" class="btn bg-orange-500 text-white mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
</svg></button>
                    <button @click="toggleEdit" class="btn bg-orange-500 text-white mr-4">{{ showEdit ? 'Cancel' : 'Edit' }}</button>
                    <button @click="delEmployee" class="btn bg-orange-500 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg></button>
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
        employee: Object
    },
    setup(props) {
        const showEdit = ref(false);

        const form = useForm({
            first_name: props.employee.first_name,
            last_name: props.employee.last_name,
            phone_number: props.employee.phone_number,
            salary: props.employee.salary,
        });

        const submit = async () => {
            await form.put(`/employees/${props.employee.id}`);
        };

        const toggleEdit = () => {
            showEdit.value = !showEdit.value;
        };

        const delEmployee = () => {
            const del = confirm('Are you sure you want to delete this employee?');
            if (del) {
                form.delete(`/employees/${props.employee.id}`);
            }
        };

        const goBack = () => {
            window.history.back();
        };

        return { showEdit, form, submit, toggleEdit, delEmployee, goBack };
    }
};
</script>

<style scoped>
.container {
    background: linear-gradient(45deg, #ffb366, #ff9999);
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
    background-color: #f2f2f2;
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
    background-color: #ff8000;
}

.text-white {
    color: white;
}

.text-gray-700 {
    color: #4a4a4a;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
}

table th {
    text-align: left;
    font-weight: bold;
}

table td {
    text-align: left;
}

.flex {
    display: flex;
}

.justify-center {
    justify-content: center;
}

.mt-6 {
    margin-top: 1.5rem;
}

.mr-4 {
    margin-right: 1rem;
}
</style>
