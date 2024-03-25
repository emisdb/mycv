<template>
    <h1>request data</h1>
    <p>Todo id: {{ todoId }}</p>
    <button class="btn btn-info" @click="todoId++" :disabled="!todoData">Fetch next todo</button>
    <p v-if="!todoData">Loading...</p>
    <p v-else>
    <table class="table table-striped">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Task</th>
            <th style="width: 40px">Label</th>
        </tr>
        </thead>
        <tbody>
        <tr class="align-middle" v-for="todo in todoLData" :key="todo.id">
            <td>{{ todo.id }}</td>
            <td>{{ todo.title }}</td>
            <td>{{ todo.completed }}</td>
        </tr>
        </tbody>
    </table>
    </p>

</template>
<script>
export default {
    data() {
        return {
            todoId: 1,
            todoLData: [],
            todoData: null
        }
    },
    methods: {
        async fetchData() {
            this.todoData = null
            const res = await fetch(
                `https://jsonplaceholder.typicode.com/todos/${this.todoId}`
            )
            this.todoData = await res.json()
            this.todoLData.push(this.todoData)
        }
    },
    mounted() {
        this.fetchData()
    },
    watch: {
        todoId() {
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
