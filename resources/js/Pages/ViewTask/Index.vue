<script>
export default {
    name: 'ViewTaskIndex'
    
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

</script>


<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Tareas</h1>
        </template>

        <div class="bg-white shadow-md rounded-md p-6 max-w-3xl mx-auto mt-8">
    <h2 class="text-2xl font-semibold mb-4">Panel de empleado (usuario estándar)</h2>
    
    <div class="mb-8">
        <h3 class="text-xl font-semibold mb-4">Tareas asignadas</h3>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Revisar informe</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Pendiente</td>
                                </tr>
                                <!-- Aquí irían las otras filas de tareas -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex justify-between">
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md">Ver detalles</button>
        <button class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md">Modificar estado</button>
    </div>
</div>


    </AppLayout>
</template>