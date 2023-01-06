@extends('layout.index')
@section('content')



<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Cek-in</th>
      <th scope="col">Cek-out</th>
      <th scope="col">Fasilitas</th>
      <th scope="col">E-mail</th>
      <th scope="col">no_HP</th>
      <th scope="col">jumlah tamu</th>

    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    @foreach($boking as $bk)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$bk->nm}}</td>
      <td>{{$bk->cek_in}}</td>
      <td>{{$bk->cek_out}}</td>
      <td>{{$bk->fasilitas}}</td>
      <td>{{$bk->email}}</td>
      <td>{{$bk->no_tlp}}</td>
      <td>{{$bk->jumlah_tamu}}</td>
      <td> <button> <a href="/edit/{{$bk->id_booking}}"> Edit </a></button></td>
      <td> <button> <a href="/delete/{{$bk->id_booking}}"> delete </a></button></td>
      <td> <button> <a href="tugas/yk.html"> Transaksi </a> </button></td>
    </tr>
    @endforeach
  </tbody>
</table>



<br>
<br>



</section>
<div class="clearfix"></div>

<!--dinning-->
<section class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <h2 class="blog-title-head" style="text-align: center;">TERIMAKASIH TELAH MEMAKAI LAYANAN KAMI</h2>
        <!-- <p class="user-info">Posted by <a>Admin</a> in <a>General</a> | <a>10 Comments</a></p> -->
        <div class="blog-image-single margin-top-small">
          <img src="images/banner2.png" class="img-responsive">
        </div>
        <p class="blog-desc"> Reservasi hotel ini adalah wadah atau tempat kalian menemukan hotel terbaik dan ternyaman sesuai pilihanmu di pulau lombok </p>
        <br>
        <br>
        <h1>TUGAS PER-KELOMPOK</h1>
        <p>TI - B</p>
      </div>
    </div>
  </div>
</section>

@endsection