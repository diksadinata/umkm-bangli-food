@extends('layouts.template')

@section('content')
<style>
    .img-box {
        width: 176px;
        height: 170px;
        /* border: solid red; */
    }

    .modified-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    

/* rating */

.rating-css div {
    color: #ffe400;
    font-size: 5px;
    font-family: sans-serif;
    font-weight: 8;
    text-align: center;
    text-transform: uppercase;
    padding: 10px 0;
}

.rating-css input {
    display: none;
}

.rating-css input+label {
    font-size: 20px;
    text-shadow: 1px 1px 0 #8f8420;
    cursor: pointer;
}

.rating-css input:checked+label~label {
    color: #ffe400;
}

.rating-css label:active {
    transform: scale(0.8);
    transition: 0.3s ease;
}


</style>

{{-- <div class="promosi pt-3 pb-3">
    <div class="container text-center blink_me">
       
    </div>
</div> --}}
<!-- ** Our Team Area Starts ** -->
<section class="our-team">
    <div class="container">
        <div class="row">
                <h4 class="mb-4"><b>{{ $edit->nama_kategori }}</b></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ url_images('gambar', $edit->gambar) }}" class="img-fluid w-100 mb-3">
                        <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-8 detail-produk">
                    
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Nama restouran       :</b></div>
                            <div class="col-sm-8">
                                <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}">
                                    {{ $edit->nama_kategori }}
                                </a>
                            </div>
                        </div>
                        <!-- <div class="row mt-3">
                            <div class="col-sm-4"><b>Kecamatan :</b></div>
                            <div class="col-sm-8">
                                <a class="text-produk" href="{{ url('kategori') }}">
                                    {{ $edit->nama_restoran }}
                                </a>
                            </div>
                        </div> -->
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Menu Makanan :</b></div>
                            <div class="col-sm-8"><?= $edit->nama_produk; ?></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Harga jual :</b></div>
                            <div class="col-sm-8 text-success">
                                <h4><b>Rp<?= number_format($edit->harga_jual); ?>,-</b></h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Deskripsi :</b></div>
                            <div class="col-sm-8"><?= $edit->deskripsi; ?></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Lokasi :</b></div>
                            <div class="col-sm-8"><?= $edit->lokasi; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4 text-center"><b>Lihat Lainya</b></h4>
            </div>
        </div>
    </div>
</div>

<section class="our-team">
    <div class="container">
        <div class="row">
        @forelse($kategori as $r)
            <div class="col-sm-3 mb-3 d-none d-lg-block">
                <div class="col-lg-10">
                    <!-- <div class="section-heading"> -->
                    <div class="col-lg-200">
                        <div class="team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <div class="main-border-button">
                                        <a href="{{ url('kategori/'.$r->id) }}">Lihat detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-box">
                                <img src="{{ url_images('gambar', $r->foto) }}" width="120px" height="165px">
                                </div>
                                
                            </div>
                            
                        </div>
                        <h6 class="">{{($r->nama_kategori)}} </h6>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            @endforeach
            </div>
    </div>
</section>

@endsection
@section('javascript')
@endsection
