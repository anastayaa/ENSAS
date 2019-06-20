<template>
    <div>
        <h1>Items</h1>

        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Item</router-link>
          </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <td>ID</td>
                <td>Titre</td>
            </tr>
            </thead>

            <tbody>
                <tr v-for="item, index  in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.titre }}</td>
                    <td>
                        <router-link :to="{name: 'edit', params: {id: item.id}}" class="btn btn-xs btn-default">
                            Edit
                        </router-link>
                        <a href="#" class="btn btn-xs btn-danger" v-on:click="deleteEntry(item.id, index)">
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                items: []
            }
        },

        mounted() {
            var app = this;
            axios.get('/api/departement')
                .then(function (resp) {
                    app.items = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load departemets");
                });
        },

        methods: {
            deleteEntry(id, index){
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/api/departement/' + id)
                        .then(function (resp) {
                            app.items.splice(index, 1);
                        })
                        .catch(function (resp) {
                        });
                }
            }
        }
    }
</script>