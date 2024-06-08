<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2><b>Product Details</b></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category_id">Category:</label>
                            <p>{{ $product->category->name_uz }}</p>
                        </div>

                        <!-- Type -->
                        <div class="mb-3">
                            <label for="type_id">Type:</label>
                            <p>{{ $product->type }}</p>
                        </div>

                        <!-- Name Fields -->
                        <div class="mb-3">
                            <label for="name_uz">Name (Uzbek):</label>
                            <p>{{ $product->name_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_ru">Name (Russian):</label>
                            <p>{{ $product->name_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_en">Name (English):</label>
                            <p>{{ $product->name_en }}</p>
                        </div>

                        <!-- Additional Fields -->
                        <div class="mb-3">
                            <label for="size">Size:</label>
                            <p>{{ $product->size }}</p>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- Image Upload Fields -->
                        <div class="mb-3">
                            <label for="manufacturer">Manufacturer:</label>
                            <p>{{ $product->manufacturer }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="tonna_metr">Tonna Metr:</label>
                            <p>{{ $product->tonna_metr }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="metr_tonna">Metr Tonna:</label>
                            <p>{{ $product->metr_tonna }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="price">Price:</label>
                            <p>{{ $product->price }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Product Image:</label>
                            <img src="{{ asset('storage/' . $product->photo) }}" alt="Product Image" style="height: 90px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('category_of_product.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('category_of_product.edit', ['category_of_product' => $product->id]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('category_of_product.destroy', ['category_of_product' => $product->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>