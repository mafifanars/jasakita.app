@extends('layouts.main')

@section('pages')

    {{-- Beranda --}}
    <section id="beranda" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>Layanan Jasa<br>Pekerja Paruh Waktu <span>Terbaik!</span></h2>
                    <h5>Kerja Cepat - Harga Pas - <span>Jasa</span><span class="blue">Kita</span> Solusinya.</h5>
                    <div>
                        <a href="#about" class="btn-get-started scrollto"><i class="fa-brands fa-google-play"></i> Google Play</a>
                    </div>
                </div>
                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="img/mockup.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Beranda --}}

    <main id="main">

        {{-- Tentang --}}
        <section id="tentang" class="section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="img/about-img.png" height="380px" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content">
                            <h2>Tentang Kami</h2>
                            <h3>Layanan Jasa Pekerja Paruh Waktu.</h3>
                            <p><i class="ion-android-checkmark-circle"></i> JasaKita merupakan aplikasi pelayanan jasa pekerja paruh waktu untuk memenuhi kebutuhan rumah tangga dan meningkatkan ekonomi masyarakat.</p>
                            <p><i class="ion-android-checkmark-circle"></i> Aplikasi JasaKita memudahkan pengguna mendapatkan pekerjaan secara paruh waktu dan mencari layanan jasa pekerja paruh waktu untuk kebutuhan rumah tangga dengan mudah dan efisien.</p>
                            <p><i class="ion-android-checkmark-circle"></i> JasaKita mengutamakan kemudahan, kenyamanan, dan keamanan kepada penggunanya.</p>
                            <!-- <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- Akhir Tentang --}}

        {{-- Keunggulan --}}
        <section id="keunggulan" class="#section-bg">
            <div class="container">
                <header class="section-header">
                    <h3>Keunggulan</h3>
                    <p>Mengapa harus memilih JasaKita?</p>
                </header>
            
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="">Pendaftaran Mudah</a></h4>
                            <p class="description">Nikmati mudahnya registrasi online sebagai konsumen dan pekerja. Dapatkan dua keuntungan sekaligus dalam satu aplikasi JasaKita</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Paruh Waktu</a></h4>
                            <p class="description">JasaKita memfasilitasi para pekerja untuk dapat bekerja secara paruh waktu serta memudahkan konsumen yang sedang mencari jasa.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
                            <h4 class="title"><a href="">Tawarkan Harga</a></h4>
                            <p class="description">JasaKita menguntungkan sesama pengguna, melalui penawaran harga oleh pekerja yang bebas dipilih oleh konsumen.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
                            <h4 class="title"><a href="">Kebebasan Memilih</a></h4>
                            <p class="description">JasaKita mengizinkan pengguna baik konsumen ataupun pekerja bebas memilih tawaran terbaik dari segi harga, rating, dan lokasi.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="">Data Mitra Terautentikasi</a></h4>
                            <p class="description">Untuk menjaga keamanan JasaKita menerapkan fitur fingerprint untuk pengecekan autentikasi keaslian data pekerja sebelum bekerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Akhir Keunggulan --}}

        {{-- Layanan --}}
        <section id="layanan" class="section-bg">
            <div class="container">
                <header class="section-header">
                    <h3 class="section-title">Layanan</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="layanan-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-app">Rumah Tangga</li>
                            <li data-filter=".filter-card">Supir</li>
                            <li data-filter=".filter-web">Servis Elektronik</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Cuci Pakaian</h4>
                                <p class="description">Mencuci pakaian terasa sangat mudah, hitungan harga per pcs, dan dapatkan tawaran harga terbaik dari mitra.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Setrika Pakaian</h4>
                                <p class="description">Jasa setrika pakaian, hitungan harga per pcs, kerapihan terjamin, dan harga dapat ditawarkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Membersihkan Rumah</h4>
                                <p class="description">Membersihkan ruangan yang ada di rumah, tambahkan catatan bila perlu, dan tawar harga yang pas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa BabySitter</h4>
                                <p class="description">BabySitter harian lebih mudah didapatkan. Data mitra terverifikasi. Kerja nyaman, keluarga aman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Tukang Kebun</h4>
                                <p class="description">Pembersihan menyeluruh area kebun. Sesuaikan keinginan, pilih durasi waktu, dan tambahkan catatan bila perlu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-app" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Memasak</h4>
                                <p class="description">Tidak perlu memikirkan menu makanan setiap hari, JasaKita hadir menyediakan jasa memasak harian.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-web" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Servis AC</h4>
                                <p class="description">Jasa pencucian, pengecekan, dan perbaikan AC dengan sekali klik pada aplikasi JasaKita.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-web" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Servis TV</h4>
                                <p class="description">Jasa pengecekan, dan perbaikan TV. Penambahan alat eksternal TV dengan pekerja yang berpengalaman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-web" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Servis HP</h4>
                                <p class="description">Menampung semua keluhan customer mengenai kerusakan handphone, mitra menuju lokasi dan segera memperbaiki.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-card" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Supir Mobil</h4>
                                <p class="description">Supir memiliki pengalaman mengemudi serta selalu memperhatikan kenyamanan dan keamanan penumpang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp portfolio-item filter-card" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="box-header">
                                <img src="img/icon.png" alt="">
                            </div>
                            <div class="box-footer">
                                <h4 class="title">Jasa Supir Truck</h4>
                                <p class="description">Supir kami memiliki catatan perjalanan lintas yang terjamin, kamu dapat memilih durasi waktu pengantaran sesuka hati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- AKhir Layanan --}}

        {{-- Tim --}}
        <section id="team" class="#section-bg">
            <div class="container">
                <div class="section-header">
                    <h3>Tim JasaKita</h3>
                    <p></p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="member">
                            <img src="img/tim/ceo.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Mhd Afifan Aly R Saragih</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="img/tim/proman.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Ridha Arrahmi</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="img/tim/acct.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Jernih</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="img/tim/cto.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>M D Arbani A Dalimunthe</h4>
                                    <span>Chief Technology Officer</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Akhir Tim --}}

    </main>

@endsection