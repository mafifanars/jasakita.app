@extends('layouts.main')

@section('pages')
<section id="faq">
    <div class="container">
        <header class="section-header mt-5">
            <h3>Tanya dan Jawab</h3>
            <p>Tanya dan Jawab untuk mitra (pekerja)</p>
        </header>

        <div class="row portfolio-container col-md-6 col-lg-12 mb-5">
            <ul id="faq-list" class="wow fadeInUp col-lg-12 portfolio-item filter-app mb-5">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Bagaimana cara saya bergabung menjadi mitra JasaKita? <i class="ion-android-remove"></i></a>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                            - Registrasi > isi data <br>
                            - Lengkapi syarat <br>
                            - Verifikasi <br>
                            - Persetujuan
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq2">Jika saya mendapat rate/ulasan negatif, apakah bisa dihapus?<i class="ion-android-remove"></i></a>
                    <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>
                        Sayangnya, peringkat negatif tidak dapat diedit atau dihapus. Ini karena peringkat tersebut mewakili pendapat yang subjektif dari penumpang. Mereka harus dihargai.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq3">Bagaimana cara mencairkan dana?<i class="ion-android-remove"></i></a>
                    <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>
                            Ketentuan pencairan Dompet Tunai: <br>
                            <span class="ml-3">- Wajib memiliki rekening bank yang terdaftar di JasaKita</span> <br>
                            <span class="ml-3">- Nominal pencairan minimal: Rp30.000 (Belum termasuk biaya admin)</span> <br>
                            <span class="ml-3">- Nominal pencairan maksimal sekali tarik: Rp1.000.000</span> <br>
                            <span class="ml-3">- Tidak bisa bagi Mitra yang melanggar Kode Etik</span> <br>
                            (contoh: Mitra menggunakan bank BCA, biaya admin pencairan adalah Rp500. Sehingga minimal pencairan yang dapat dilakukan adalah Rp20.500)
                        </p>
                    </div>
                </li>
                <li class="mb-5">
                    <a data-toggle="collapse" class="collapsed" href="#faq4">Berapa potongan komisi orderan JasaKita dari mitra?<i class="ion-android-remove"></i></a>
                    <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                            Potongan komisi orderan adalah 5% dari setiap jenis layanan Anda bekerja. <br>
                            (Ilustrasi: Mitra menyelesaikan orderan Jasa cuci AC (Service) dengan tarif Rp60.000. Maka potongan komisi yang dikenakan adalah: Rp60.000 x 5% = Rp3.000)
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection