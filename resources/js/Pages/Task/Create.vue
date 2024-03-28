<script>
export default {
    name: 'TaskCreate'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import TaskForm from '@/Components/Task/Form.vue';

const form = useForm({
    title: '',
    description: '',
    status: '',
    users_id: ''
})
</script>

<template>
    <AppLayout>
        <template>
            <h1 class="font_semibold text-lg text-gray-800 leading-tight">Crear Tarea</h1>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <TaskForm :form="form" @submit="form.post(route('task.store'))"></TaskForm>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>