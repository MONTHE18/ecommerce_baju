@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-3">
        <div class="col-sm-7">
            <div class="card">
                <div class="card-body">
                    <h3>Masukkan Alamat Penerima</h3>

                <div class="row mb-3">
                    <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_penerima" name="namaPenerima" placeholder="Masukkan Nama Penerima" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                   <div class="col-sm-9">
                    <input type="text" class="form-control col-sm-9" id="alamat_penerima" name="alamatPenerima" placeholder="Masukkan Alamat Penerima">
                   </div>
                </div>
                <div class="row mb-3">
                    <label for="tlp" class="col-form-label col-sm-3">No Telepon Penerima</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukkan No Telp Penerima">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                    <div class="col-sm-9">
                        <select name="ekspedisi" class="form-cotrol" id="ekspedisi">
                            <option value="">--- Pilih Ekspedisi ---</option>
                            <option value="jnt">J&T Ekspress</option>
                            <option value="jne">JNE Ekspress</option>
                            <option value="sicepat">Sicepat Ekspress</option>
                            <option value="ninja">Ninja Ekspress</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header text-center p-4">
                    <h3>Total Belanja</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="totalBelanja" class="col-form-label col-sm-4">Total Belanja</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="totalBelanja" name="totalBelanja" value="200000" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="discount" class="col-form-label col-sm-4">Discount</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="discount" name="discount" value="0">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="PPn" class="col-form-label col-sm-4">PPn</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="PPn" name="PPn" value="2200" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ongkir" class="col-form-label col-sm-4">Ongkir</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="ongkir" name="ongkir" value="5000" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dibayarkan" class="col-form-label col-sm-4">Total</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="dibayarkan" name="dibayarkan" value="207200" >
                        </div>
                    </div>
                   
                    <div class="row mb-3">
                        <label for="diterima" class="col-form-label col-sm-4">Uang Diterima</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="diterima" name="diterima" value="" >
                        </div>
                    </div>
                   
                    <div class="row mb-3">
                        <label for="dikembalikan" class="col-form-label col-sm-4">Uang DIkembalikan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="dikembalikan" name="dikembalikan" value="" readonly>
                        </div>
                    </div>
                    <button class="btn btn-success w-100">
                        <i class="fas fa-print"></i>
                        Print Struck
                    </button>
                   
                    
                </div>
            </div>
        </div>
    </div>
@endsection