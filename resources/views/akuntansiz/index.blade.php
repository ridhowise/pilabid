@extends('layouts.adm') 
@section('content')

<link href="{{ URL::asset('adm/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">akuntansi <a href="{{ url('akuntansi/create') }}" class="btn btn-sm btn-primary" >Create</a>
</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Akuntansi</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
            <th>Action</th>

          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
        @php
            $no = 1;
            @endphp
            
            @foreach($data as $items)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $items->date }}</td> 
              <td>{{ $items->name }} </td>
              <td>{{ $items->debit }}</td>
              <td>{{ $items->credit }}</td>
              <td>{{ $items->balance }}</td>
                    <td>
                    <form action="{{ route('akuntansi.destroy', $items->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        {{-- <a class="btn btn-sm btn-warning" href="{{ route('akuntansi.show',$items->id) }}">View</a> --}}
                        <a class="btn btn-sm btn-success" type="submit" href="{{ route('akuntansi.edit',$items->id) }}">Edit</a>
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


@endsection

