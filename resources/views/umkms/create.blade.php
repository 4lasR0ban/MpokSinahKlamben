@extends('layouts.dashboard.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3 class="text-center">Create New UMKM</h3>
    </div>

    <form action="/admin/umkms" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-10 mx-auto">
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" id="title"
                    name='title' placeholder="Masukkan judul" value="{{ old('title') }}" required autofocus>
                <label for="floatingInput">Nama UMKM</label>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('seller') is-invalid @enderror" id="seller"
                    name='seller' placeholder="Masukkan penjual" value="{{ old('seller') }}" required autofocus>
                <label for="floatingInput">Seller</label>
                @error('seller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Stand</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="summernote" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="summernote" style="height: 100px">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <section class="section mt-4">
                <div class="card">
                    <div class="card-header">
                        Daftar Gambar 
                    </div>
                    <div class="card-body">
                        <table class="table" id="table_posts">
                            <thead>
                                <tr>
                                    <th class="text-center">Deskripsi Singkat</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center"><input class="form-control" type="text" name="titles[]"></td>
                                    <td class="text-center">
                                        <input class="form-control @error('images') is-invalid @enderror" type="file" id="images" name="images[]" onchange="previewImages()">
                                        @error('images')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </td>
                                    <td class="col-2 text-center">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add"
                                            id="addBtn"><i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-plus-square mr-1"></i>
                <span>Create UMKM</span>
            </button>
        </div>
    </form>

    <script>
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#table_posts tbody").append(`
                <tr>
                    <td class="text-center"><input class="form-control" type="text" name="titles[]"></td>
                    <td class="text-center">
                        <input class="form-control @error('images') is-invalid @enderror" type="file" id="images" name="images[]" onchange="previewImages()">
                        @error('images')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </td>
                    <td class="col-2 text-center">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Add" id="remove"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>`);
        });

        $("#table_posts tbody").on("click",".remove", function() {
            $(this).closest("tr").remove(); 
        });
    </script>

    {{-- <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script> --}}

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
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
        
            oFReader.onload = function (oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewImages(){
            const image = document.querySelector('.images');
            const imgPreview = document.querySelector('.img-previews');
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
        
            oFReader.onload = function (oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>

    
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table_posts').DataTable({
                retrieve: true,
                responsive: true
            });
        });
        // let jquery_datatable = $("#table_posts").DataTable();
    </script>
@endpush