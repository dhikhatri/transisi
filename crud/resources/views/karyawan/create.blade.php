@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Tambah Karyawan</h3>
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

    <form action="{{route('karyawan.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Karyawan :</strong>
          <input type="text" name="namaKaryawan" class="form-control" placeholder="Nama Karyawan">
        </div>
        <div class="col-md-12">
          <strong>Email :</strong>
          <textarea class="form-control" placeholder="Email" name="emailKaryawan" rows="8" cols="80"></textarea>
        </div>
		<div class="col-md-12">
          <strong>Company :</strong>
          <textarea class="form-control" placeholder="Company" name="companyKaryawan" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('karyawan.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
