@extends('layouts.main')

@section('title', 'JasaKita | Bantuan Pemesan')

@section('pages')

{{-- Title --}}
<section id="subpage-title" class="section-bg" style="padding-bottom: -50px;">

    <div class="container">
        <header class="section-header">
            <h3>Tanya dan Jawab</h3>
            <p>Tanya dan Jawab untuk pemesan</p>
        </header>
    </div>

</section>
  
{{-- FAQ --}}
<section id="faq" style="margin-top: -50px;">
    <div class="container">
        <div class="row portfolio-container col-md-6 col-lg-12 mb-5">
            <ul id="faq-list" class="wow fadeInUp col-lg-12 portfolio-item filter-app">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Apakah layanan JasaKita ada di daerah saya? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                            Sampai saat ini, kami menyediakan layanan di Kota Medan dan sekitarnya dengan rencana untuk ekspansi di masa depan.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq2">Berapa lama waktu yang dibutuhkan untuk menunggu pekerja sampai ke lokasi?<i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>
                            Waktu maksimal yang dibutuhkan pekerja untuk sampai ke lokasi setelah anda melakukan pemesanan adalah 45 menit karena pekerja akan membutuhkan waktu untuk mempersiapkan dan melakukan perjalanan ke lokasi Anda. Sistem kami akan mencoba mencocokkan Anda dengan pekerja terdekat yang tersedia untuk menghindari penundaan.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq3">Bagaimana saya tahu bahwa pesanan saya telah berhasil?<i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>
                            Setelah Anda melakukan pemesanan, sistem kami akan menyimpan pemesanan Anda dan kemudian secara otomatis mencoba mencari pekerja yang tersedia di wilayah Anda. Setelah seorang pekerja ditemukan, Anda akan diberitahu melalui notifikasi dan status pemesanan Anda akan berubah.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq4">Bisakah saya mengubah alamat setelah pemesanan?<i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                            Tidak, mohon maaf. Setelah melakukan pemesanan, Anda tidak dapat mengubah alamat pemesanan Anda.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq5">Bagaimana jika pekerja tidak hadir?<i class="ion-android-remove"></i></a>
                    <div id="faq5" class="collapse" data-parent="#faq-list">
                        <p>
                            Jika Pekerja  tidak dapat hadir, Anda atau Pekerja dapat membatalkan pesanan.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq6">Apakah saya harus berada dirumah selama proses layanan berlangsung?<i class="ion-android-remove"></i></a>
                    <div id="faq6" class="collapse" data-parent="#faq-list">
                        <p>
                            Kami menyarankan Anda harus hadir pada saat memesan layanan  sehingga dapat memberikan instruksi dan akses ke area Anda.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq7">Dapatkah saya mempercayai pekerja JasaKita?<i class="ion-android-remove"></i></a>
                    <div id="faq7" class="collapse" data-parent="#faq-list">
                        <p>
                            Tentu sangat bisa dipercaya, karena pekerja JasaKita bekerja secara profesional dan berpengalaman dibidangnya. Untuk memastikan kinerja berkualitas tinggi secara konsisten, pekerja harus melalui proses rekrutmen dan seleksi. Kami juga memberikan arahan dan mengevaluasi pekerja secara berkelanjutan berdasarkan feedback dan rating dari pelanggan. Feedback Anda sangat penting bagi kami!
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq8">Bagaimana saya bisa mendapatkan up to date info mengenai berita JasaKita, promosi, dan cakupan area?<i class="ion-android-remove"></i></a>
                    <div id="faq8" class="collapse" data-parent="#faq-list">
                        <p>
                            Anda dapat mengikuti akun sosial media Facebook dan Instagram kami untuk berita terbaru dan area cakupan. Halaman media sosial kami juga difokuskan pada peningkatan layanan yang lebih aman dan juga terus-menerus memberikan tips dan trik yang bermanfaat bagi Anda.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection