<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div class="container">
      <h1 style="text-align: center;">Pilih salah satu untuk membayar tagihan:</h1>
      <br>
      <div class="row" style="text-align: -webkit-center;">
         <div class="col-12 mt-3">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <!-- <span class="me-3">MANDIRI</span> -->
                  <a href="{{route('transaksi.index')}}"> <button class="btn btn-light" type="button"><img href="{{route('transaksi.index')}}" src="/tugas/MANDIRI.jpg" alt="" width="70px"></button></a>
               </div>
            </div>
         </div>
         <div class="col-12 mt-3">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <!-- <span class="me-3">BCA</span> -->

                  <a href="{{route('transaksi.index')}}"> <button class="btn btn-light" type="button"><img src="/tugas/BCA.jpeg" alt="transaksi" width="70px"></button></a>
               </div>
            </div>
         </div>
         <div class="col-12 mt-3">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <!-- <span class="me-3">BRI</span> -->
                  <a href="{{route('transaksi.index')}}"> <button class="btn btn-light" type="button"><img src="tugas/BRI.jpeg" alt="" width="70px"></button></a>
               </div>
            </div>
         </div>
         <div class="col-12 mt-3">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <!-- <span class="me-3">indomaret</span> -->
                  <!-- <button class="btn btn-light" type="button"><img src="indomaret.png" alt="" width="70px"></button> -->
                  <a href=""> <a class="btn btn-light" href="/transaksi"><img src="/tugas/indomaret.png" alt="" width="70px"></a></a>
               </div>
            </div>
         </div>
         <div class="col-12 mt-3">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <!-- <span class="me-3">Alfamart</span> -->
                  <!-- <button class="btn btn-light" type="button"><img src="ALFA.jpeg" alt="" width="70px"></button> -->
                  <a class="btn btn-light" href="{{route('transaksi.index')}}"><img src="/tugas/ALFA.jpeg" alt="" width="70px"></a>
               </div>
            </div>
         </div>
         <!-- <div class="col-12 mt-3">
            <button class="btn btn-light" type="button"><img src="indomaret.png" alt="" width="70px">indomart</button>
         </div>
         <div class="col-12 mt-3">
            <button class="btn btn-light" type="button"><img src="BCA.jpeg" alt="" width="70px">BCA</button>
         </div>
         <div class="col-12 mt-3">
            <button class="btn btn-light" type="button"><img src="BRI.jpeg" alt="" width="70px">BRI</button>
         </div>
         <div class="col-12 mt-3">
            <button class="btn btn-light" type="button"><img src="MANDIRI.jpg" alt="" width="70px">MANDIRI</button>
         </div>
         <div class="col-12 mt-3">
            <button class="btn btn-light" type="button"><img src="indomaret.png" alt="" width="70px">indomart</button>
         </div> -->
      </div>
   </div>
   </div>

   <!-- <div class="container">
      
   <div class="tabcontent" role="alert">
     <button style="width: 100%;"><p><img src="ALFA.jpeg" alt="" width="70PX"><pre>ALFAMART </pre> </p></button>
   </div>
   <br><br>
   <div class="tabcontent" role="alert">
       <button><p><img src="BCA.jpeg" alt="" width="70PX">BCA</p></button>
   </div>
   <div class="" role="alert">
      <button ><p><img src="BRI.jpeg" alt="" width="70px">BRI                                     </p></button>
   </div>
   <div class="alert alert-danger" role="alert">
      <button ><p><img src="indomaret.png" alt="" width="70px">indomart                           </p></button>
   </div> -->
</body>

</html>