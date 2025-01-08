@extends('layout.main')
@section('title', 'Home')

@section('content')
<div class="alert alert-info text-center">
    <p>Selamat datang di halaman Bengkel Kami!</p>
</div>

<div class="row mb-4">
    <div class="col-md-6">
        <img src="{{ url('images/bengkel.jpg') }}" alt="Gambar Bengkel" class="img-fluid">
    </div>
</div>

<div class="site-section" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h1 class="text-black serif text-uppercase mb-4">Visi</h1>
                <p class="text-black mb-5">
                    Visi bengkel mobil adalah pandangan jangka panjang yang diinginkan atau harapan yang ingin dicapai oleh bengkel tersebut di masa depan. Hal ini mencakup aspek-aspek penting seperti nilai inti, pencapaian, dan dampak yang diharapkan dari bengkel. Visi ini membantu tim agar fokus pada tujuan bersama untuk mencapai keberhasilan jangka panjang.
                </p>
                <h1 class="text-black serif text-uppercase mb-4">Misi</h1>
                <ul class="text-black">
                    <li>Pemahaman identitas bisnis</li>
                    <li>Menganalisis lingkungan bisnis</li>
                    <li>Definisi misi secara nyata</li>
                    <li>Periode pembaruan berkala</li>
                    <li>Komunikasi dan dukungan</li>
                </ul>
            </div>
        </div>

        <h4 class="text-black mb-3">Bengkel Kami Menyediakan</h4>
        <p class="text-black">
            Bengkel mobil adalah tempat yang menyediakan layanan perbaikan dan pemeliharaan mobil. Sebagai tempat yang sangat penting dalam dunia otomotif, bengkel mobil memiliki berbagai tugas yang perlu dilakukan untuk menjaga kinerja dan keandalan kendaraan. Berikut adalah tugas umum yang dilakukan di bengkel mobil:
        </p>
        <ul class="text-black">
            <li>Mendeteksi dan mendiagnosis masalah teknis pada mobil.</li>
            <li>Mengganti atau memperbaiki komponen yang rusak atau aus pada mobil, seperti rem, suspensi, atau sistem kelistrikan.</li>
            <li>Mengganti oli dan filter pada mesin mobil serta melakukan servis rutin lainnya untuk menjaga performa mobil.</li>
            <li>Mengatur dan menyelaraskan sistem kemudi dan suspensi kendaraan.</li>
            <li>Melakukan perawatan dan perbaikan pada sistem pendingin, termasuk sistem pendingin mesin dan AC mobil.</li>
            <li>Melaksanakan proses perawatan pada sistem transmisi dan kopling mobil untuk memastikan kinerjanya yang optimal.</li>
            <li>Memperbaiki kerusakan pada sistem kelistrikan mobil, seperti masalah pada sistem pengisian daya atau pengapian.</li>
        </ul>
    </div>
</div>
@endsection
