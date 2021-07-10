<template>
    <div class="flex justify-center items-center bg-purple-600 min-h-screen">
        <div>
            <img :src="'/storage/images/logo.png'" alt="Swinksters" />
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-semibold text-gray-50">
                Swinksters.com
            </h1>
            <p class="pt-2 text-gray-50">
                A place for Swingers and Kinksters to make naughty connections
            </p>
            <div v-if="canLogin" class="flex justify-center space-x-6 mt-5">
                <inertia-link
                    href="#"
                    v-if="$page.props.user"
                    class="text-lg text-gray-700 underline"
                >
                    Dashboard
                </inertia-link>
                <template v-else>
                    <inertia-link
                        :href="route('login')"
                        class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500"
                        >Login</inertia-link
                    >
                    <inertia-link
                        :href="route('register')"
                        v-if="canRegister"
                        class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500"
                    >
                        Register
                    </inertia-link>
                </template>
            </div>
            <p class="mt-10 text-gray-50">{{ users }} active members</p>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        users: Number,
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String
    }
};
</script>
