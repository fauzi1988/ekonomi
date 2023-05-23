@extends('admin.back_layouts.main')

@section('container')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Dashboard/Pengumuman</h2>
                 </div>
              </div>
           </div>
        </div>
        
     </div>
     <!-- Tabel -->
     <div id="overviews" class="section wb">
      <div class="container">
        <a href="/admin/pengumuman/create" class="btn btn-primary mb-3">Buat Pengumuman Baru</a>
          <table class="table table-striped table-hover text-dark">
              <caption>Daftar Pengumuman</caption>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">deskripsi</th> 
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>  
                
               @foreach ($pengumumans as $pengumuman)
               <tr class="text-dark">
                 <th scope="row">{{ $loop->iteration }}a</th>
                 <td>{{ $pengumuman->judul }}</td>
                 <td>{!! Str::limit($pengumuman->body, 300)  !!}</td>
                 <td>
                   <a href="#"><i class="fa fa-eye btn btn-info"></i></a>
                   <a href="/admin/pengumuman/{{ $pengumuman->id }}/edit"><i class="fa fa-edit btn btn-warning"></i></a>
                   <form action="/admin/pengumuman/{{ $pengumuman->id }}" method="post">
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