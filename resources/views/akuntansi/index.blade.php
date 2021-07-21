@extends('layouts.adm') 
@section('content')

<link href="{{ URL::asset('adm/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Anggota <a href="{{ url('akuntansi/create') }}" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#add">+Add</a></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead style="">
          <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
            <th>Foto</th>
            <th>Action</th>

          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Balance</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @php
          $rowid = 0;
          $rowspan = 0;
          $tbalance = number_format(0,2);
       @endphp
       @foreach($data as $key => $items)
       @if($items->source == 2)

         @php
            $rowid += 1
         @endphp
         <tr>
            @if ($key == 0 || $rowspan == $rowid)
                @php
                    $rowid = 0;
                    $rowspan = count($list[$items->tanggal]);
                @endphp
                <td rowspan="{{ $rowspan }}">{{$items->tanggal}}</td>
            @endif
              <td>{{ $items->name }} </td>
              <td>{{number_format($items->debit, 2)}}</td>
              <td>{{number_format($items->credit, 2)}}</td>
              <td align="right"><?php $chkbala = $items->debit - $items->credit;  echo $tbalance += $chkbala; ?></td>
                @if($items->pic===null)
                <td>--</td>
                @else
                <td><a href="{{ URL::asset('images/') }}/{{$items->pic}}">Show</a></td>
                @endif
               
				      <td>
                <form action="{{ route('akuntansi.destroy', $items->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    {{-- <a href="{{ route('akuntansi.show',$items->id) }}">Show</a> --}}
                    <button type="button" onclick="showEdit({{$items->id}})" class="btn btn-sm btn-success" >Edit</a>
                   
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                </form>
                </td>
            </tr>
            @else
            @php
            $rowid += 1
         @endphp
         <tr>
            @if ($key == 0 || $rowspan == $rowid)
                @php
                    $rowid = 0;
                    $rowspan = count($list[$items->tanggal]);
                @endphp
                <td  rowspan="{{ $rowspan }}">{{$items->tanggal}}</td>
            @endif
              <td style="color:blue">{{ $items->name }} </td>
              <td style="color:blue">{{number_format($items->debit, 2)}}</td>
              <td style="color:blue">{{number_format($items->credit, 2)}}</td>
              <td style="color:blue" align="right"><?php $chkbala = $items->debit - $items->credit;  echo $tbalance += $chkbala; ?></td>
                @if($items->pic===null)
                <td>--</td>
                @else
                <td><a target="_blank" href="{{ URL::asset('images/') }}/{{$items->pic}}">Show</a></td>
                @endif
               
				      <td>
                <form action="{{ route('akuntansi.destroy', $items->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    {{-- <a href="{{ route('akuntansi.show',$items->id) }}">Show</a> --}}
                    <button type="button" onclick="showEdit({{$items->id}})" class="btn btn-sm btn-success" >Edit</a>
                   
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
  </div>
    		</div>
    	</div>
    </section>
</main>

