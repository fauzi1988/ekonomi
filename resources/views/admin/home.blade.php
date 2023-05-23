@extends('admin.back_layouts.main')

@section('container')
    <!-- dashboard inner -->
    <div class="midde_cont">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Dashboard</h2>
                 </div>
              </div>
           </div>
        </div>
        
     </div>
     <!-- end dashboard inner -->
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4 col-6">
                      <input type="text" id="form4Example1" class="form-control" />
                      <label class="form-label" for="form4Example1">Name</label>
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4 col-6">
                      <input type="email" id="form4Example2" class="form-control" />
                      <label class="form-label" for="form4Example2">Email address</label>
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4 col-7" >
                      <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                      <label class="form-label" for="form4Example3">Message</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4 col-2">
                        <button type="submit" class="btn btn-primary btn-block mb-4">Simpan</button>
                    </div>
                  
                  
                    <!-- Submit button -->
                    
                  </form>
            </div>
        </div>
     </div>
@endsection