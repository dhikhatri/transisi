@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Karyawan</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('karyawan.create') }}">Tambah Karyawan</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Nama Karyawan</th>
        <th>Email Karyawan</th>
		<th>Company Karyawan</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($karyawans as $karyawan)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$karyawan->namaKaryawan}}</td>
          <td>{{$karyawan->emailKaryawan}}</td>
		  <td>{{$karyawan->companyKaryawan}}</td>
          <td>
            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('karyawan.show',$karyawan->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('karyawan.edit',$karyawan->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $karyawans->links() !!}
  </div>
@endsection
