@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Perusahaan</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Perusahaan : </strong> {{$perusahaan->namaPerusahaan}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Email Perusahaan : </strong> {{$perusahaan->emailPerusahaan}}
        </div>
      </div>
	   <div class="col-md-12">
        <div class="form-group">
          <strong>Website Perusahaan : </strong> {{$perusahaan->websitePerusahaan}}
        </div>
      </div>
	  <div class="col-md-12">
        <div class="form-group">
          <strong>Logo Perusahaan : </strong> {{$perusahaan->logoPerusahaan}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
