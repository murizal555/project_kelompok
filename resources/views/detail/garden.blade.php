<!DOCTPYE HTML>
<html>
  <head>
    <title>Membuat description list di HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <dl>
      <dt>Hotel Garden</dt>
      <dd>Sebuah hotel dengan fasilitas kamar yang viewnya dekat dengan pantai</dd>

      
    </dl>

    <div class="container">
  <img src="/images/room2.png" alt="" width="200" height="200"> 
  <img src="/images/k2.jpg" alt="" width="200" height="200">
  <img src="/images/v2.jfif" alt="" width="200" height="200">
    <form action="/booking" method="POST">
      <div class="row">
        <div class="d-flex justify-content-around">
          <div class="col-md-4"> </br>
            <h3>Fasilitas</h3> </br>
            <p> 1. Free Wifi</br>
            2. Kamar Mandi dalam</br>
            3. Air Conditioner (Pendingin ruangan)</br>
            4. Televisi</br>
            5. Kunci Otomatis</br>
            6. Layanan Resepsionis 24 jam</br>
            7. Houskeeping Harian</br>
            8. Free Breakfast</br>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Tentang Kamar</h3></br>
            <p> Kamar ini dilengkapi dengan dekorasi yang elegean dan sentuhan modern, menghadap kekolam renang dan pemandangan yang indah,
              kamar ini memberikan kenyamanan dengan balkon pribadi yang menghadap taman, ruangan ini dilangkapi dengan sentuhan artistik yang tak terlupakan
              seperti karya seni pengerajin, perabotan, dan aksesoris yang elegan. Tentunya, seprai berkualitas menjamin tidur malam anda dengan nyenyak. Kamar
              mandi keramik menawarkan shower. </p>
          </div>
        </div>
      </div>
</div>
<div class="">
    <form action="booking.html">
        <!-- <button type="submit" class="btn btn-primary"><a href="/booking"></a>submit</button> -->
        <!-- <a href="/booking" class="btn btn-primary stretched-link">submit</a> -->
        <!-- <button type="button" class="btn btn-primary">Primary</button> -->
        <!-- <input type="submit" class="submit-btn" value="Submit" /> -->
        <div class="row mt-4">
          <div class="col text-end">
              <strong>Rp.40000</strong>
          </div>
          <div class="col text-">
            <form action="booking.html">
              <a href="/booking" class="btn btn-primary stretched-link">submit</a>
            </form>
          </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>