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
                          <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
                        </ol>
                      </nav>
                    </h6>
                 </div>
              </div>
           </div>
        </div>
        
     </div>
     <!-- end dashboard inner -->
     <div class="container">
        <div class="row text-dark">
            <div class="col-md-12">
                <form method="POST" action="{{ route('berita.update', $beritas->id) }}">
                  @csrf
                    <!-- Judul input -->
                    <div class="form-outline mb-4 col-6">
                       <label class="form-label" for="form4Example1">Judul</label>
                       <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" required autofocus value="{{ old('judul', $beritas->judul) }}" />
                       @error('judul')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                       @enderror
                    </div>

                    <!-- Slug input -->
                    <div class="form-outline mb-4 col-6">
                     <label class="form-label" for="form4Example1">Slug</label>
                     <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug', $beritas->slug) }}"/>
                     @error('slug')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                    </div>

                    <!-- Body input -->

                    <div class="form-outline mb-4 col-10" >
                     <label class="form-label" for="form4Example3">Body</label>
                     @error('body')
                        <p class="text-danger">
                           {{ $message }}
                        </p>
                     @enderror
                     <input id="body" type="hidden" name="body" value="{{ old('body', $beritas->body) }}">
                     <trix-editor input="body"></trix-editor>
                    </div>

                    <!-- Penulis input -->
                    <div class="form-outline mb-4 col-6">
                        <label class="form-label" for="form4Example2">Penulis</label>
                        <input type="text" name="penulis" id="penulis" value="{{ old('penulis', $beritas->penulis) }}" class="form-control @error('penulis') is-invalid @enderror" required/>
                        @error('penulis')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4 col-2">
                        <button type="submit" class="btn btn-info btn-block mb-4">Simpan</button>
                    </div>
                  
                  
                    <!-- Submit button -->
                    
                  </form>
            </div>
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