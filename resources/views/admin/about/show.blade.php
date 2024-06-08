<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h3>About Information</h3>
                <a href="{{ route('about.index') }}" class="btn btn-secondary float-right">Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Title (Uzbek)</h5>
                        <p>{{ $about->title_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Title (Russian)</h5>
                        <p>{{ $about->title_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Title (English)</h5>
                        <p>{{ $about->title_en }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Description (Uzbek)</h5>
                        <p>{{ $about->short_content_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Description (Russian)</h5>
                        <p>{{ $about->short_content_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Description (English)</h5>
                        <p>{{ $about->short_content_en }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Content (Uzbek)</h5>
                        <p>{{ $about->content_uz }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Content (Russian)</h5>
                        <p>{{ $about->content_ru }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Content (English)</h5>
                        <p>{{ $about->content_en }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Image</h5>
                        <div class="about-image">
                            <img src="{{ asset('storage/' . $about->photo) }}" alt="About Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="btn btn-primary">Tahrirlash</a>
                <form action="{{ route('about.destroy', ['about' => $about->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Ochirishga ruxsat berasizmi?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">O'chirish</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
