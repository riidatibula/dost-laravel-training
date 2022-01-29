<template>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal">
    Add Product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form @submit.prevent="addProduct" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="categorySelect">Category</label>
                            <select class="form-select" id="categorySelect" v-model=categoryID>
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
                            <input v-model="name" type="text" class="form-control" aria-describedby="product-name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="quantity">Quantity</span>
                            <input v-model="quantity" type="number" class="form-control" aria-describedby="quantity" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="price">Price</span>
                            <input v-model="price" type="number" class="form-control" aria-describedby="price" step="0.01" min="0" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="description">Description</span>
                            <input v-model="description" type="text" class="form-control" aria-describedby="description" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        props:{
            categories: {
                type: Array,
                required: true
            }
        },
        data(){
            return {
                categoryID: null,
                name: '',
                quantity: null,
                price: null,
                description: '',
                modalShow: true
            }
        },
        methods: {
            async addProduct() {
                const product = {
                    categoryID: this.categoryID,
                    name: this.name,
                    quantity: this.quantity,
                    price: this.price,
                    description: this.description
                }

                let res = await axios.post('/api/create', product);
                this.categoryID = null;
                this.name = '';
                this.quantity = null;
                this.price = null;
                this.description = '';
                this.$.emit('update-products');
            }
        },
        emits: ['update-products']
    }

</script>