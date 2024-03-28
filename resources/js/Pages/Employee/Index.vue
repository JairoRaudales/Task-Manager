<script>
export default {
    name: 'EmployeeIndex'
 }
    /* data() {
    return {
      name: '',
      email: '',
      password: '',
      confirmPassword: ''
    };
    
},
methods: {
    async register() {
      // Validar que las contraseñas coincidan
      if (this.password !== this.confirmPassword) {
        this.errorMessage = 'Las contraseñas no coinciden.';
        return;
      }

      try {
        // Realizar la solicitud HTTP para registrar la cuenta
        const response = await axios.post('/api/register', {
          name: this.name,
          email: this.email,
          password: this.password
        });

        // Verificar si la solicitud fue exitosa
        if (response.status === 200) {
          this.successMessage = '¡Cuenta registrada exitosamente!';
          // Limpiar los campos después de un registro exitoso
          this.name = '';
          this.email = '';
          this.password = '';
          this.confirmPassword = '';
        } else {
          this.errorMessage = 'Error al registrar la cuenta. Por favor, intenta de nuevo.';
        }
      } catch (error) {
        // Manejar errores de la solicitud HTTP
        this.errorMessage = 'Error al registrar la cuenta. Por favor, intenta de nuevo.';
      }
    }
  }
} */
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
</script>



<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Registrar Nuevos Empleados</h1>
        </template>

        <div class="bg-white shadow-md rounded-md p-6 max-w-xl mx-auto mt-16">
    <h2 class="text-2xl font-semibold mb-6 text-center">Registro de cuenta</h2>
    <form @submit.prevent="register">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input id="name" type="text" v-model="name" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico:</label>
            <input id="email" type="email" v-model="email" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña:</label>
            <input id="password" type="password" v-model="password" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirmar contraseña:</label>
            <input id="confirmPassword" type="password" v-model="confirmPassword" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="flex justify-center">
            <button type="submit" class=" text-white bg-indigo-500 hover:bg-indigo-700 py-2 px-4 rounded">
                Registrar cuenta
            </button>
        </div>
    </form>
</div>

    
    </AppLayout>
</template>