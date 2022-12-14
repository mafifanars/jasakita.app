@if(Session::has('status'))
    <script>
        alert("{{Session::get('status')}}");
    </script>
@endif
<footer id="footer" class="#section-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-info">
                                <a href="#header" class="scrollto"><img src="img/logo1.png"width="200px" alt="" class="img-fluid mb-2"></a>
                                <p>JasaKita mengutamakan kemudahan, kenyamanan, dan keamanan kepada penggunanya.</p>
                            </div>

                            <div class="footer-links">
                                <h4>Kontak Kami</h4>
                                <p>
                                Jalan Dr. T. Mansur Nomor 9,<br>
                                Padang Bulan, Kec. Medan Baru<br>
                                Kota Medan, Sumatera Utara <br>
                                <strong>Phone:</strong> <a href="tel:+62 821-6269-5540">+62 821-6269-5540</a><br>
                                <strong>Email:</strong> <a href="mailto:official.jasaskita@gmail.com">official.jasakita@gmail.com</a><br>
                                </p>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Tautan Cepat</h4>
                                <ul>
                                <li><a href="/#beranda">Beranda</a></li>
                                <li><a href="/#tentang">Tentang kami</a></li>
                                <li><a href="/#keunggulan">Keunggulan</a></li>
                                <li><a href="/#layanan">Layanan</a></li>
                                <li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                                <li><a href="/syarat-ketentuan">Syarat dan Ketentuan</a></li>
                                </ul>
                            </div>
                        
                            <div class="social-links">
                                <a href="https://play.google.com/store/apps/details?id=com.app.jasakita.developer" target="_blank" class="linkedin"><i class="fa-brands fa-google-play"></i></a>
                                <a href="https://www.instagram.com/jasakita.app" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="https://wa.me/6282162695540" target="_blank" class="twitter"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100084914963719" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form">  
                        <h4>Beri kami masukan</h4>
                        <p>Masukan dari anda dapat membantu kami dalam mengembangkan aplikasi menuju lebih baik.</p>

                        <form action="/feedback" method="post" id="feedback-form"  role="form" class="contactForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 4 karakter" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Silakan masukkan email yang benar" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 8 karakter subjek" />
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Silakan tuliskan sesuatu untuk kami" placeholder="Pesan / Masukan"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div id="sendmessage">Pesan kamu berhasil terkirim. Terima kasih!</div>
                            <div id="errormessage"></div>

                            <div class="text-center"><button type="submit" title="Send Message">Kirim Pesan</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
        &copy; <strong>Tim JasaKita</strong>.
        </div>

        <div class="credits">
            Didesain oleh <a href="https://www.instagram.com/jasakita.app" target="_blank">Tim JasaKita</a>
        </div>
    </div>
</footer>