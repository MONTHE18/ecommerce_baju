@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="{{asset ('css/admin-products.css')}}">
@endsection

@section('sidebarContent')
<form action="{{route ('update', ['id'=> $products->id])}}" method="post">
    @csrf               
<div class="p-4">    
    <div class="container p-1">
        <div>
            <h4 class="fw-bold">Pengelolaan Event</h4>
            <p>Kelola dan atur semua acara dan kegiatan terkait</p>

        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0 text-center">Edit Data</h1>
            </div>
            <hr />
           
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">SKU</label>
                        <textarea class="form-control" rows="3" name="sku" >{{ $products->sku }}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Nama Product</label>
                        <input type="text" class="form-control"  name="nama_product" value="{{ $products->nama_product }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Kategory</label>
                        <input type="text" class="form-control"  name="kategory" value="{{ $products->kategory }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Harga</label>
                        <input type="text" class="form-control"  name="harga" value="{{ $products->harga }}" />
                    </div>
                </div>

                <div class="col-md-6 ms-auto">

                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Stok</label>
                        <input type="text" class="form-control"  name="quantity" value="{{ $products->quantity }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Stok Out</label>
                        <input type="text" class="form-control"  name="quantity_out" value="{{ $products->quantity_out }}" />
                    </div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="foto" id="previewFoto" accept="image/*">
                        </div>
                        <div class="mb-4">
                            <img id="previewimg" alt="Preview Gambar" class="img-preview">
                        </div>
                        <div class="modal fade" id="previewModal" tabindex="-1" role="dialog"
                            aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img id="modalImg" src="#" class="img-fluid" alt="Gambar Preview">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
            <div class="d-flex gap-2 justify-content-center">
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-simpan" type="submit">Simpan</button>
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-hapus" type="submit">Hapus</button>
                <button class="rounded-2 border-0 mt-md-0 mb-3 mb-md-4 btn-keluar" type="submit">Keluar</button>
            </div>
        </div>
    </div>
</form>

@section('script')
    <script src="{{asset ('js/admin-dataevent.js')}}"></script>
@endsection

@endsection
