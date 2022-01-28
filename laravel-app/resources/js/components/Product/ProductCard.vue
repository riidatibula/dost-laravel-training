<template>
	<div class="col">
        <div class="card border-success mt-2">
            <div class="card-body">
                <a href="{{ route('product-info', ['id' => $product->id ]) }}" class="product-link">
                <h5 class="card-title">{{ name }}</h5></a>
                <p class="card-text">{{ description }}</p>
                <span class="badge bg-success">₱ {{ price }} each</span>
                <span class="badge bg-info text-dark">{{ quantity }} items remaining</span>
            	<span class="badge bg-secondary">Category: {{ category }}</span>
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
    			type: String,
    			required: true
    		}
    	},
        data() {
        	return {
        		products: []
        	}
        },
        created() {
        	// console.log(this.name);
        }
    }
</script>