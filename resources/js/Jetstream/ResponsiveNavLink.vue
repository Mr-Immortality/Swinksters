<template>
    <div>
        <button :class="classes" class="w-full text-left" v-if="as == 'button'">
            <slot></slot>
        </button>

        <inertia-link :href="href" :class="classes" v-else>
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
export default {
    props: ["active", "href", "as"],

    computed: {
        classes() {
            return this.active
                ? "block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-gray-50 bg-purple-600 focus:outline-none focus:text-gray-200 focus:bg-purple-300 focus:border-indigo-700 transition duration-150 ease-in-out"
                : "block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-50 hover:text-gray-700 hover:bg-purple-300 hover:border-gray-300 focus:outline-none focus:text-gray-200 focus:bg-purple-500 focus:border-gray-300 transition duration-150 ease-in-out";
        }
    }
};
</script>
