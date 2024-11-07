@extends('layout.main')
@section('title', 'home')

@section('content')
<div class="alert alert-info text-center">
  </div>
    <div class="col-mb-6">
        <img src="{{url('images')}}/bengkel.jpg" width="50%" height="200px">
    </div>

    <div class="site-section" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <h1 class="text-black serif text-uppercase mb-4">VISI</h1>
              <p class="text-black mb-5">justify-content-between.Visi bengkel mobil adalah pandangan jangka panjang yang diinginkan atau harapan yang ingin dicapai oleh bengkel tersebut di masa depan. Hal ini mencakup aspek-aspek penting seperti nilai inti, pencapaian, dan dampak yang diharapkan dari bengkel. Visi ini membantu tim agar fokus pada tujuan bersama untuk mencapai keberhasilan jangka panjang.</p>
            <h1 class="text-black serif text-uppercase mb-4">MISI</h1>
            <ul>
              <li>Pemahaman identitas bisnis</li>
              <li>Menganalisis lingkungan bisnis</li>
              <li>Definisi misi secara nyata</li>
              <li>Periode pembaruan berkala</li>
              <li>Komunikasi dan dukung</li>
            </ul>
          
          <div class="col-md-4">
            {{-- <div class="testimonial bg-white h-100"> --}}
              <blockquote class="mb-3">
                
              <div class="d-flex align-items-center vcard">
                <div class="vcard-text">
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            {{-- <div class="testimonial bg-white h-100"> --}}
              <blockquote class="mb-3">
                <div class="d-flex align-items-center vcard">
                <div class="vcard-text">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <h4>Bengkel Kami menyediakan </h4>
    Bengkel mobil adalah tempat yang menyediakan layanan perbaikan dan pemeliharaan mobil. Sebagai tempat yang sangat penting dalam dunia otomotif, bengkel mobil memiliki berbagai tugas yang perlu dilakukan untuk menjaga kinerja dan keandalan kendaraan.
    Berikut adalah tugas umum yang dilakukan di bengkel mobil
    </p>
    <ul>
      <ol>Mendeteksi dan mendiagnosis masalah teknis pada mobil.</ol>
      <ol>Mengganti atau memperbaiki komponen yang rusak atau aus pada mobil, seperti rem, suspensi, atau sistem kelistrikan.</ol>
      <ol>Mengganti oli dan filter pada mesin mobil serta melakukan servis rutin lainnya untuk menjaga performa mobil.</ol>
      <ol>Mengatur dan menyelaraskan sistem kemudi dan suspensi kendaraan.</ol>
      <ol>Melakukan perawatan dan perbaikan pada sistem pendingin, termasuk sistem pendingin mesin dan AC mobil.</ol>
      <ol>Melaksanakan proses perawatan pada sistem transmisi dan kopling mobil untuk memastikan kinerjanya yang optimal.</ol>
      <ol>Memperbaiki kerusakan pada sistem kelistrikan mobil, seperti masalah pada sistem pengisian daya atau pengapian.</ol>
    </ul>

@endsection