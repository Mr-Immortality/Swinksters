<template>
    <admin-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Admin Dashboard
            </h2>
        </template>

        <div class="px-6 py-2 text-center">
            "With great power comes great responsibility..."
        </div>
    </admin-layout>
</template>

<script>
import AdminLayout from "../../Layouts/AdminLayout.vue";
import Welcome from "../Welcome.vue";
export default {
    components: {
        AdminLayout,
        Welcome
    }
};
</script>
