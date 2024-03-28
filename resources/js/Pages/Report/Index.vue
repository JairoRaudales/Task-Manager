<script>
export default {
    name: 'ReportIndex',
    mounted() {
        document.getElementById('generateReportBtn').addEventListener('click', this.generateReport);
    },
    methods: {
        generateReport() {
            // Obtener los valores de las fechas
            var startDate = document.getElementById('startDate').value;
            var endDate = document.getElementById('endDate').value;

            // Crear un nuevo objeto jsPDF
            var doc = new jsPDF();

            // Añadir texto al documento PDF
            doc.text(20, 20, 'Reporte generado con las siguientes fechas:');
            doc.text(20, 30, 'Fecha de inicio: ' + startDate);
            doc.text(20, 40, 'Fecha de fin: ' + endDate);

            // Guardar el documento como PDF
            doc.save('reporte.pdf');
        }
    }
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
</script>


<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Generar Reportes</h1>
        </template>
        
        <div class="py-12">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px'8">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <Link :href="route('tasks.create')" class=" text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">Crear Tarea</Link>
                    </div>

                    <div class="bg-white shadow-md rounded-md p-6">
    <h2 class="text-lg font-semibold mb-4">Formulario de generación de reporte</h2>
    <div class="space-y-4">
      <div class="flex space-x-4">
        <div class="w-1/2">
          <label for="startDate" class="block text-sm font-medium text-gray-700">Fecha de inicio:</label>
          <input id="startDate" type="date" class="form-input mt-1 block w-full rounded-md border-gray-300">
        </div>
        <div class="w-1/2">
          <label for="endDate" class="block text-sm font-medium text-gray-700">Fecha de fin:</label>
          <input id="endDate" type="date" class="form-input mt-1 block w-full rounded-md border-gray-300">
        </div>
      </div>
      <div class="flex justify-center">
        <button id="generateReportBtn" @click="generateReport" class= "text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">
          Generar reporte
        </button>
      </div>
    </div>
  </div>

                    </div>

                </div>
                
            </div>
    </AppLayout>
</template>