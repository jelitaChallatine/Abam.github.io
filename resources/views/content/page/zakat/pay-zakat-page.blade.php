@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('asset/image/zakat/kalkulator-zakat.png') }}" />
</head>
<body>
    <div class="bg-utama">
        <div class="row w-100">
           <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container-fluid">
                 <a class="navbar-brand" href="#" style="margin-left: 50px; margin-top: 9px;">
                 <img src="../asset/logo.png" height="25" alt="" />
                 </a>
                 <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    style="border:
                    1px solid rgba(0, 0, 0, 0.458);
                    color: rgba(0, 0, 0, 0.458);"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 50 50">
                       <path d="M39.5 37c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 37 39.438 37 39.5 37zM39.5 24.5c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 24.5 39.438 24.5 39.5 24.5zM39.5 12c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 12 39.438 12 39.5 12z"></path>
                       </svg>
                 </button>
                 @include('.content/component/navbar')
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 ">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Tunaikan Zakat</p>
            </div>
        </div>

     </div>
     <div class="container w-100 ">
      <div class="row w-100 p-3">
        @include('content.component.molecules.zakat.pay.left')
         <div class="col md-6  w-100">
               <div class="container w-100 p-3  d-flex align-items-center justify-content-center ">
                  <form  class=" w-100">
                        <div class="mb-4">
                            <label for="nama" class="form-label select-wrapper">Kategori Zakat</label>
                            <select class="form-select form-control" id="custom-input" aria-label="Default select example">
                            <option
                            selected>
                            Pilih kategori Zakat
                            </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                      <div class="mb-4">
                          <label for="nama" class="form-label">Nominal</label>
                          <input type="text" class="form-control " id="custom-input" placeholder="Masukkan nominal donasi">
                      </div>
                      <div class="mb-4">
                          <label for="email" class="form-label">Metode Pembayaran </label>
                          <select class="form-select" id="custom-input" aria-label="Default select example">
                           <option
                           selected>
                           Pilih metode pembayaran
                           </option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                      </div>
                      <div class="mb-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="custom-input" placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="mb-4">
                     <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                     <input type="text" class="form-control" id="custom-input" placeholder="Masukkan kontak anda">
                 </div>
                 <div class="mb-4">
                  <label for="nama" class="form-label">Email</label>
                  <input type="email" class="form-control" id="custom-input" placeholder="Masukkan Email anda">
              </div>
                  </form>
              </div>
              <div class="button">
               <form class="form-btn-container d-flex justify-content-center">
                  <a href="" class="btn text-light align-self-start" id="donate-button"> Tunaikan Zakat</a>
              </form>
              </div>
         </div>
      </div>
     </div>
</body>
</html>

@endsection
