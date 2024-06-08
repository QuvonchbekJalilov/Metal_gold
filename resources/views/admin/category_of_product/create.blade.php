<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header"><h2><b>Add Product</b></h2></div>
            <div class="card-body">
                <form action="{{ route('category_of_product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Category -->
                            <div class="mb-3">
                                <label for="category_id">Category:</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <small class="text-danger">Category selection is required</small>
                                @enderror
                            </div>

                            <!-- Type -->
                            <div class="mb-3">
                                <label for="type_id">Type:</label>
                                <select name="type_id" class="form-control">
                                    @foreach($populars as $popular)
                                    <option value="{{ $popular->id }}">{{ $popular->type }}</option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                <small class="text-danger">Type selection is required</small>
                                @enderror
                            </div>

                            <!-- Name Fields -->
                            <div class="mb-3">
                                <label for="name_uz">Name (Uzbek):</label>
                                <input type="text" class="form-control" name="name_uz" placeholder="Mahsulot nomi uz" value="{{ old('name_uz') }}" />
                                @error('name_uz')
                                <small class="text-danger">Name in Uzbek is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_ru">Name (Russian):</label>
                                <input type="text" class="form-control" name="name_ru" placeholder="Mahsulot nomi ru" value="{{ old('name_ru') }}" />
                                @error('name_ru')
                                <small class="text-danger">Name in Russian is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name_en">Name (English):</label>
                                <input type="text" class="form-control" name="name_en" placeholder="Mahsulot nomi en" value="{{ old('name_en') }}" />
                                @error('name_en')
                                <small class="text-danger">Name in English is required</small>
                                @enderror
                            </div>

                            <!-- Additional Fields -->
                            <div class="mb-3">
                                <label for="size">Marka:</label>
                                <input type="text" class="form-control" name="size" placeholder="Size" value="{{ old('size') }}" />
                                @error('size')
                                <small class="text-danger">Size is required</small>
                                @enderror
                            </div>


                        </div>

                        <div class="col-md-6">
                            <!-- Image Upload Fields -->
                            <div class="mb-3">
                                <label for="manufacturer">Manufacturer:</label>
                                <input type="text" class="form-control" name="manufacturer" placeholder="Manufacturer" value="{{ old('manufacturer') }}" />
                                @error('manufacturer')
                                <small class="text-danger">Manufacturer is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tonna_metr">Tonna Metr:</label>
                                <input type="text" class="form-control" name="tonna_metr" placeholder="Tonna metr" value="{{ old('tonna_metr') }}" />
                                @error('tonna_metr')
                                <small class="text-danger">Tonna metr is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="metr_tonna">Metr Tonna:</label>
                                <input type="text" class="form-control" name="metr_tonna" placeholder="Metr tonna" value="{{ old('metr_tonna') }}" />
                                @error('metr_tonna')
                                <small class="text-danger">Metr tonna is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">Price:</label>
                                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}" />
                                @error('price')
                                <small class="text-danger">Price is required</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi: Custom Size</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Rasm Tanlash</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>

                            <script>
                                function displayFileName() {
                                    const input = document.getElementById('photo');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0].name;
                                    label.textContent = fileName;
                                }
                            </script>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>