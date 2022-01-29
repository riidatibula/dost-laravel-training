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
                <AddProduct
                    :categories="categories"
                    @update-products="updateProducts"
                >
                </AddProduct>
            </div>
        </div>
    	<ProductCard
            :products="products"
            :categories="categories"
            @update-products="updateProducts"
        >
        </ProductCard>
    </div>
</template>

<script>
	import axios from 'axios';
    import ProductCard from './ProductCard.vue';
    import AddProduct from './AddProduct.vue';

    export default {
        components: {
            ProductCard,
            AddProduct
        },
        data() {
        	return {
        		products: [],
                categories: []
        	}
        },
        methods: {
        	async fetchProducts() {
        		let res = await axios.get('/api');
        		this.products = res.data.products;
                this.categories = res.data.categories;
        	},
            updateProducts() {
                this.fetchProducts();
            }
        },
        created() {
        	this.fetchProducts();
        }
    }
</script>