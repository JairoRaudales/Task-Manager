<script>
export default {
    name: 'TaskForm'
}
</script>

<script  setup>
import FormSection from '@/Components/FormSection.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    form:{
        type:Object,
        required: true
    },

    updating: {
        type: Boolean,
        required: false,
        default: false
    }
})

defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Actualizar Tarea' : 'Crear Tarea' }}
        </template>

        <template #description>
            {{ updating ? 'Actualizacion de la tarea' : 'Creacion de nueva Tarea' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="title" value="Title"></InputLabel>
                <TextInput id="title" v-model="form.title" type="text" autocomplete="title" class="mt-1 block w-full mb-4"></TextInput>
                <InputError :message="$page.props.errors.name" class="mt-2"></InputError>
                <label class="block text-sm font-medium text-gray-700">Descripción:</label>
                <textarea class="form-textarea mt-1 block w-full rounded-md shadow-sm mb-4" rows="4" placeholder="Ingrese la descripción de la tarea"></textarea>

                <label class="block text-sm font-medium text-gray-700">Estado:</label>
                <select class="form-select mt-1 block w-full rounded-md shadow-sm mb-4" placeholder="Seleccione una opcion">
                    <option value="1">Pendiente</option>
                    <option value="2">En Proceso</option>
                    <option value="3">Completado</option>
                </select>

                <label class="block text-sm font-medium text-gray-700 ">Asignar a:</label>
                <select class="form-select mt-1 block w-full rounded-md shadow-sm mb-4" >
                    <option value="1">Empleado 1</option>
                    <option value="2">Empleado 2</option>
                    <option value="3">Empleado 3</option>
                </select>

                <label for="file" class="block text-sm font-medium text-gray-700">Adjuntar archivo:</label>
                <input id="file" type="file" accept=".pdf,.jpg,.jpeg,.png" @change="handleFileChange" class="mt-1 block w-full mb-4">



            </div>
        </template>
        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Update' : 'Create' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>