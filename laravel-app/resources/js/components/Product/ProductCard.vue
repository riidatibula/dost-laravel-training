<template>
    <div class="row row-cols-5 mb-2">
		<div class="col" v-for="product in products">
	        <div class="card border-success mt-2">
	            <div class="card-body">
	                <h5 class="card-title">{{ product.name }}</h5><hr>
	                <p class="card-text">
	                	Category: {{ product.category.name }}<br>
	                	Price: ₱ {{ product.price }}
	                </p>
	                <div class="row">
	                    <div class="col" align="end">
	                    	<a @click="selectProduct(product)" class="me-1" type="button"
	                    	data-bs-toggle="modal" data-bs-target="#viewProductModal">
	                    		<span class="badge bg-primary">View</span>
	                    	</a>
	                    	<a @click="selectProduct(product)" class="me-1" type="button"
	                    	data-bs-toggle="modal" data-bs-target="#editProductModal">
	                    		<span class="badge bg-secondary">Edit</span>
	                    	</a>
	                    	<a href="#" type="button"
	                    	data-bs-toggle="modal" data-bs-target="#deleteProductModal">
	                    		<span class="badge bg-danger">Delete</span>
	                    	</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>

	<!-- View Modal -->
	<div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="viewModalLabel">{{ this.product.name }}</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				<div class="modal-body">
					<p>
						Category: {{ this.product.category.name }}<br>
	                	Description: {{ this.product.description }}<br>
	                	Price: ₱ {{ this.product.price }} each<br>
	                	Quantity: {{ this.product.quantity }} items remaining
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Modal -->
	<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form @submit.prevent="updateProduct">
					<div class="modal-header">
						<h5 class="modal-title" id="editModalLabel">Edit Product</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
					<div class="modal-body">
						<div class="input-group mb-3 mt-3">
	                        <label class="input-group-text" for="categorySelect">Category</label>
	                        <select class="form-select" id="categorySelect" v-model="this.product.category.id" required>
	                            <option
	                                v-for="category in categories"
	                                :key="category.id"
	                                :value="category.id"
	                            >
	                                {{ category.name }}
	                            </option>
	                        </select>
	                    </div>
	                    <div class="input-group mb-3">
	                        <span class="input-group-text" id="product-name">Name</span>
	                        <input v-model="this.product.name" type="text" class="form-control" aria-describedby="product-name" required>
	                    </div>
	                    <div class="input-group mb-3">
	                        <span class="input-group-text" id="quantity">Quantity</span>
	                        <input v-model="this.product.quantity" type="number" class="form-control" aria-describedby="quantity" required>
	                    </div>
	                    <div class="input-group mb-3">
	                        <span class="input-group-text" id="price">Price</span>
	                        <input v-model="this.product.price" type="number" class="form-control" aria-describedby="price" step="0.01" min="0" required>
	                    </div>
	                    <div class="input-group mb-3">
	                        <span class="input-group-text" id="description">Description</span>
	                        <input v-model="this.product.description" type="text" class="form-control" aria-describedby="description" required>
	                    </div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Delete Modal -->
	<!-- <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->
</template>

<script>
	import axios from 'axios';

    export default {
    	props:{
    		products: {
    			type: Array,
    			required: true
    		},
    		categories: {
    			type: Array,
    			required: true
    		}
    	},
        data() {
        	return {
        		product: {
        			id: null,
        			name: '',
	                description: '',
	                quantity: null,
	               	price: null,
	                category: {
	                	id: null,
	                	name: ''
	                }
        		}
        	}
        },
        methods: {
        	selectProduct(selectedProduct) {
        		this.product.id = selectedProduct.id;
        		this.product.name = selectedProduct.name;
        		this.product.description = selectedProduct.description;
        		this.product.quantity = selectedProduct.quantity;
        		this.product.price = selectedProduct.price;
        		this.product.category = selectedProduct.category;
        	},

        	async updateProduct() {
        		const product = {
        			id: this.product.id,
                    category_id: this.product.category.id,
                    name: this.product.name,
                    quantity: this.product.quantity,
                    price: this.product.price,
                    description: this.product.description
                }

                console.log(product)
                let res = await axios.post('/api/update', product);
                console.log(res);
                this.$.emit('update-products');
        	}
        },
        created() {
        	// console.log(this.name);
        },
        emits: ['update-products']
    }
</script>