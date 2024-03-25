<!-- ExampleComponent.vue -->
<template>
    <h1>components, props</h1>
    <div>
        <h2>Your component runs?</h2>
        <h2><SubComp :feature="feature" @resp="(msg) => childMsg = msg" /></h2>
        <h2>{{ childMsg }}</h2>
    </div>
</template>

<script>
import SubComp from './SubComponent.vue'
export default {
    mounted() {
        console.log('Component mounted.');
    },
    components:{
        SubComp
    },
    data() {
      return {
          feature: "Props also work",
          childMsg: "Nothing"

      }
    }
}
</script>
<style scoped>
h1 {
    background-color: #0b2e13;
    font-size: 1.4em;
    color: #2fff8a;
    padding: 10px;
    margin:5px;
}
h2 {
    background-color: #95ffc3;
    font-size: 1.2em;
    color: #2b2b2b;
}
</style>
