<template>
  <div>
      <slot></slot>
  <table class="table-striped">
    <tr>
      <th  v-for="head in headers" :key="head">
        <p v-if="head == '+'">
          <button type="button" class="btn btn-primary">{{head}}</button>
        </p>
        <p v-else>
          {{head}}
        </p>
      </th>
    </tr>
      <tr>
          <td>{{ features.id }}</td>
          <td>{{ features.name }}</td>
          <td>{{ features.description }}</td>
          <td>
          </td>
      </tr>
      <tr v-if="features.topic_id">
          <td>{{ features.topic.id }}</td>
         <td>{{ features.topic.name }}</td>
          <td>{{ features.topic.description }}</td>
          <td>
              <a :href="'/topic/' + features.topic.id">
                  ->
              </a>
          </td>
      </tr>
  </table>
  </div>
</template>

<script>

export default {
  props: ['features'],
  data() {
    return {
      headers:
          ['id', 'name', 'description', '+']
    }
  },
  components: {
  }
}
</script>


<style scoped>
/* Add your styling here if needed */
table.table-striped th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
