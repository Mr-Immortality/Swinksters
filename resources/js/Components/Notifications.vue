<template>
    <div>
        <notification-item
            v-for="unread in unreads"
            :key="unread.id"
            :unread="unread"
            class="flex justify-between items-center bg-gray-50 text-sm text-gray-700 hover:bg-purple-600 hover:text-gray-50 px-4 py-2 transition duration-150 ease-in-out"
        >
        </notification-item>
        <notification-item
            v-for="read in reads"
            :key="read.id"
            :read="read"
            class="flex justify-between items-center bg-gray-50 text-gray-400 hover:bg-purple-600 hover:text-gray-50 px-4 py-2 transition duration-150 ease-in-out"
        ></notification-item>
    </div>
</template>

<script>
import NotificationItem from "./NotificationItem";
export default {
    props: ["reads", "unreads"],
    components: {
        NotificationItem
    }
};
</script>
