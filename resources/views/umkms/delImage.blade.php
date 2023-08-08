{{-- {{ dd($images) }} --}}
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
        <div class="col-lg-10 mx-auto">
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    placeholder="Masukkan judul" value="{{ old('title', $umkm->title) }}" readonly>
                <label for="floatingInput">Nama UMKM</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('seller') is-invalid @enderror" id="seller"
                    placeholder="Masukkan judul" value="{{ old('seller', $umkm->seller) }}" readonly>
                <label for="floatingInput">Seller</label>
                @error('seller')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="hidden" name="umkms_id" value="{{ $umkm->id }}">
            {{-- <div class="mb-3">
                <label for="image" class="form-label">Gambar Stand</label>
                <input type="hidden" value="{{ $umkm->image }}">
                @if ($umkm->image)
                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="/storage/{{ $umkm->image }}">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        onchange="previewImage()" disabled>
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        onchange="previewImage()" disabled>
                @endif
            </div> --}}

            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Gambar Lainnya</span>
                        <a href="/admin/umkmImages/{{ $images[0]->id }}" class="btn btn-danger icon icon-left" ><i data-feather="trash"></i> <span>Delete Image</span></a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="table_posts">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
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
                                        <td class="col-3 text-center">
                                            <form action="/admin/umkmImages/{{ $image->id }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <a href="/admin/umkms/{{ $umkm->id }}/edit"><button class="btn btn-outline-warning">
                <i class="bi bi-plus-square mr-1"></i>
                <span>Back</span>
            </button></a>

        </div>



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