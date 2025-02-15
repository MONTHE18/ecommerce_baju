<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <title>Toko Online | {{$title}} </title>
</head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #B7E0FF">
                <div class="container">
                  <a class="navbar-brand" href="/">Toko Murahhh</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-4">
                      <li class="nav-item">
                        <a class="nav-link  {{Request :: path() == '/' ? 'active' : '';}}" aria-current="page" href="{{ route ('Home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link   {{Request :: path() == 'shop' ? 'active' : '';}}" href="{{ route('shop')}}">Shop</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link   {{Request :: path() == 'contact' ? 'active' : '';}}" href="/contact">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-primary   {{Request :: path() == 'loginadmin' ? 'active' : '';}}" href="/loginpelanggan">Login</a>
                      </li>
                      
                    </ul>
                    {{-- <form class="d-flex gap-4 align-items-center" >
                        <button class="btn btn-primary" type="button" href="/loginpelanggan">Login | Register</button> --}}
                        <div class="notif">

                            <a href="/transaksi"  class="fs-5 ">
                                <i class="fa-solid icon-nav fa-bag-shopping"></i>
                            </a>
                            <div class="circle">10</div>
                        </div>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>