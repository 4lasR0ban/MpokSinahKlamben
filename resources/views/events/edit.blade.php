@extends('layouts.dashboard.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3 class="text-center">Update Event</h3>
    </div>

    <form action="/admin/events/{{ $event->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-lg-10 mx-auto">
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name='title' placeholder="Masukkan judul" value="{{ old('title', $event->title) }}" required autofocus>
                <label for="floatingInput">Judul</label>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Input image</label>
                <input type="hidden" name="oldImg" value="{{ $event->image }}">
                @if ($event->image)
                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="/storage/{{ $event->image }}">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage()">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage()">
                @endif
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror 
            </div>

            <div class="mb-3">
                <label for="summernote" class="form-label">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="summernote" style="height: 100px">{{ old('body', $event->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-outline-warning">
                <i class="bi bi-plus-square mr-1"></i>
                <span>Update Event</span>
            </button>

        </div>


    </form>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
