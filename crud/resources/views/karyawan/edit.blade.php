@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Data Karyawan</h3>
      </div>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Error! </strong> Ada masalah dalam input data.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{route('karyawan.update',$karyawan->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Karyawan :</strong>
          <input type="text" name="namaKaryawan" class="form-control" value="{{$karyawan->namaKaryawan}}">
        </div>
        <div class="col-md-12">
          <strong>Email Karyawan :</strong>
          <textarea class="form-control" name="emailKaryawan" rows="8" cols="80">{{$karyawan->emailKaryawan}}</textarea>
        </div>
		<div class="col-md-12">
          <strong>Company Karyawan :</strong>
          <textarea class="form-control" name="companyKaryawan" rows="8" cols="80">{{$karyawan->companyKaryawan}}</textarea>
        </div>
        <div class="col-md-12">
          <a href="{{route('karyawan.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
