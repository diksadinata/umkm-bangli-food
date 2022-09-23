@extends('layouts.baru')
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
.page-heading {
    margin-top: 160px;
    margin-bottom: 30px;
    background-image: url(../images/products-page-heading.jpg);
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
}

.page-heading .inner-content {
    padding: 150px 0px;
    text-align: center;
}

.page-heading .inner-content h2 {
    font-size: 52px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 15px;
}

.page-heading .inner-content span {
    font-size: 16px;
    font-weight: 500;
    color: #fff;
    font-style: italic;
}

#products .section-heading {
    text-align: center;
    margin-bottom: 60px;
    margin-top: 80px;
}

#products .item {
    margin-bottom: 30px;
}

#products .item .thumb img {
    width: 100%;
    overflow: hidden;
}

#products .item .down-content {
    padding-top: 20px;
    position: relative;
    z-index: 3;
    background-color: #fff;
}

#products .item .down-content h4 {
    font-size: 22px;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 8px;
}

#products .item .down-content span {
    font-size: 18px;
    color: #a1a1a1;
    font-weight: 500;
    display: block;
}

#products .item .down-content ul.stars {
    position: absolute;
    right: 0;
    top: 20px;
}

#products .item .down-content ul.stars li {
    display: inline;
    font-size: 13px;
}

#products .item .thumb .hover-content {
    position: absolute;
    z-index: 2;
    text-align: center;
    bottom: -60px;
    width: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all .5s;
}


#products .item .thumb:hover .hover-content {
    bottom: 30px;
    opacity: 1;
    visibility: visible;
}

#products .item .thumb {
    position: relative;
}

#products .item .thumb .hover-content ul li {
    display: inline;
    margin: 0px 10px;
}

#products .item .thumb .hover-content ul li a {
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: inline-block;
    color: #2a2a2a;
    background-color: #fff;
}

#products .pagination {
    margin-top: 30px;
    margin-bottom: 40px;
}

#products .pagination ul {
    text-align: center;
    width: 100%;
}

#products .pagination ul li {
    display: inline;
    margin: 0px 5px;
}

#products .pagination ul li a {
    width: 44px;
    height: 44px;
    border: 1px solid #2a2a2a;
    display: inline-block;
    text-align: center;
    line-height: 44px;
    font-size: 14px;
    font-weight: 500;
    color: #2a2a2a;
}

#products .pagination ul li a:hover,
#products .pagination ul li.active a {
    background-color: #2a2a2a;
    color: #fff;
}


</style>

<h4 class="mb-4 text-center"><b>{{ $title }}</b></h4>
<img src="{{ asset('assets/images/cappe.jpg') }}" width="100%"  top="-50"
    >

<!-- ***** Preloader Start ***** -->
<section class="our-team">
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4 text-center"><b>Menu</b></h4>
            </div>
        </div>
    </div>
</div>

                @include('components.frontend.produk_list')
                
                <br>
                
                {{ $produk->links() }}
    </div>
</section>

<section class="our-team">
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4 text-center"><b>Rekomendasi</b></h4>
            </div>
        </div>
    </div>
</div>
    
    </div>
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
        
</section>





@endsection
@section('javascript')

@endsection