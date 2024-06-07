@extends('layouts.app')

@section('article', 'sportArticle')
@section('content')
 
 <!-- navbar -->



    <section class="container">
      <div class="featured-story mt-4">
        <div class="card">
          <img
            src="asset/Tokyo 2020 men's singles olympics winner🥉🇮🇩❤️.jpg"
            class="card-img-top"
            alt="Featured Image"
          />
          <div class="card-body">
            <span class="badge badge-primary">Web</span>
            <h5 class="card-title">
              Jadwal Indonesia Open 2024 Hari Ini: Duel Leo/Daniel Vs Fajar/Rian
            </h5>
            <p class="card-text">
              Sebanyak sembilan wakil Indonesia akan memainkan delapan
              pertandingan babak pertama Indonesia Open 2024 pada Rabu
              (5/6/2024). Ganda campuran Rehan Naufal Kusharjanto/Lisa Ayu
              Kusumawati bermain paling awal dengan melakoni match kedua.
            </p>
            <a href="detail.html" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>

      <div class="row top-stories my-4">
        <div class="col-md-8">
          <div class="card mb-4 d-flex flex-row">
            <img
              src="asset/Sejarah baru untuk sepak bola Indonesia_ Untuk….jpg"
              class="card-img-left"
              alt="Featured Image"
              style="width: 250px; object-fit: cover"
            />
            <div class="card-body">
              <h5 class="card-title">
                Hasil Indonesia Open 2024: Chico Dikalahkan Wakil Thailand
              </h5>
              <p class="card-text">
                Chico vs Kantaphon berlangsung di Istora Senayan, Selasa
                (4/6/2024) sore WIB. Chico kalah 16-21, 9- 21.
              </p>
              <a href="detail.html" class="btn btn-primary">Read more</a>
            </div>
          </div>

          <div class="card mb-4 d-flex flex-row">
            <img
              src="asset/2022 NBA Champions.jpg"
              class="card-img-left"
              alt="Featured Image"
              style="width: 250px; object-fit: cover"
            />
            <div class="card-body">
              <h5 class="card-title">
                Indonesia Open 2024: Ginting Disingkirkan Nishimoto di Babak
                Pertama
              </h5>
              <p class="card-text">
                Ginting vs Nishimoto berjalan ketat. Tunggal Indonesia kalah
                21-17, 11-21, 8-21.
              </p>
              <a href="detail.html" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="opinion">
            <h5>Opinion</h5>
            <ul class="list-unstyled">
              <li class="media my-3">
                <img
                  src="https://via.placeholder.com/64"
                  class="mr-3 rounded-circle"
                  alt="..."
                />
                <div class="media-body">
                  <h6 class="mt-0 mb-1">
                    Bootstrap is the best CSS framework, hands down
                  </h6>
                  by William Cole
                </div>
              </li>
              <li class="media my-3">
                <img
                  src="https://via.placeholder.com/64"
                  class="mr-3 rounded-circle"
                  alt="..."
                />
                <div class="media-body">
                  <h6 class="mt-0 mb-1">
                    Bootstrap is the best CSS framework, hands down
                  </h6>
                  by Ewan Rogers
                </div>
              </li>
              <!-- Add more opinions as needed -->
            </ul>
          </div>
        </div>
      </div>
    </section>
    @endsection