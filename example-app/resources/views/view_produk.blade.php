@extends('layout.mains')
@section('title', 'Produk')

@section('content')
<div class="alert alert-info text-center">
    <p>Selamat datang di halaman produk kami!</p>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <img src="{{ url('images/oli.jpg') }}" alt="Gambar Oli" class="img-fluid">
    </div>

    <div class="col-md-6 mb-4">
        <img src="{{ url('images/kursi.jpg') }}" alt="Gambar Kursi" class="img-fluid">
    </div>

    <div class="col-md-6 mb-4">
        <img src="{{ url('images/kaca.jpg') }}" alt="Gambar Kaca Mobil" class="img-fluid">
    </div>
  
    <div class="col-md-6 mb-4">
      <img src="{{ url('images/velg.jpg') }}" alt="Gambar Velg Mobil" class="img-fluid">
  </div>
</div>

<div class="site-section" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h1 class="text-black serif text-uppercase mb-4">Oli Mobil</h1>
                <p class="text-black mb-5">
                    Oli berkualitas adalah kunci untuk menjaga performa mesin kendaraan Anda. Kami menyediakan oli terbaik untuk berbagai jenis kendaraan, memastikan mesin tetap optimal, tahan lama, dan efisien. Pilih oli kami untuk perawatan kendaraan yang maksimal.
                </p>
            </div>

            <div class="col-md-6 mb-5">
                <h1 class="text-black serif text-uppercase mb-4">Kursi Mobil</h1>
                <p class="text-black mb-5">
                    Kursi yang nyaman dan ergonomis adalah elemen penting untuk menciptakan ruang yang produktif. Kami menawarkan kursi dengan desain modern, bahan berkualitas, dan kenyamanan maksimal untuk kebutuhan rumah atau kantor Anda.
                </p>
            </div>

            <div class="col-md-6 mb-5">
                <h1 class="text-black serif text-uppercase mb-4">Kaca Mobil</h1>
                <p class="text-black mb-5">
                    Kaca mobil berkualitas tinggi untuk memastikan keamanan dan kenyamanan berkendara. Kami menyediakan kaca dengan material tahan lama dan desain presisi untuk berbagai jenis kendaraan.
                </p>
            </div>

            <div class="col-md-6 mb-5">
                <h1 class="text-black serif text-uppercase mb-4">Velg Mobil</h1>
                <p class="text-black mb-5">
                    Velg mobil dengan desain stylish dan material berkualitas. Tersedia berbagai pilihan untuk meningkatkan tampilan dan performa kendaraan Anda.
                </p>
            </div>
        </div>

        <h4 class="text-black mb-3">Produk Unggulan Kami</h4>
        <p class="text-black">
            Kami menyediakan berbagai produk berkualitas tinggi untuk memenuhi kebutuhan Anda:
        </p>
        <ul class="text-black">
            <li>Oli mesin berkualitas untuk kendaraan Anda.</li>
            <li>Kursi ergonomis dengan desain modern.</li>
            <li>Kaca mobil berkualitas tinggi untuk kenyamanan berkendara.</li>
            <li>Velg mobil dengan desain stylish dan performa tinggi.</li>
            <li>Produk lainnya yang mendukung gaya hidup dan kebutuhan harian Anda.</li>
        </ul>

        <h4 class="text-black mb-3">Daftar Harga Produk</h4>
        <table class="table table-bordered text-black">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Oli Mobil</td>
                    <td>Oli berkualitas tinggi untuk berbagai jenis kendaraan.</td>
                    <td>Rp 100.000</td>
                </tr>
                <tr>
                    <td>Kursi Mobil</td>
                    <td>Kursi ergonomis dengan desain modern dan bahan berkualitas.</td>
                    <td>Rp 500.000</td>
                </tr>
                <tr>
                    <td>Kaca Mobil</td>
                    <td>Kaca mobil berkualitas tinggi untuk keamanan dan kenyamanan.</td>
                    <td>Rp 300.000</td>
                </tr>
                <tr>
                    <td>Velg Mobil</td>
                    <td>Velg mobil dengan desain stylish dan material berkualitas.</td>
                    <td>Rp 800.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
