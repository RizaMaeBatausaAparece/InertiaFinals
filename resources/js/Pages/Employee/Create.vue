<template>
    <div class="container">
        <div class="form-container">
            <div class="form-content">
                <h1>Create Employee</h1>
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" v-model="form.first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" v-model="form.last_name">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" v-model="form.phone_number">
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="number" id="salary" v-model="form.salary">
                    </div>
                    <button type="submit">Save</button>
                </form>
                <button @click="goBack">Back</button>
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
            first_name: '',
            last_name: '',
            phone_number: '',
            salary: '',
        });

        const submit = async () => {
            form.post('/employees');
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
}

.form-container {
    display: flex;
    max-width: 42rem;
    margin: 0 auto;
    padding: 2rem;
}

.form-content {
    width: 100%;
}

.form-content h1 {
    font-size: 1.875rem;
    font-weight: bold;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid transparent;
    border-radius: 0.375rem;
    outline: none;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #ff4500;
}

button[type="submit"] {
    width: 100%;
    background-color: #3e81fd;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    cursor: pointer;
}

.btn-back {
    background-color: #adffa0;
    color: white;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.375rem;
    cursor: pointer;
}

.btn-back:hover {
    background-color: #ff4500;
}
</style>
