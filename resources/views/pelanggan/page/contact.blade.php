@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos est inventore labore possimus. Quidem ipsum ullam doloribus iste! Fuga, maiores et quidem totam sapiente architecto dicta ut eius quaerat dolore a ab voluptatum? A maxime incidunt praesentium illum, cum, pariatur at aliquam quam porro nobis modi commodi ea consequatur rem magni quis. Ipsa dolores neque quidem suscipit maxime rem voluptatum perferendis dicta odio ab ratione veritatis atque velit vel, soluta repudiandae error quasi. Fuga a voluptatum qui voluptates ullam quasi dolorum ab ratione sit molestiae. Illo, quo beatae velit consequatur culpa eligendi provident magnam non molestias enim ullam omnis recusandae!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique exercitationem obcaecati iusto, culpa eos sed deleniti numquam maxime. Molestias, dignissimos!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore explicabo consectetur iure, doloremque corporis deleniti vel obcaecati ab nostrum esse ullam eius nulla alias laudantium tempora eveniet vitae corrupti veniam?
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/image/profil.jpg')}}" style="width: 100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5"> + 300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-home fa-2x"></i>
            <p class="m-0 fs-5"> + 500 Seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-shirt fa-2x"></i>
            <p class="m-0 fs-5"> + 300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2"> Contact Us</h4>
    <hr class="mb-5">
    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
           <div class="card">
                <div class="card-header text-center">
                     <h4>Kritik dan Saran</h4>
                </div>
                <div class="card body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda untuk aplikasi kami ini agar kami dapat memberikan apa yang menjadi kebutuhan anda dan kami dapat berkembang lagi</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label"> Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="" placeholder="Masukan email anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label"> Pesan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                    </div>
                </div>
            <button class="btn btn-primary mb-2 mt-4 w-100">Kirim Pesan</button>

           </div>
        </div>
    </div>
@endsection