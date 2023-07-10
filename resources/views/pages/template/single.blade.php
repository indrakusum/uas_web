@extends('layout.app')
@section('container')
<div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              xiaomi 12 Lite
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">xiaomi</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <img src="images/hp11.jpg" alt="Image" class="img-fluid" />
                <img src="images/hp11.jpg" alt="Image" class="img-fluid" />
                <img src="images/hp11.jpg" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">Xiaomi 12 Lite</h2>
            <p class="text-black-50">
            Menggunkan layar jenis amoled dengan proteksi corning gorilla glass 5
            <p class="text-black-50"> menggunkan chipset Snapdragon 778G dengan skor antutu 53000</p>
            <p class="text-black-50">refresh rate layar 120 hz</p>
            <p class="text-black-50">charger 67 watt dengan waktu 30 menit</p>
            <p class="text-black-50"> memiliki kestabilan mesin 99% di tes menggunakan 3dmark wildlife stress test</p>
            <p class="text-black-50">memliki rata-rata suhu kerja di 38 drajat selsius</p>
            <p class="text-black-50">sudah bisa menggunakan jaringan 5G</p>
            <p class="text-black-50"> Ram 8GB LPDDR5X</p>
            <p class="text-black-50">Rom 256GB UFS 2.2</p>
            

            <div class="d-block agent-box p-5">
              <div class="img mb-4">
                <img
                  src="images/person_2-min.jpg"
                  alt="Image"
                  class="img-fluid"
                />
              </div>
              <div class="text">
                <h3 class="mb-0">Alicia Huston</h3>
                <div class="meta mb-3">Real Estate</div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ratione laborum quo quos omnis sed magnam id ducimus saepe
                </p>
                <ul class="list-unstyled social dark-hover d-flex">
                  <li class="me-1">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection