<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fakultas Ekonomi dan Bisnis Islam</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="back/pluto/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="back/pluto/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="back/pluto/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="back/pluto/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="back/pluto/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="back/pluto/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="back/pluto/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="back/pluto/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="back/pluto/js/semantic.min.css" />
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="front/master/images/logo2.png" alt="#" />
                     </div>
                  </div>

                  @if(session()->has('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                  @endif

                  <div class="login_form">
                     <form action="/register" method="post">
                        @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Nama</label>
                              <input type="text" name="name" placeholder="Nama" id="name" class="@error('name') is-invalid @enderror" required value="{{ old('name') }}"/>
                              @error('name')
                              <div class="invalid-feedback">
                                 {{ $message }}
                              </div>
                              @enderror
                           </div>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder="E-mail" id="email" required value="{{ old('email') }}"/>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" id="password" required value="{{ old('password') }}" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Register</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="back/pluto/js/jquery.min.js"></script>
      <script src="back/pluto/js/popper.min.js"></script>
      <script src="back/pluto/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="back/pluto/js/animate.js"></script>
      <!-- select country -->
      <script src="back/pluto/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="back/pluto/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>