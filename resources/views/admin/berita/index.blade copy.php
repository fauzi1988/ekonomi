@extends('admin.back_layouts.main')

@section('container')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Dashboard/Berita</h2>
                 </div>
              </div>
           </div>
        </div>
        
     </div>

     
     <!-- Tabel -->
     <div id="overviews" class="section wb">
      <div class="container">
        @if(session()->has('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
        @endif
        <a href="berita_c" class="btn btn-primary mb-3">Buat Berita Baru</a>
          <table class="table table-striped table-hover text-dark">
              <caption>Daftar Berita</caption>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">deskripsi</th> 
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>  
                @foreach ($beritas as $berita)
                <tr class="text-dark">
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $berita->judul }}</td>
                  <td>{!! Str::limit($berita->body, 100) !!}</td>
                  <td>
                    <a href="#"><i class="fa fa-eye btn btn-info"></i></a>
                    <a href="{{ route('berita.edit', $berita->id) }}"><i class="fa fa-edit btn btn-warning"></i></a>
                    <a href="{{ route('berita.delete', $berita->id) }}" onclick="return confirm('Apakah anda yakin ?')><i class="fa fa-close btn btn-danger"></i></a>
                    <form action="{{ route('berita.delete', $berita->id) }}" method="" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="fa fa-close btn btn-danger" onclick="return confirm('Apakah anda yakin ?')"></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>      
      </div><!-- end container -->
  </div><!-- end section -->

@endsection