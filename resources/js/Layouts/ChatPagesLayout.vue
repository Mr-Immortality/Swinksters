<template>
    <app-chat-layout>
        <div class="lg:px-10">
            <div>
                <slot name="title"></slot>
            </div>
            <div class="mt-5">
                <slot></slot>
            </div>
        </div>
    </app-chat-layout>
</template>

<script>
import AppChatLayout from "./AppChatLayout";
export default {
    components: {
        AppChatLayout
    }
};
</script>
