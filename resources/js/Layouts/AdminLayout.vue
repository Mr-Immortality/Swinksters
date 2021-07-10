<template>
    <app-admin-layout>
        <header>
            <div class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </div>
        </header>
        <div
            class="flex flex-wrap space-y-6 py-6 sm:justify-around sm:space-y-0"
        >
            <div
                class="bg-white overflow-hidden shadow-xl py-6 w-full sm:rounded-lg"
            >
                <slot></slot>
            </div>
        </div>
    </app-admin-layout>
</template>

<script>
import AdminSidebar from "../Components/AdminSidebar.vue";

import AppAdminLayout from "./AppAdminLayout.vue";
export default {
    components: {
        AdminSidebar,
        AppAdminLayout,
        AdminSidebar
    }
};
</script>
