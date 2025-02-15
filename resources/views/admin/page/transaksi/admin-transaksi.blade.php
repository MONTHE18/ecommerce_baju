@extends('layout-admin')

@section('title', 'Kelola Transaksi | Toko Online')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/admin-products.css')}}">
@endsection


@section('sidebarContent')
<div class="m-4">
    <p class="jdl fs-4 mb-0">Pengelolaan Transaksi</p>
    <p class="fs-6 mb-0">Kelola dan atur semua transaksi terkait.</p>
    <div class="container-fluid mt-2 p-0">
        <div class="box d-flex">
            <nav class="py-2 align-content-center w-100">
                <div class="nav" id="nav-tab" role="tab">
                    <p class="text-tab m-0 fs-5 fw-semibold nav-link active mt-1" id="nav-webinar-tab" data-bs-toggle="tab" data-bs-target="#nav-webinar" role="tab" aria-controls="nav-webinar" aria-selected="true">Table Transaksi</p>
                    {{-- <p class="text-tab m-0 fs-5 fw-semibold nav-link mt-1" id="nav-campaign-tab" data-bs-toggle="tab" data-bs-target="#nav-campaign" role="tab" aria-controls="nav-campaign" aria-selected="false">Campaign</p> --}}
                    <form class="form-inline d-flex align-content-center my-2 gap-2 me-3 form-action">
                        <form action="{{route('admintransaksi')}}" method="GET">
                        <div class="search-container">
                            <img class="search-icon" src="{{asset('assets/image/search.png')}}" alt="search img" style="width: 20px; height:20px;">
                            <input class="inp-search h-100" type="teks" name="search" placeholder="Search..." 
                                value="{{request('search')}}">
                            </div>
                        </form>
                        <form action="{{route('admintransaksi')}}" method="GET">
                            <div class="filter-container m-2">
                                <button class="btn btn-1 btn-filter fw-semibold h-100" value="latest" name="sort_data" >Filter</button>
                                <img class="filter-icon" src="{{asset('assets/image/filter.png')}}" alt="filter img" style="width: 15px; height:17px;">
                            </div>
                        </form>
                        <a href="{{ route ('addtransaksi')}}"  type="button" class="btn btn-1 btn-warning fw-bold m-2" style="color: #060E7A;">Tambahkan Data</a>
                    </form>
                </div>
            </nav>
        </div>
        <div class="box-2 tab-content" id="tab-content">
            <div class="tab-pane fade show active" id="nav-webinar" role="tabpanel" aria-labelledby="content-event-tab">
                {{-- <div class="mt-1 ms-3">
                    <button class="count btn fw-bold px-4 py-0 font-small my-1"> Webinar</button>
                    <button class="count btn fw-bold px-4 py-0 font-small my-1">Campaign</button>
                </div> --}}
                <div class="mt-1 w-100 table-responsive mb-1">
                    <table class="w-100">
                        <tr class="fw-semibold text-center font-small" style="background-color: #1121B7; color: #FFFFFF; height: 47px;">
                            <th class="id">NO</th>
                            <th class="code_transaksi">Code Transaki</th>
                            <th class="total_qty">Total Quantity</th>
                            <th class="total_harga">Total Harga</th>
                            <th class="nama_customer">Nama Customer</th>
                            <th class="alamat">Alamat</th>
                            <th class="no_tlp">No Telp</th>
                            <th class="ekspedisi">Ekspedisi</th>
                            <th class="status">Status</th> 
                            <th class="action">Aksi</th> 
                            <th class="detail">
                                <img class="m-0 p-0" src="{{asset('assets/image/detail.png')}}" alt="img_detail" style="width: 18px; height: 18px ;">
                            </th>
                        </tr>
                        @foreach ($transaksi as $transaksi)
                                
                            <tr class="text-center">
                                <td>{{ $transaksi->id }}</td>
                                <td>{{ $transaksi->code_transaksi }}</td>
                                <td>{{ $transaksi->total_qty }}</td>
                                <td>{{ $transaksi->total_harga }}</td>
                                <td>{{ $transaksi->nama_customer }}</td>
                                <td>{{ $transaksi->alamat }}</td>
                                <td>{{ $transaksi->no_tlp }}</td>
                                <td>{{ $transaksi->ekspedisi }}</td>
                                <td> <span class="badge {{ $transaksi->status == 'Paid' ? 'bg-success' : 'bg-danger' }}">{{ $transaksi->status }}</span></td>
                                <td>
                                    <div class="inline d-flex justify-content-center align-items-center">
                                        <div class="edit-container d-flex align-items-center w-75">
                                            <img class="edit-icon" src="{{asset ('assets/image/pencil.png')}}" alt="edit_img">
                                            <a href="{{route ('edittransaksi', $transaksi->id)}}" class="btn btn-edit fw-bold p-0 m-0 ps-3 ms-1 pe-1">
                                                <p class="m-0 p-0 ps-1">Edit</p>
                                            </a>
                                        </div>
                                        <div class="d-flex align-items-center w-75 position-relative">
                                            <img class="trash-icon" src="{{ asset ('assets/image/trash.png')}}" alt="trash_img">
                                            <a href="{{route ('deletetransaksi', $transaksi->id)}}" class="btn btn-delete fw-bold p-0 m-0 w-100 me-1 ps-3 pe-1">
                                                <p class="m-0 p-0 ps-1">Hapus</p>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="btn" href="{{route ('detailtransaksi', $transaksi->id)}}">
                                        <img class="m-0 p-0" src="{{asset ('assets/image/detail-2.png')}}" alt="img_detail" style="width: 18px; height: 18px ; cursor:pointer;">
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                    </table>

                </div>
            </div> 
        </div>
    </div>
</div>

</div>
</div>

@endsection

@section('script')
<script>
    const statusTags = document.querySelectorAll('.status-event');
    statusTags.forEach((statusTag) => {
        const status = statusTag.textContent.trim()
        if (status === 'FINISH') {
            statusTag.style.backgroundColor = '#B4FAA5';
            statusTag.style.color = '#056331';
        } else if (status === 'ONGOING') {
            statusTag.style.backgroundColor = '#FFF2B8';
            statusTag.style.color = '#772B03';
        }
    })
</script>
@endsection

