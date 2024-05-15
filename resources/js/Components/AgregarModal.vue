<script setup>
import Modal from './Modal.vue';

const emit = defineEmits(['close']);

defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: 'xl2',
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const close = () => {
    emit('close');
};
</script>

<template>
    <Modal
        :show="show"
        :max-width="maxWidth"
        :closeable="closeable"
        @close="close"
    >
        <!-- <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"> -->
        <div class="card">
            <div class="card-header">
                <h4 class="text-gray-900">
                    <slot name="title" />
                </h4>
            </div>
            <div class="card-body">
                <div class="text-gray-600">
                    <slot name="content" />
                </div>
            </div>
            <div class="card-footer text-body-secondary">
                <div class="flex flex-row justify-end px-6 py-1 bg-gray-100 text-right">
                    <slot name="footer" />
                </div>
            </div>

        </div>


    </Modal>
</template>
