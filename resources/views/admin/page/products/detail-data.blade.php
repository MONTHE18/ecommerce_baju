@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="{{asset ('css/admin-products.css')}}">
@endsection

@section('sidebarContent')
    <div class="container p-4">
        <div>
            <h4 class="fw-bold">Pengelolaan Event</h4>
            <p>Kelola dan atur semua acara dan kegiatan terkait</p>
        </div>
        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0 text-center">Detail Data</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">SKU</label>
                        <input type="text" class="form-control" disabled value="{{ $products->sku }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Nama Product</label>
                        <input type="text" class="form-control" disabled value="{{ $products->nama_product }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Kategory</label>
                        <input type="text" class="form-control" disabled value="{{ $products->kategory }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Harga</label>
                        <input type="text" class="form-control" disabled value="{{ $products->harga }}" />
                    </div>
                    
                    
                </div>
                <div class="col-md-6 ms-auto"> 
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Stok</label>
                        <input type="text" class="form-control" disabled value="{{ $products->quantity }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Stok Out</label>
                        <input type="text" class="form-control" disabled value="{{ $products->quantity_out }}" />
                    </div>
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="previewFoto" accept="image/*" disabled >
                        </div>
                        <div class="mb-4">
                            @if ($products->foto)
                                <img id="previewimg" style="width:400px; height:200px;" alt="Preview Gambar" class="img-preview" src='{{asset ('assets/image/contoh.png')}} {{$products->foto}}' >
                            @else
                                <p>Belum Ada Foto</p>
                            @endif
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
            <div class="text-center">
                <a href="{{route ('adminproduct')}}" class=" btn btn-primary rounded-2 border-0 mt-lg-3 mt-md-0 mb-3 mb-md-4 btn-keluar">Back</a>
            </div>
        </div>
    </div>

@section('script')
    <script src="{{asset ('js/admin-dataevent.js')}}"></script>
@endsection

@endsection
