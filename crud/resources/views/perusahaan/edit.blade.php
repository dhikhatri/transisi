@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Data Perusahaan</h3>
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
    <form action="{{route('perusahaan.update',$perusahaan->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Perusahaan :</strong>
          <input type="text" name="namaPerusahaan" class="form-control" value="{{$perusahaan->namaPerusahaan}}">
        </div>
        <div class="col-md-12">
          <strong>Email Perusahaan :</strong>
          <textarea class="form-control" name="emailPerusahaan" rows="8" cols="80">{{$perusahaan->emailPerusahaan}}</textarea>
        </div>
		<div class="col-md-12">
          <strong>Logo Perusahaan :</strong>
          <input type="file" name="logoPerusahaan" >
        </div>
		<div class="col-md-12">
          <strong>Website Perusahaan :</strong>
          <textarea class="form-control" name="websitePerusahaan" rows="8" cols="80">{{$perusahaan->websitePerusahaan}}</textarea>
        </div>
		
        <div class="col-md-12">
          <a href="{{route('perusahaan.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
