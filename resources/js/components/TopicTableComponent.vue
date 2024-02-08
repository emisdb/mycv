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
          <td v-for="head in headers" :key="head">
              {{head}}
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
</style>
