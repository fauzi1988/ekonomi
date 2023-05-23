@extends('front_layouts/main')

@section('container')

<div class="all-title-box">
    <div class="container text-center">
        <h1>Pengajar<span class="m_1">Fakultas Ekonomi dan Bisnis Islam</span></h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <table class="table table-striped table-hover">
            <caption>Daftar Pengajar</caption>
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Mata Kuliah Mayor</th>
                <th scope="col">Mata Kuliah Minor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Dr. Jasmin, S.Ag., MM</td>
                <td>Dasar-dasar Manajemen</td>
                <td>Manajemen Perbankan</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td> Dr. Rosita Alting, S.Ag., M.Ag.</td>
                <td> Bank dan Lembaga Keuangan Syari'ah </td>
                <td> Sejarah Pemikiran Ekonomi Syari'ah</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Sudin Yamani, S.Ag., MA.</td>
                <td>Pengantar Ekonomi Islam</td>
                <td>Bank dan LembagaKeuangan Syari'ah</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>r. Syaifudin, S.E., M.E.I.</td>
                <td>konomi Makro Islam</td>
                <td>anaiemen Resiko Bank Syari'ah</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Dr. Abd. RaufWajo,S.H.I.,M.Ag.</td>
                <td>Manajemen Perbankan Islam</td>
                <td>Pengantar Ekonomi Islam h</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Dr. Zainal Abidin Marasabessy, S.E., M.Sc.</td>
                <td>Manajemen Perbankan</td>
                <td>Manajemen Sumber Daya Manusia</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>aiful, S.E., M.Si.</td>
                <td>Manajemen Keuangan Svari'ah</td>
                <td>Sistem Informasi Perbankan Svari'ah</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Dr. Zainal Abidin Marasabessy, S.E., M.Sc.</td>
                <td>Manajemen Perbankan</td>
                <td>Manajemen Sumber Daya Manusia</td>
              </tr>
            </tbody>
          </table>      
    </div><!-- end container -->
</div><!-- end section -->



@endsection