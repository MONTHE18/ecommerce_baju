@extends('../layout-admin')

@section('title', 'Tambah Transaksi | Toko Online')

@section('styles')
    <link rel="stylesheet" href="{{asset ('css/admin-dataevent.css')}}">
@endsection

@section('sidebarContent')
<form action="{{route('admintransaksi')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="p-4">           
        <div>
            <h4 class="fw-bold">Tambah Data Transaksi</h4>
            <p>Tambahkan data transaksi</p>
        </div>

        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0">Data Transaksi</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Code Transaksi</label>
                        <textarea class="form-control" name="code_transaksi"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Total Quantity</label>
                        <textarea class="form-control" name="total_qty"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Total Harga</label>
                        <textarea class="form-control" rows="3" name="total_harga"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Nama Customer</label>
                        <textarea class="form-control" rows="3" name="nama_customer"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat"></textarea>
                    </div>
                    
                
                    

                </div>
                <div class="col-md-6 ms-auto">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">No Telp</label>
                        <textarea class="form-control" rows="3" name="no_tlp"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Ekspedisi</label>
                        <textarea class="form-control" rows="3" name="ekspedisi"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Status</label>
                        <textarea class="form-control" rows="3" name="status"></textarea>
                    </div>
                    <div>
                    </div>
                </div>

                <hr />
                
        </div>
        
    </div>
    
</div>
    <div class="text-center mt-3 mb-3">
        <button class="rounded-2 border-0">Simpan</button>
    </div>
</form>
      

@section('script')
    <script>
         let c = 1;
         console.log();
        document.getElementById('addSesi').addEventListener('click', function (e) {
            e.preventDefault()
            c += 1;
            console.log(c);
            var formContainer = document.getElementById('formContainer');
            var newForm = document.createElement('div');
            newForm.classList.add('col-md-6');
            newForm.classList.add('mb-2');
            var items =

            console.log('Items:', items);
                

            newForm.innerHTML = `
                <h1 class="fw-bold fs-5 m-0">Sesi </h1>
                 <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Title Sesi</label>
                            <input type="text" name="title_sesi" class="form-control" placeholder="Masukkan Judul Sesi" />
                </div>
                 <div class="mb-4 d-md-flex align-items-center">
                            <label class="form-label mb-0">Guestars</label>
                            <select id="customSelect" name="pembicara_id" class="form-select">
                                <option selected>-- Pilih Salah Satu --</option>
                                 ${items.map(item => `<option value=""></option>`).join('')}                            
                            </select>
                        </div>
                <button type="button" class="btn btn-danger" onclick="deleteForm(this)">Delete</button>
            `;

            formContainer.appendChild(newForm);
        });

        function deleteForm(button) {
        
            // Dapatkan elemen form sesi yang sesuai
            var form = button.closest('.col-md-6');
            // Hapus elemen form dari DOM
            form.remove();
            c -= 1;
            console.log(c);
        }
        </script>
    <script src="{{asset ('js/admin-dataevent.js')}}"></script>
@endsection

@endsection
