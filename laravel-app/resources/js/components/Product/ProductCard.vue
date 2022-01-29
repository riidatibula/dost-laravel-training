<template>
	<div class="col">
        <div class="card border-success mt-2">
            <div class="card-body">
                <h5 class="card-title">{{ name }}</h5><hr>
                <p class="card-text">
                	Category: {{ category.name }}<br>
                	Description: {{ description }}<br>
                	Price: ₱ {{ price }} each<br>
                	Quantity: {{ quantity }} items remaining
                </p>
                <div class="row">
                    <div class="col" align="end">
                    	<a href="#" class="me-1">
                    		<span class="badge bg-primary">View</span>
                    	</a>
                    	<a href="#" class="me-1">
                    		<span class="badge bg-secondary">Edit</span>
                    	</a>
                    	<a href="#">
                    		<span class="badge bg-danger">Delete</span>
                    	</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	import axios from 'axios';

    export default {
    	props:{
    		name: {
    			type: String,
    			required: true
    		},
    		description: {
    			type: String,
    			required: true
    		},
    		quantity: {
    			type: Number,
    			required: true
    		},
    		price: {
    			type: Number,
    			required: true
    		},
    		category: {
    			type: Object,
    			required: true
    		}
    	},
        data() {
        	return {
        	}
        },
        created() {
        	// console.log(this.name);
        }
    }
</script>