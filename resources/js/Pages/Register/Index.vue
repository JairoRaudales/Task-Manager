<script>
export default {
    name: 'RegisterIndex',
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
    tasks: {
        type:object,
        required: true
    }
})
</script>


<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Registras Nuevo Usuario</h1>
        </template>

        <form >
            <div class="space-y-12">
                
            </div>

        </form>
    </AppLayout>
</template>


    