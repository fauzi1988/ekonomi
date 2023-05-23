@extends('admin.back_layouts.main')

@section('container')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h6>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/berita_i">Berita</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Show Berita</li> 
                        </ol>
                      </nav>
                    </h6>
                 </div>
              </div>
           </div>
        </div>
        
     </div>
     <!-- end dashboard inner -->

        <div class="row text-dark">
            <div class="col-md-12">
                  @csrf
                    <!-- Judul input -->
                    <div class="form-outline mb-4 col-6">
                     {{ old('judul', $beritas->judul) }}
                    </div>

                    <!-- Slug input -->
                    <div class="form-outline mb-4 col-6">
                     {{ old('slug', $beritas->slug) }}
                    </div>

                    <!-- Body input -->

                    <div class="form-outline mb-4 col-10" >
                     {!! old('body', $beritas->body) !!}
                    </div>

                    <div class="form-outline mb-4 col-10" >
                     <img src="{{ asset('storage/' . $beritas->image) }}" alt="">
                    </div>

                    <!-- Penulis input -->
                    <div class="form-outline mb-4 col-6">
                     {{ old('penulis', $beritas->penulis) }}
                    </div>

                  
                  
                    <!-- Submit button -->
                    
            </div>
        </div>


     <script>
      const title = document.querySelector("#judul");
      const slug = document.querySelector("#slug");

      title.addEventListener("keyup", function() {
          let preslug = judul.value;
          preslug = preslug.replace(/ /g,"-");
          slug.value = preslug.toLowerCase();
      });
     </script>
@endsection