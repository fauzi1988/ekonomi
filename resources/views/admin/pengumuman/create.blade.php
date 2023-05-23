@extends('admin.back_layouts.main')

@section('container')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Dashboard Pengumuman</h2>
                 </div>
              </div>
           </div>
        </div>
        
     </div>
     <!-- end dashboard inner -->
     <div class="container">
        <div class="row">
            <div class="col-md-12">
               <form method="post" action="/admin/pengumuman" enctype="multipart/form-data">
                  @csrf
                    <!-- Judul input -->
                    <div class="form-outline mb-4 col-6">
                       <label class="form-label" for="form4Example1">Judul</label>
                       <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" required autofocus value="{{ old('judul') }}" />
                       @error('judul')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                       @enderror
                    </div>

                    <!-- Slug input -->
                    <div class="form-outline mb-4 col-6">
                     <label class="form-label" for="form4Example1">Slug</label>
                     <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug') }}"/>
                     @error('slug')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                     @enderror
                    </div>

                    <!-- File Image input -->
                    
                    <div class="form-outline mb-4 col-6">
                     <label class="form-label" for="form4Example1">Input Gambar</label>
                     <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" required"/>
                     @error('image')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                     @enderror
                    </div>

                    <!-- File input -->
                    
                    <div class="form-outline mb-4 col-6">
                     <label class="form-label" for="form4Example1">Input File</label>
                     <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" required"/>
                     @error('file')
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
                     <input id="body" type="hidden" name="body">
                     <trix-editor input="body"></trix-editor>
                    </div>

                    <!-- Penulis input -->
                    <div class="form-outline mb-4 col-6">
                        <label class="form-label" for="form4Example2">Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control @error('penulis') is-invalid @enderror" required/>
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