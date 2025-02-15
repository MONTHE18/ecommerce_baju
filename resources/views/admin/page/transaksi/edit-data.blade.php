@extends('../layout-admin')

@section('title', 'Event Admin | AFEKSI')

@section('styles')
    <link rel="stylesheet" href="{{asset ('css/admin-products.css')}}">
@endsection

@section('sidebarContent')
<form action="{{route ('update', ['id'=> $transaksi->id])}}" method="post">
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
                        <label class="form-label">Code Transaki</label>
                        <textarea class="form-control" rows="3" name="code_transaksi" >{{ $transaksi->code_transaksi }}</textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Quantity</label>
                        <input type="text" class="form-control"  name="total_qty" value="{{ $transaksi->total_qty }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Harga</label>
                        <input type="text" class="form-control"  name="total_harga" value="{{ $transaksi->total_harga }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Nama Customer</label>
                        <input type="text" class="form-control"  name="nama_customer" value="{{ $transaksi->nama_customer }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Alamat</label>
                        <input type="text" class="form-control"  name="alamat" value="{{ $transaksi->alamat }}" />
                    </div>
                </div>

                <div class="col-md-6 ms-auto">

                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">No Telp</label>
                        <input type="text" class="form-control"  name="no_tlp" value="{{ $transaksi->no_tlp }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Ekspedisi</label>
                        <input type="text" class="form-control"  name="ekspedisi" value="{{ $transaksi->ekspedisi }}" />
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Status</label>
                        <input type="text" class="form-control"  name="status" value="{{ $transaksi->status }}" />
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
