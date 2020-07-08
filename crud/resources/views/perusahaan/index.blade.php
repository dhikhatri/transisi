@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Perusahaan</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('perusahaan.create') }}">Tambah Perusahaan</a>
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
        <th width = "300px">Nama Perusahaan</th>
        <th>Email Perusahaan</th>
				<th>Logo Perusahaan</th>
		<th>Website Perusahaan</th>

        <th width = "180px">Action</th>
      </tr>

      @foreach ($perusahaans as $perusahaan)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$perusahaan->namaPerusahaan}}</td>
          <td>{{$perusahaan->emailPerusahaan}}</td>
		   <td><img src="{{asset('storage/app/company/'.$perusahaan->logoPerusahaan)}}" alt="logo" ></td>
		  <td>{{$perusahaan->websitePerusahaan}}</td>
		 
		  
          <td>
            <form action="{{ route('perusahaan.destroy', $perusahaan->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('perusahaan.show',$perusahaan->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('perusahaan.edit',$perusahaan->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $perusahaans->links() !!}
  </div>
@endsection
