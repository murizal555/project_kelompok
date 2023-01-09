@extends('layout.index')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 contact-form">
      <h3> <span> Tambah</span>Hotel</h3>
      <form action="{{route('manage.store')}}" method="POST">
        <input type="text" style="border-radius: 100px;" class="form-control" name="Nama hotel" placeholder="Nama hotel" required="" />
        <input type="Detail Hotel" style="border-radius: 100px;" class="form-control" name="Detail Htel" placeholder="Detail Hotel" required="" />
        <input type="Lokasi" style="border-radius: 100px;" class="form-control" name="Lokasi" placeholder="Lokasi" required="" />
        <textarea class="form-control" style="border-radius: 10px;" name="Message" placeholder="Massage ...." required=""></textarea>
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
        <input type="text" style="border-radius: 100px;" class="form-control" name="Nama" placeholder="Nama" required="" />
        <input type="Nik" style="border-radius: 100px;" class="form-control" name="Nik" placeholder="Nik" required="nik" />
        <input type="No Hp" style="border-radius: 100px;" class="form-control" name="No HP" placeholder="No hp" required />
        <input type="Email" style="border-radius: 100px;" class="form-control" name="Email" placeholder="Email" required="" />
        <textarea class="form-control" style="border-radius: 10px;" name="Message" placeholder="Massage ...." required=""></textarea>
        <button type="submit">submit</button>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
<hr>
<h1 style="text-align: center;"> <u style="color: blue;">data hotel dan pemilik </u></h1>
@endsection