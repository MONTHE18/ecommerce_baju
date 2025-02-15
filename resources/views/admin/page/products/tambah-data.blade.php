@extends('../layout-admin')

@section('title', 'Tambah Products | Toko Online')

@section('styles')
    <link rel="stylesheet" href="{{asset ('css/admin-dataevent.css')}}">
@endsection

@section('sidebarContent')
<form action="{{route('adminproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="p-4">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif           
        <div>
            <h4 class="fw-bold">Tambah Data Products</h4>
            <p>Tambahkan data products</p>
        </div>

        <div class="mt-3 bg-event shadow-sm">
            <div class="p-3">
                <h1 class="fw-bold fs-5 m-0">Data Products</h1>
            </div>
            <hr />
            <div class="row p-3 mt-3">
                <div class="col-md-6">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">SKU</label>
                        <textarea class="form-control" name="SKU"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Nama Products</label>
                        <textarea class="form-control" name="nama_product"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Kategori</label>
                        <select id="customSelect" class="form-select" name="kategory">
                            <option selected>-- Pilih Salah Satu --</option>
                            <option value="PRIA">Pria</option>
                            <option value="PEREMPUAN">Perempuan</option>
                            <option value="ANAK-ANAK">Anak-anak</option>
                        </select>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label mb-0">Harga</label>
                        <textarea class="form-control" rows="2" name="harga"></textarea>
                    </div>
                </div>
                <div class="col-md-6 ms-auto">
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Stok</label>
                        <textarea class="form-control" rows="1" name="quantity"></textarea>
                    </div>
                    <div class="mb-4 d-md-flex align-items-center">
                        <label class="form-label">Stok Out</label>
                        <textarea class="form-control" rows="1" name="quantity_out"></textarea>
                    </div>
                    <div>
                        <div class="mb-4 d-md-flex align-items-center">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="formFile" name="foto" accept="image/*">
                        </div>
                        <div class="mb-4">
                            <img id="preview" alt="Preview Gambar" class="img-preview">
                        </div>
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog"
                            aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img id="modalImage" src="#" class="img-fluid" alt="Gambar Preview">
                                    </div>
                                </div>
                            </div>
                        </div>
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
