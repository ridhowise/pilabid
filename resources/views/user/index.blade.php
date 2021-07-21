@extends('layouts.adm')
@section('content')


<link href="{{ URL::asset('adm/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User <a href="{{ url('user/create') }}" class="btn btn-sm btn-primary" >Create</a>
      {{$kategori->kategori ?? ''}}</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-dark" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status Aktif</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($data as $items)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $items->name }}</td>
                <td>{{ $items->email }}</td>
                <td>{{$items->level->name}}</td>
                <td>
                    @if ($items->status_aktif == 1)
                        <a class="tag label-info">Aktif</a>
                    @elseif ($items->status_aktif == 0)
                        <a class="tag label-danger">Tidak Aktif</a>
                    @else
                        Tidak
                    @endif
                </td>
                <td>
				
                <form action="{{ route('user.destroy', $items->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <!--<a href="{{ route('user.show',$items->id) }}">Lihat</a>
                    <a class="btn btn-sm btn-success" type="submit" href="{{ route('user.edit',$items->id) }}">Edit</a>-->
                    @if ($items->status_aktif == 0)
                    <a style="color:white;" class="btn btn-sm btn-success" type="submit" href="{{ route('user.update',$items->id) }}" onclick="return confirm('Yakin ingin mengaktifkan akun ini?')">Aktifkan</a>
                    @endif
                    <button style="color:white;" class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="{{ url('/logout') }}">Logout</a>
  </div>
</div>
</div>
</div>

@endsection
