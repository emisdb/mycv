<!-- ExampleComponent.vue -->
<template>
    <div>
        <h1>Your component runs!</h1>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.');
    }
}
</script>
<style scoped>
    h1 {
        background-color: #00ad81;
        font-size: 1.2em;
        color: #2fff8a;
    }
</style>
