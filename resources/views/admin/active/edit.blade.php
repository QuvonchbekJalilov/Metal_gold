<x-layouts.admin>
    <div class="card">
        <div class="py-4 mx-3">
        <div class="card-header"><h2><b>Edit Active</b></h2></div>

            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Title UZ field -->
                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Qisqacha ma'lumot (Uzbek)</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz" placeholder="Qisqacha ma'lumot uz" value="{{ old('title_uz', $contact->title_uz) }}">
                                @error('title_uz')
                                <div class="text-danger">title_uz: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Title RU field -->
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Qisqacha ma'lumot (Russian)</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru" placeholder="Qisqacha ma'lumot ru" value="{{ old('title_ru', $contact->title_ru) }}">
                                @error('title_ru')
                                <div class="text-danger">title_ru: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', $contact->email) }}">
                                @error('email')
                                <div class="text-danger">email: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Title EN field -->
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Qisqacha ma'lumot (English)</label>
                                <input type="text" id="title_en" class="form-control" name="title_en" placeholder="Qisqacha ma'lumot en" value="{{ old('title_en', $contact->title_en) }}">
                                @error('title_en')
                                <div class="text-danger">title_en: {{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Phone Number field -->
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Bizning telefon raqam</label>
                                <input type="text" id="phone_number" class="form-control" name="phone_number" placeholder="Bizning telefon raqam" value="{{ old('phone_number', $contact->phone_number) }}">
                                @error('phone_number')
                                <div class="text-danger">phone_number: {{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary">Orqaga</a>
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Yangilash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
