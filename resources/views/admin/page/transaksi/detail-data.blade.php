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
                        <label class="form-label mb-0">Code Transaki</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->code_transaksi }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Quantity</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->total_qty }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Harga</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->total_harga }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Nama Customer</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->nama_customer }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Alamat</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->alamat }}" />
                    </div>
                    
                    
                </div>
                <div class="col-md-6 ms-auto"> 
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">No Telp</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->no_tlp }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Ekspedisi</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->ekspedisi }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status</label>
                        <input type="text" class="form-control" disabled value="{{ $transaksi->status }}" />
                    </div>
                  
                </div>
            </div>
            <div class="text-center">
                <a href="{{route ('admintransaksi')}}" class=" btn btn-primary rounded-2 border-0 mt-lg-3 mt-md-0 mb-3 mb-md-4 btn-keluar">Back</a>
            </div>
        </div>
    </div>

@section('script')
    <script src="{{asset ('js/admin-dataevent.js')}}"></script>
@endsection

@endsection
