<template>
	<div class="content">
        <div class="row">
            <div class="col">
                <h3>Explore Products</h3>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="text" v-model="searchKey" class="form-control" placeholder="Product Name" aria-label="Search Key" aria-describedby="Search Key">
                    <button @click="searchProduct()" class="btn btn-outline-secondary" id="search">Search</button>
                </div>
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
                categories: [],
                searchKey: ''
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
            },

            async searchProduct() {
                if (this.searchKey.length == 0){
                    this.fetchProducts();
                    return;
                }

                try {
                    let res = await axios.get(`/api/search/${this.searchKey}`);
                    this.products = res.data.products;
                } catch (e){
                    console.log('Error=>', e);
                }
            }
        },
        created() {
        	this.fetchProducts();
        }
    }
</script>