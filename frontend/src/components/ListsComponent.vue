<template>
    <div class="lists">
        <div class="top">
            <p>
              <strong>{{ description }}</strong>
              &nbsp;<span class="badge text-bg-info">{{ data.length }} </span>
            </p>
        </div>

        <div class="content">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">{{ columns[0] }}</th>
                    <th scope="col">{{ columns[1] }}</th>
                    <th scope="col">{{ columns[2] }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.website }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ListsComponent',
    props: {
      data: Array,
      description: String,
      columns: []
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');
.lists {
  width: 100%;
  padding: 20px;
  border: 1px solid gray;
  border-radius: 3px;
}

.top p {
  font-size: 23px;
  font-family: 'Inter';
}
</style>