<!-- Add -->
<div  class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="border:1px solid black;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="upload-image-form" class="form-horizontal" action="{{ route('akuntansi.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
          @if (Auth::user()->level_id==2)

          <div class="form-group row"><label class="col-lg-2 form-control-label">Tanggal</label>
            <div class="col-lg-10">
              <input type="date" name="tanggal" placeholder="tanggal" class="form-control" required> 
            </div>
          </div>
         @else
        @endif
          <div class="form-group row"><label class="col-lg-2 form-control-label">Keterangan</label>
            <div class="col-lg-10">
              <input type="text" name="name" placeholder="Keterangan" class="form-control" required> 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Debit</label>
            <div class="col-lg-10">
              <input type="text" name="debit" placeholder="Debit" class="form-control" > 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Credit</label>
            <div class="col-lg-10">
              <input type="text" name="credit" placeholder="Credit" class="form-control" > 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Sumber</label>

            <div class="col-lg-10">
            <select name="source" id="source" class="form-control select" required>
            <option value="0">-- PILIH --</option>
            <option value="1">Pribadi</option>
            <option value="2">Non-Pribadi</option>
            </select>
            </div>
            </div>
          @if (Auth::user()->level_id==2)

          <div class="form-group row"><label class="col-lg-2 form-control-label">Pictures</label>
            <div class="col-lg-8">
              <input type="file" name="image">
            </div>
          </div>
          @else
          @endif
        </div>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-default" style="border:1px solid black;">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div  class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="border:1px solid black;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-edit" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <input type="hidden" name="id" >
        <div class="modal-body">
          
       


          <div class="form-group row"><label class="col-lg-2 form-control-label">Date</label>
            <div class="col-lg-10">
              <input type="date" name="tanggal" placeholder="tanggal" class="form-control" required> 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Keterangan</label>
            <div class="col-lg-10">
              <input type="text" name="name" placeholder="Keterangan" class="form-control" required> 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Debit</label>
            <div class="col-lg-10">
              <input type="text" name="debit" placeholder="Debit" class="form-control" required> 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Credit</label>
            <div class="col-lg-10">
              <input type="text" name="credit" placeholder="Credit" class="form-control" required> 
            </div>
          </div>
          <div class="form-group row"><label class="col-lg-2 form-control-label">Balance</label>
            <div class="col-lg-10">
              <input type="text" name="balance" placeholder="Balance" class="form-control" required> 
            </div>
          </div>
                    <div class="form-group row"><label class="col-lg-2 form-control-label">Sumber</label>

          <div class="col-lg-10">
            <select name="source" id="source" class="form-control select" required>
            <option value="0">-- PILIH --</option>
            <option value="1">Pribadi</option>
            <option value="2">Non-Pribadi</option>
            </select>
            </div>
            </div>

          <div class="form-group row"><label class="col-lg-2 form-control-label">Pictures</label>
            <div class="col-lg-8">
              <input type="file" name="image"><br/>
              Current Images: <span id="current_pic"></span>
            </div>
          </div>
          <input type="hidden" name="pic" placeholder="Prices" class="form-control" required> 
        </div>
        <div class="modal-footer">
          <button type="button" style="border:1px solid black;" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" style="border:1px solid black;" class="btn btn-default">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buying akuntansi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div>
             <label>Name : </label>
             <input type="text" class="form-control">
        </div>
        
        <div>
             <label>Description : </label>
             <textarea class="form-control"></textarea>
        </div>
        
        <div>
             <label>Unit : </label>
             <input type="text" class="form-control">
        </div>
        
        <div>
             <label>Qty : </label>
             <input type="number" class="form-control">
        </div>
        
        <div>
             <label>From : </label>
             <input type="text" class="form-control">
        </div>
        
        <div>
             <label>Photos : </label>
             <input type="file" class="form-control">
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection

<script>
  $(document).ready(function() {
      $('#example').DataTable();
      $('#myModal').on('shown.bs.modal', function () {
          $('#myInput').trigger('focus')
      });
      
  } );
  function showEdit(id){
    $.ajax({
      url:"{{url('akuntansi')}}/"+id+"/edit",
      success:function(res){
        $("#form-edit [name='id']").val(id);
        $("#form-edit [name='name']").val(res.data.name);
        $("#form-edit [name='tanggal']").val(res.data.tanggal);
        $("#form-edit [name='debit']").val(res.data.debit);
        $("#form-edit [name='credit']").val(res.data.credit);
        $("#form-edit [name='balance']").val(res.data.balance);
        $("#form-edit [name='pic']").val(res.data.pic);
        $("#current_pic").html(res.data.pic);
        $('#form-edit').attr('action',"./akuntansi/"+id);
        $("#edit").modal('show');
      }
    })
  }
  $(document).ready(function() {
       var span = 1;
       var prevTD = "";
       var prevTDVal = "";
       $("#myTable tr td:first-child").each(function() { //for each first td in every tr
          var $this = $(this);
          if ($this.text() == prevTDVal) { // check value of previous td text
             span++;
             if (prevTD != "") {
                prevTD.attr("rowspan", span); // add attribute to previous td
                $this.remove(); // remove current td
             }
          } else {
             prevTD     = $this; // store current td 
             prevTDVal  = $this.text();
             span       = 1;
          }
       });
    });
</script>


