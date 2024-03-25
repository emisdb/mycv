<!-- SubComponent.vue -->
<template>
    <div>
        <h2>My component runs!</h2>
        <h2>{{ feature || "Props don't run" }}</h2>
        <button type="button" class="btn btn-primary" @click="incrementMsgId"><i class="bi bi-bell-fill"></i></button>
    </div>
</template>

<script>
export default {
    emits: [
        'resp'
    ],
    props: {
        feature: String
    },
    data() {
        return {
            msgId: 0
        };
    },
    methods: {
        incrementMsgId() {
            this.msgId++;
            this.sendMsg();
        },
        sendMsg() {
            if (this.msgId % 2) {
                this.$emit('resp', 'All is good')
            } else {
                this.$emit('resp', 'Works both ways')
            }
        }
    }
}
</script>
