<template>
	<div class="content">
        <div class="row">
            <div class="col">
                <h3>Explore Products</h3>
            </div>
            <div class="col">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input type="text" name="key" class="form-control" placeholder="Product Name" aria-label="Search Key" aria-describedby="Search Key">
                        <button type="submit" class="btn btn-outline-secondary" id="search">Search</button>
                    </div>
                </form>
            </div>
            <div class="col" align="end">
                <a href="#" class="btn btn-sm btn-outline-success">
                    Add Product
                </a>
                <a href="#" class="btn btn-sm btn-secondary">
                    Show Category
                </a>
            </div>
        </div>
        <div class="row row-cols-5 mb-2">
        	<ProductCard v-for="product in products" :key="product.id"
                :name="product.name"
                :description="product.description"
                :quantity="product.quantity"
                :price="product.price"
                :category="product.category.name"
            >
            </ProductCard>
        </div>
    </div>
</template>

<script>
	import axios from 'axios';
    import ProductCard from './ProductCard.vue';

    export default {
        components: {
            ProductCard
        },
        data() {
        	return {
        		products: []
        	}
        },
        methods: {
        	async fetchProducts() {
        		let res = await axios.get('/api');
        		this.products = res.data.products;
        	}
        },
        created() {
        	this.fetchProducts();
        }
    }
</script>