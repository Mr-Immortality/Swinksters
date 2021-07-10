<template>
    <div>
        <button
            type="submit"
            class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-purple-600 hover:text-gray-50 focus:outline-none focus:bg-purple-600 transition duration-150 ease-in-out"
            v-if="as == 'button'"
        >
            <slot></slot>
        </button>

        <inertia-link
            :href="href"
            class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-purple-600 hover:text-gray-50 focus:outline-none focus:bg-purple-600 transition duration-150 ease-in-out"
            v-else
        >
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
export default {
    props: ["href", "as"]
};
</script>
