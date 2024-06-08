<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h2><b>{{ $blog->title_uz }}</b></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Title Fields -->
                        <div class="mb-3">
                            <h4>Title (Uzbek):</h4>
                            <p>{{ $blog->title_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Title (Russian):</h4>
                            <p>{{ $blog->title_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Title (English):</h4>
                            <p>{{ $blog->title_en }}</p>
                        </div>

                        <!-- Short Content Fields -->
                        <div class="mb-3">
                            <h4>Short Content (Uzbek):</h4>
                            <p>{{ $blog->short_content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Short Content (Russian):</h4>
                            <p>{{ $blog->short_content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Short Content (English):</h4>
                            <p>{{ $blog->short_content_en }}</p>
                        </div>

                        <!-- Content Fields -->
                        <div class="mb-3">
                            <h4>Content (Uzbek):</h4>
                            <p>{{ $blog->content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Content (Russian):</h4>
                            <p>{{ $blog->content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Content (English):</h4>
                            <p>{{ $blog->content_en }}</p>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- Description Fields -->
                        <div class="mb-3">
                            <h4>Description (Uzbek):</h4>
                            <p>{{ $blog->description_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Description (Russian):</h4>
                            <p>{{ $blog->description_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Description (English):</h4>
                            <p>{{ $blog->description_en }}</p>
                        </div>

                        <!-- Image Display -->
                        <div class="mb-3">
                            @if ($blog->photo)
                                <h4>Image:</h4>
                                <img src="{{ asset('storage/' . $blog->photo) }}" alt="Blog Image" style="max-width: 100%; height: auto;">
                            @else
                                <p>No image available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('blog.destroy', ['blog' => $blog->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
