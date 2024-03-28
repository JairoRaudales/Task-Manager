<script>
export default {
    name: 'TaskEdit'
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import TaskForm from '@/Components/Task/Form.vue';
import { route } from 'ziggy-js';

const props = define({
    task : {
        type : Object,
        required: true
    }
})

const form = useForm({
    title: props.task.title
})
</script>

<template>
    <AppLayout title="Edit Task">
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Editar Tarea</h1>
        </template>

        <div class="py-12">
            <div class="max-ww-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <TaskForm :updating="true" :form="form" @submit="form.put(route('task.update', tarea.id))"/>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

