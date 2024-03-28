<script>
export default {
    name: 'TaskIndex',
    methods: {
    handleFormSubmit(formData) {
      // Aquí recibes los datos del formulario y puedes hacer lo que quieras con ellos
      console.log('Datos del formulario:', formData);
    }
  }
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

/* defineProps({
    tasks: {
        type:object,
        required: true
    }
})
 */
</script>


<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Tareas</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px'8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <Link :href="route('tasks.create')" class=" text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">Crear Tarea</Link>
                    </div>
                    <br>
                    <div class="mt-4">
                    <h1 class="text-2xl font-bold mb-4">Detalles de la tarea</h1><br>
                    <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider ">ID</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Titulo</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Descripción</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Asignado a</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Comentarios</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Archivos Abjuntos</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aciones</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <!-- Aquí irían las filas de datos -->
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">1</td>
            <td class="px-6 py-4 whitespace-nowrap">Revisar informe</td>
            <td class="px-6 py-4 whitespace-nowrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
            <td class="px-6 py-4 whitespace-nowrap">Pendiente</td>
            <td class="px-6 py-4 whitespace-nowrap">Juan Pérez</td>
            <td class="px-6 py-4 whitespace-nowrap" placeholder="agregar comentario"></td>
            <td class="px-6 py-4 whitespace-nowrap" placeholder="agregar comentario"></td>
        
            <td class="px-6 py-4 whitespace-nowrap">
                <button class="px-4 py-2 bg-green-500 text-white rounded-md mx-2">Editar </button>
                <button class="px-4 py-2 bg-red-500 text-white rounded-md mx-2"> Eliminar</button>
            </td>
        </tr>
    </tbody>
</table>

                </div>

                </div>
                
            </div>
        </div>
    </AppLayout>
</template>
    