<template>
	<div class="container">
		<div class="form-group">
	    	<router-link to="/home" class="btn btn-default">Back</router-link>
		</div>

		<div class="panel panel-default">
		    <div class="panel-body">
		        <form v-on:submit="saveForm()">
		            <div class="row">
		                <div class="col-xs-12 form-group">
		                    <label class="control-label">Departement name</label>
		                    <input type="text" v-model="item.titre" class="form-control">
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-xs-12 form-group">
		                    <label class="control-label">Departement image</label>
		                    <input type="text" v-model="item.image" class="form-control">
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-xs-12 form-group">
		                    <button class="btn btn-success">Edit</button>
		                </div>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
</template>

<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.itemId = id;
            axios.get('/api/departement/' + id)
                .then(function (resp) {
                    app.item = resp.data;
                })
                .catch(function () {
                    console.log("Could not load your item")
                });
        },
        data: function () {
            return {
                itemId: null,
                item: {
                    name: '',
                    image: ''
                }
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newitem = app.item;
                axios.put('/api/departement/' + app.itemId, newitem)
                    .then(function (resp) {
                        app.$router.replace('/');
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });
            }
        }
    }
</script>
