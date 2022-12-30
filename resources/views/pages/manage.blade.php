@extends('layout.index')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 contact-form">
      <h3>Tambah <span>Hotel</span></h3>
      <form action="{{route('manage.store')}}" method="POST">
        <input type="text" class="form-control" name="Nama hotel" placeholder="Nama hotel" required="" />
        <input type="Detail Hotel" class="form-control" name="Detail Htel" placeholder="Detail Hotel" required="" />
        <input type="Lokasi" class="form-control" name="Lokasi" placeholder="Lokasi" required="" />
        <textarea class="form-control" name="Message" placeholder="Massage ...." required=""></textarea>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>

<br /><br />
<div class="container">
  <div class="row">
    <div class="col-md-6 contact-form">
      <h3 style="text-align: center;">Isi data<span> Pribadi</span></h3>
      <form action="{{route('manage.store')}}" method="POST">
        @csrf
        <input type="text" class="form-control" name="Nama" placeholder="Nama" required="" />
        <input type="Nik" class="form-control" name="Nik" placeholder="Nik" required="nik" />
        <input type="No Hp" class="form-control" name="No HP" placeholder="No hp" required />
        <input type="Email" class="form-control" name="Email" placeholder="Email" required="" />
        <textarea class="form-control" name="Message" placeholder="Massage ...." required=""></textarea>
        <button type="submit">submit</button>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Hotel</th>
      <th scope="col">Detail Hotel</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Massage</th>
      <th scope="col">nama</th>
      <th scope="col">NIK</th>
      <th scope="col">No Telpon</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Massage</th>
    </tr>
    </thead>
    <tbody>
      <?php $no=1;?>
      @foreach($detail as $dtl)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$dtl->}}</td>
      </tr>
    </tbody>
</table>

@endsection