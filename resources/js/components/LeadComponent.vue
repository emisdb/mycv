<template>
    <h1>real request data</h1>
    <p>Topic id: {{ topicId }}</p>
    <button class="btn btn-info" @click="topicId++" :disabled="searching">Let's see all topics</button>
    <p v-if="!topicData">Loading...</p>
    <p v-else>
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Parent</th>
        </tr>
        </thead>
        <tbody>
        <tr class="align-middle" v-for="todo in topicData" :key="todo.id">
            <td>{{ todo.id }}</td>
            <td>{{ todo.name }}</td>
            <td>{{ todo.description }}</td>
            <td>{{ todo.topic_name }}</td>
        </tr>
        </tbody>
    </table>
    </p>

</template>
<script>
export default {
    data() {
        return {
           topicId: 1,
            topicLData: [],
            topicData: null,
            searching: false
        }
    },
    methods: {
        async fetchData() {
            this.topicData = null
            this.searching = true;
            try {
                // Simulate API call (replace with actual API call)
                const res = await fetch(
                    `/topic-api`
                )
                this.topicData = await res.json()
                this.searching = false;
                //               this.todoLData.push(this.todoData)
            } catch (error) {
                console.error('Error fetching data:', error);
                // Set searching flag to false in case of error
                this.searching = false;
            }
        }
    },
    mounted() {
//        this.fetchData()
    },
    watch: {
        topicId() {
            this.fetchData()
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
    margin: 5px;
}
</style>
