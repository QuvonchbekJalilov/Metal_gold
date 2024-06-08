<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header"><h2><b>Edit Blog Post</b></h2></div>
            <div class="card-body">
                <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title Fields -->
                            <div class="mb-3">
                                <label for="title_uz">Title (Uzbek):</label>
                                <input type="text" class="form-control" name="title_uz" placeholder="Title uz" value="{{ old('title_uz', $blog->title_uz) }}" />
                                @error('title_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru">Title (Russian):</label>
                                <input type="text" class="form-control" name="title_ru" placeholder="Title ru" value="{{ old('title_ru', $blog->title_ru) }}" />
                                @error('title_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en">Title (English):</label>
                                <input type="text" class="form-control" name="title_en" placeholder="Title en" value="{{ old('title_en', $blog->title_en) }}" />
                                @error('title_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Short Content Fields -->
                            <div class="mb-3">
                                <label for="short_content_uz">Short Content (Uzbek):</label>
                                <input type="text" class="form-control" name="short_content_uz" placeholder="Short Content uz" value="{{ old('short_content_uz', $blog->short_content_uz) }}" />
                                @error('short_content_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru">Short Content (Russian):</label>
                                <input type="text" class="form-control" name="short_content_ru" placeholder="Short Content ru" value="{{ old('short_content_ru', $blog->short_content_ru) }}" />
                                @error('short_content_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en">Short Content (English):</label>
                                <input type="text" class="form-control" name="short_content_en" placeholder="Short Content en" value="{{ old('short_content_en', $blog->short_content_en) }}" />
                                @error('short_content_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Content Fields -->
                            <div class="mb-3">
                                <label for="content_uz">Content (Uzbek):</label>
                                <textarea class="form-control" name="content_uz" placeholder="Content uz">{{ old('content_uz', $blog->content_uz) }}</textarea>
                                @error('content_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_ru">Content (Russian):</label>
                                <textarea class="form-control" name="content_ru" placeholder="Content ru">{{ old('content_ru', $blog->content_ru) }}</textarea>
                                @error('content_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_en">Content (English):</label>
                                <textarea class="form-control" name="content_en" placeholder="Content en">{{ old('content_en', $blog->content_en) }}</textarea>
                                @error('content_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-6">
                            <!-- Description Fields -->
                            <div class="mb-3">
                                <label for="description_uz">Description (Uzbek):</label>
                                <textarea class="form-control" name="description_uz" placeholder="Description uz">{{ old('description_uz', $blog->description_uz) }}</textarea>
                                @error('description_uz')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description_ru">Description (Russian):</label>
                                <textarea class="form-control" name="description_ru" placeholder="Description ru">{{ old('description_ru', $blog->description_ru) }}</textarea>
                                @error('description_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description_en">Description (English):</label>
                                <textarea class="form-control" name="description_en" placeholder="Description en">{{ old('description_en', $blog->description_en) }}</textarea>
                                @error('description_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Image Upload Field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Upload Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileName()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Choose file</label>
                                </div>
                                @error('photo')
                                <div class="text-danger">Image upload is required: {{ $message }}</div>
                                @enderror

                                @if ($blog->photo)
                                    <div class="mt-3">
                                        <label>Current Image:</label><br>
                                        <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Image" style="max-width: 100%; height: 90px;">
                                    </div>
                                @endif
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
