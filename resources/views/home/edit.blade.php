<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('home.update', $homes->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="mahsulot nomi uz" value="{{ old('title_uz', $homes->title_uz) }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="Mahsulot nomi ru" value="{{ old('title_ru', $homes->title_ru) }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="mahsulot nomi en" value="{{ old('title_en', $homes->title_en) }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz"
                               placeholder="Mahsulot haqida qisqacha uz" value="{{ old('short_content_uz', $homes->short_content_uz) }}"/>
                        @error('short_content_uz')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru"
                               placeholder="mahsulot haqida qisqacha ru" value="{{ old('short_content_ru', $homes->short_content_ru) }}"/>
                        @error('short_content_ru')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en"
                               placeholder="mahsulot haqida qisqacha en" value="{{ old('short_content_en', $homes->short_content_en) }}"/>
                        @error('short_content_en')
                        <label for="if" class="text-danger">{{ $message }}</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="first_photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('first_photo')
                    <label for="if" class="text-danger">{{ $message }}</label>
                    @enderror
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="second_photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('second_photo')
                    <label for="if" class="text-danger">{{ $message }}</label>
                    @enderror
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="third_photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('third_photo')
                    <label for="if" class="text-danger">{{ $message }}</label>
                    @enderror
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="fourth_photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('fourth_photo')
                    <label for="if" class="text-danger">{{ $message }}</label>
                    @enderror
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="fifth_photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('fifth_photo')
                    <label for="if" class="text-danger">{{ $message }}</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Yangilash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
