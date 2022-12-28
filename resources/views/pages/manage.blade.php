@extends('layout.index')
@section('content')
<div class="container">
            <div class="row">
                <div class="col-md-6 contact-form">
                  <h3>Tambah <span>Hotel</span></h3>
                  <form action="{{route('manage.store')}}" method="POST">
                    <input
                      type="text"
                      class="form-control"
                      name="Nama hotel"
                      placeholder="Nama hotel"
                      required=""
                      />
                    <input
                      type="Detail Hotel"
                      class="form-control"
                      name="Detail Htel"
                      placeholder="Detail Hotel"
                      required=""
                    />
                    <input
                      type="Lokasi"
                      class="form-control"
                      name="Lokasi"
                      placeholder="Lokasi"
                      required=""
                    />
                    <textarea
                      class="form-control"
                      name="Message"
                      placeholder="Massage ...."
                      required=""
                    ></textarea>
                  </form>
                </div>
                <div class="clearfix"></div>
              </div>
              </div>
            </div>

            <br/><br/>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 contact-form">
                      <h3>Isi data<span> Pribadi</span></h3>
                      <form action="{{route('manage.store')}}" method="POST">
                        @csrf
                        <input
                          type="text"
                          class="form-control"
                          name="Nama"
                          placeholder="Nama"
                          required=""
                          />
                          <input
                            type="Nik"
                            class="form-control"
                            name="Nik"
                            placeholder="Nik"
                            required="nik"
                          />
                        <input
                          type="No Hp"
                          class="form-control"
                          name="No HP"
                          placeholder="No hp"
                          required
                        />
                        <input
                          type="Email"
                          class="form-control"
                          name="Email"
                          placeholder="Email"
                          required=""
                        />
                        <textarea
                          class="form-control"
                          name="Message"
                          placeholder="Massage ...."
                          required=""
                        ></textarea>
                       <button type="submit">submit</button>
                      </form>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  </div>
                </div>
            @endsection
