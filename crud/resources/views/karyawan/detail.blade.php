@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Karyawan</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Karyawan : </strong> {{$karyawan->namaKaryawan}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Email Karyawan : </strong> {{$karyawan->emailKaryawan}}
        </div>
      </div>
	   <div class="col-md-12">
        <div class="form-group">
          <strong>Company Karyawan : </strong> {{$karyawan->companyKaryawan}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('karyawan.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
