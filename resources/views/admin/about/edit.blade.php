<x-layouts.admin>

    <div class="card">
        <div class="py-4 mx-3">
            <div class="card-header"><h2><b>Edit About</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title fields -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Title uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Title uz" value="{{ old('title_uz', $about->title_uz) }}">
                                @error('title_uz')
                                <div class="text-danger">title_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Title ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Title ru" value="{{ old('title_ru', $about->title_ru) }}">
                                @error('title_ru')
                                <div class="text-danger">title_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Title en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Title en" value="{{ old('title_en', $about->title_en) }}">
                                @error('title_en')
                                <div class="text-danger">title_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Short content fields -->
                            <div class="mb-3">
                                <label for="short_content_uz" class="form-label">Description uz</label>
                                <input type="text" id="short_content_uz" class="form-control" name="short_content_uz" placeholder="Description uz" value="{{ old('short_content_uz', $about->short_content_uz) }}">
                                @error('short_content_uz')
                                <div class="text-danger">short_content_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_ru" class="form-label">Description ru</label>
                                <input type="text" id="short_content_ru" class="form-control" name="short_content_ru" placeholder="Description ru" value="{{ old('short_content_ru', $about->short_content_ru) }}">
                                @error('short_content_ru')
                                <div class="text-danger">short_content_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_content_en" class="form-label">Description en</label>
                                <input type="text" id="short_content_en" class="form-control" name="short_content_en" placeholder="Description en" value="{{ old('short_content_en', $about->short_content_en) }}">
                                @error('short_content_en')
                                <div class="text-danger">short_content_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Detailed content fields -->
                            <div class="mb-3">
                                <label for="content_uz" class="form-label">Content uz</label>
                                <input type="text" id="content_uz" class="form-control" name="content_uz" placeholder="Content uz" value="{{ old('content_uz', $about->content_uz) }}">
                                @error('content_uz')
                                <div class="text-danger">content_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_ru" class="form-label">Content ru</label>
                                <input type="text" id="content_ru" class="form-control" name="content_ru" placeholder="Content ru" value="{{ old('content_ru', $about->content_ru) }}">
                                @error('content_ru')
                                <div class="text-danger">content_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="content_en" class="form-label">Content en</label>
                                <input type="text" id="content_en" class="form-control" name="content_en" placeholder="Content en" value="{{ old('content_en', $about->content_en) }}">
                                @error('content_en')
                                <div class="text-danger">content_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Image upload field -->
                            <div class="mb-3">
                                <label for="photo" class="form-label">Rasm hajmi: 397:440</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo" onchange="displayFileNameAndPreview()">
                                    <label class="custom-file-label" for="photo" id="photoLabel">Yangi Rasm Tanlash</label>
                                </div>
                                <div class="mt-2" id="photoPreviewContainer">
                                    @if ($about->photo)
                                        <img src="{{ asset('storage/' . $about->photo) }}" alt="Current Image" id="photoPreview" style="width: 90px;">
                                    @endif
                                </div>
                                @error('photo')
                                <div class="text-danger">Faylni yuklashni unutdingiz: {{ $message }}</div>
                                @enderror
                            </div>

                            <script>
                                function displayFileNameAndPreview() {
                                    const input = document.getElementById('photo');
                                    const label = document.getElementById('photoLabel');
                                    const photoPreviewContainer = document.getElementById('photoPreviewContainer');

                                    const file = input.files[0];
                                    if (file) {
                                        label.textContent = file.name;

                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            let img = document.getElementById('photoPreview');
                                            if (!img) {
                                                img = document.createElement('img');
                                                img.id = 'photoPreview';
                                                img.style.width = '90px';
                                                photoPreviewContainer.appendChild(img);
                                            }
                                            img.src = e.target.result;
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                }
                            </script>

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('about.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Yangilash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>

<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("photo").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
