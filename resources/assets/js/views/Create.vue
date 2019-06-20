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
		                    <button class="btn btn-success">Create</button>
		                </div>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
</template>

<script>

	export default {
        data: function () {
            return {
                item: {
                    titre: '',
                    image: ''
                }
            }
        },
        methods: {
        	saveForm() {
        		event.preventDefault();
                var app = this;
                var newItem = app.item;
                axios.post('/api/departement', newItem)
                    .then(function (resp) {
                        console.log(resp);
                    })
                    .catch(function (resp) {
                        console.log(resp);
                    });
        	}
        }
    }

</script>
