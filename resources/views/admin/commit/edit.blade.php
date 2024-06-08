<x-layouts.admin>

    <div class="card">
        <div class="py-4 mx-3">
            <div class="contact-form">
                <div id="success"></div>
                <div class="card-header"><h2><b>Edit Commit</b></h2></div>

                <form action="{{ route('commit.update', $commit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Ism familiya</label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Ism familiya" value="{{ old('name', $commit->name) }}">
                                @error('name')
                                <div class="text-danger">Ism familiyasi xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Title fields -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Foydalanuvchi haqida ma'lumot uz</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Foydalanuvchi haqida ma'lumot uz" value="{{ old('title_uz', $commit->title_uz) }}">
                                @error('title_uz')
                                <div class="text-danger">title_uz xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Foydalanuvchi haqida ma'lumot ru</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Foydalanuvchi haqida ma'lumot ru" value="{{ old('title_ru', $commit->title_ru) }}">
                                @error('title_ru')
                                <div class="text-danger">title_ru xato: {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Foydalanuvchi haqida ma'lumot en</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Foydalanuvchi haqida ma'lumot en" value="{{ old('title_en', $commit->title_en) }}">
                                @error('title_en')
                                <div class="text-danger">title_en xato: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Image upload field -->
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
                            <!-- Display existing image -->
                            @if ($commit->photo)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $commit->photo) }}" alt="Current Image" style="width: 90px; height: auto;">
                                </div>
                            @endif
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
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('commit.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Yangilash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
