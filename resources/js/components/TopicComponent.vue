<!-- TopicComponent.vue -->
<template>
    <div>
        <h3>TOPIC</h3>
        <div v-if="topic">
            <h4>{{ topic.name }}</h4>
            <div v-if="topic.topic">
                <p>{{ topic.topic.name }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        topic: Object,
    },
};
</script>

<style scoped>
/* Add your styling here if needed */
</style>
