
<!--Buat Camaba-->
<div class="row page-titles" style="border-radius: 0%">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" style="color: var(--primary)"><a href="dashboard"
                style="color: var(--primary)">Beranda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">HIMA INFORMATIKA</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-xl-7">
        <div class="card transparent-card">
            <div class="bootstrap-carousel">
                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('sipenmaru/images/benner(1).png') }}"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('sipenmaru/images/benner(2).png') }}"
                                alt="Second slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5">
        <div class="row">
            <div class="card transparent-card">
                <div class="widget-stat card bg-primary" style="border-radius: 0%">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-users"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Total Pendaftar</p>
                                <h3 class="text-white">200</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                </div>
                                <small>ditahun ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: -2.7rem">
            <div class="card transparent-card">
                <div class="widget-stat card bg-warning" style="border-radius: 0%">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Pendaftar Baru</p>
                                <h3 class="text-white">215</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                </div>
                                <small>ditahun ini</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
</div>
<div class="row">
    @foreach ($prodi as $x)
        <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
            <div class="card" style="border-radius: 0%;">
                    <div class="new-arrival-product">
                        <div class="new-arrivals-img-contnent">
                            <img class="img-fluid" src="{{ asset($x->foto_prodi) }}" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">{{$x->nama_prodi}}</h4></a>
                                <p>{{$x->jenjang_prodi}}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @endforeach
    {{-- <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%;">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/pendidikan.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Pendidikan</h4></a>
                            <p>Divisi 1</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/sdm.jpg') }}"
                            alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Sumber Daya Manusia</h4></a>
                                <p>Divisi 2</p>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/humas.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="ecom-product-detail.html"><h4 style="color: whitesmoke">Hubungan Masyarakat</h4></a>
                            <p>Divisi 3</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-sm-6" style="padding: 0px">
        <div class="card" style="border-radius: 0%">
                <div class="new-arrival-product">
                    <div class="new-arrivals-img-contnent">
                        <img class="img-fluid" src="{{ asset('sipenmaru/images/kwu.jpg') }}" alt="">
                        <div class="carousel-caption d-none d-md-block" >
                            <a href="ecom-product-detail.html"><h4  style="color: whitesmoke">Kewirausahaan</h4></a>
                            <p>Divisi 4</p>
                        </div>
                    </div>
                </div>
        </div>
    </div> --}}
</div>

<div class="row">
    <div class="card transparent-card">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="{{ asset('sipenmaru/images/pendaftaran.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="{{ asset('sipenmaru/images/brosur1.jpeg') }}" alt="" width="50">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="{{ asset('sipenmaru/images/brosur2.jp3g') }}" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                        <div class="custom-tab-1">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="#jpk" data-bs-toggle="tab"
                                                        class="nav-link active show">Persyaratan Umum</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="about-me" class="tab-pane fade active show">
                                                    <div class="profile-personal-info">
                                                        <br>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">1. Mahasiswa Aktif Universitas Teknokrat Indonesia</li>
                                                            <li class="list-inline-item">2. Merupakan Mahasiswa dari Prodi Informatika</li>  <br>
                                                            <li class="list-inline-item">3. Mengisi pendaftaran yang sudah disediakan</li> <br>
                                                            <li class="list-inline-item">4. Membayar uang pendaftaran sebesar 15.000 rupiah</li> <br>
                                                            <li class="list-inline-item">5. Include stiker saat wawancara</li> 
                                                        </ul>        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="modal fade" id="reviewModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="text-center mb-4">
                                    <img class="img-fluid rounded" width="78" src="images/avatar/1.jpg" alt="DexignZone">
                                </div>
                                <div class="mb-3">
                                    <div class="rating-widget mb-4 text-center">
                                        <!-- Rating Stars Box -->
                                        <div class="rating-stars">
                                            <ul id="stars">
                                                <li class="star" title="Poor" data-value="1">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Fair" data-value="2">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Good" data-value="3">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="Excellent" data-value="4">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                                <li class="star" title="WOW!!!" data-value="5">
                                                    <i class="fa fa-star fa-fw"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
                                </div>
                                <button class="btn btn-success btn-block">RATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>