@extends('front_layouts/main')

@section('container')

<div class="all-title-box">
    <div class="container text-center">
        <h1>Kurikulum<span class="m_1">Fakultas Ekonomi dan Bisnis Islam</span></h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        <caption>Daftar Kurikulum</caption>
        <table class="table table-striped table-hover"> 
            <thead>
              <tr class="bg-success text-dark">
                <th scope="col">No</th>
                <th scope="col">Nama Kurikulum</th>
                <th scope="col">Prodi</th>
                <th scope="col">Download</th> 
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Kurikulum 2022</td>
                <td>Perbankan Syariah</td>
                <td><a href="#">Download</a></td>
              </tr>
              
            </tbody>
          </table>      
    </div><!-- end container -->
</div><!-- end section -->



@endsection