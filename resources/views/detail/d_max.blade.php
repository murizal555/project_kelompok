<!DOCTPYE HTML>
  <html>

  <head>
    <title>D-max</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
    <dl>
      <dt style="text-align: center;">
        <h1> D-max </h1>
      </dt>
      <dd style="text-align: center;">Sebuah hotel dengan fasilitas kamar yang viewnya dekat dengan pantai</dd>


    </dl>

    <div class="container">
      <img src="/images/r1.jpg" alt="" width="200" height="200">
      <img src="/images/k1.jpg" alt="" width="200" height="200">
      <img src="/images/rv1.jpg" alt="" width="200" height="200">
      <img src="/images/rv2.jpg" alt="" width="200" height="200">
      <img src="/images/rv3.jpg" alt="" width="200" height="200">
      <form action="/booking" method="POST">
        <div class="row">
          <div class="d-flex justify-content-around">
            <div class="col-md-4" style="text-align: center;"> </br>
              <h3>Deskripsi</h3> </br>
              <p> Kamar dengan pemandangan kolam renang
              </p>
            </div>
            <div class="col-md-4">
              <h3 style="text-align: center;">Fasilitas</h3></br>
              <p> *AC</br>
                * Lemari pakaian</br>
                * Mini bar</br>
                * Air mineral</br>
                * Kopi dan teh</br>
                * Mesin kopi/teh</br>
                * TV</br>
                * Telepon</br>
                * Meja kerja</br>
                * Setrika</br>
                * Kantong Laundry</br>
                * Balkon</br>
                * Shower</br>
                * Handuk</br>
                * Sabun mandi</br>
                * Sabun tangan</br>
                * Shampoo</br>
                * Conditioner</br>
                * Sikat gigi dan/atau pasta gigi</br>
                * Tissue toilet</br>
                * Cermin</br>
                * Sandal</br>
                * Hairdryer</br>

              </p>
            </div>
          </div>
        </div>

    </div>
    <div class="">
      <!-- <button type="submit" class="btn btn-primary"><a href="/booking"></a>submit</button> -->
      <!-- <a href="/booking" class="btn btn-primary stretched-link">submit</a> -->
      <!-- <button type="button" class="btn btn-primary">Primary</button> -->
      <!-- <input type="submit" class="submit-btn" value="Submit" /> -->
      <div class="row mt-4">
        <div class="col text-end">
          <strong>Rp.40000</strong>
        </div>
        <div class="col text-">
          <a href="{{route('booking.index')}}" class="btn btn-primary stretched-link">submit</a>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

  </html>