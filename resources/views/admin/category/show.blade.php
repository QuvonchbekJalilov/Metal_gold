<x-layouts.admin>
    <div class="container my-5">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2><b>Category Details</b></h2></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name_uz" class="form-label">Mahsulot nomi (Uzbek)</label>
                            <p>{{ $category->name_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_ru" class="form-label">Mahsulot nomi (Russian)</label>
                            <p>{{ $category->name_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="name_en" class="form-label">Mahsulot nomi (English)</label>
                            <p>{{ $category->name_en }}</p>
                        </div>
                        <!-- Display Image -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Category Image</label>
                            <img src="{{ asset('storage/' . $category->photo) }}" alt="Category Image" style="height: 90px;">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
