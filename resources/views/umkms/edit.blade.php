@extends('layouts.dashboard.main')
@section('container')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3 class="text-center">Update UMKM</h3>
    </div>

    <form action="/admin/umkms/{{ $umkm->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-lg-10 mx-auto">
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name='title' placeholder="Masukkan judul" value="{{ old('title', $umkm->title) }}" required autofocus>
                <label for="floatingInput">Nama UMKM</label>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('seller') is-invalid @enderror" id="seller"
                    name='seller' placeholder="Masukkan judul" value="{{ old('seller', $umkm->seller) }}" required autofocus>
                <label for="floatingInput">Seller</label>
                @error('seller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Stand</label>
                <input type="hidden" name="oldImg" value="{{ $umkm->image }}">
                @if ($umkm->image)
                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="/storage/{{ $umkm->image }}">
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
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="summernote" style="height: 100px">{{ old('body', $umkm->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Gambar Lainnya</span>
                        <a href="/admin/umkmImages?id={{ $umkm->id }}" class="btn btn-success icon icon-left"><i data-feather="file-plus"></i> <span>Add Image</span></a>
                    </div>
                    @if (count($images) > 0)
                        <div class="card-body d-flex justify-content-end">
                            <a href="/admin/umkmImages/{{ $images[0]->id }}" class="btn btn-danger icon icon-left"><i data-feather="trash"></i> <span>Delete Image</span></a>
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table" id="table_posts">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                    <tr>
                                        <td>{{ $image->title }}</td>
                                        <td class="text-center col-6">
                                            @if ($image->image)
                                                <img src="/storage/{{ $image->image }}" class="img-fluid p-1" alt="">
                                            @else
                                                <img src="https://via.placeholder.com/150" alt="NULL">
                                            @endif
                                        </td>
                                        {{-- <td class="col-3 text-center">
                                            <form action="/admin/umkmImages/{{ $image->id }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <button type="submit" class="btn btn-outline-warning">
                <i class="bi bi-plus-square mr-1"></i>
                <span>Update Event</span>
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