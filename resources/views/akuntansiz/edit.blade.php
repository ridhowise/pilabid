@extends('layouts.adm') 
@section('content')

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
        bkLib.onDomLoaded(function() { 
		new nicEditor({fullPanel : true}).panelInstance('area2');
		});
</script>


<!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Edit aplikasi</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="/aplikasi"><i class="fa fa-arrow-left"></i></a></li>

                                    </ol>

                                </div>
                            </div>
                        </div><!-- end .page title-->

                            <div class="col-md-12">


                                <div class="col-md-12">
                                <div class="panel panel-card margin-b-30">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Edit aplikasi
                                        <div class="float-right">
                                            
                                        </div>
                                    </div>
                                    <div class="panel-body  p-xl-3">
                                       
										@foreach($aplikasi as $datas)
										<form class="form-horizontal" action="{{ route('aplikasi.update', $datas->id) }}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
										{{ method_field('PUT') }}
										
                                        <div class="form-group row"><label class="col-lg-2 form-control-label">server</label>

                                        <div class="col-lg-10">
                                            <select name="server_id" id="server" class="form-control select" required>
                                            <option value="{{ $datas->server_id }}">{{ $datas->server->name }}</option>
                                            <option value="{{ $datas->server_id }}">-- Pilih --</option>
                                            @foreach ($server as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                            </select>
                                            </div>
                                        </div>
                                            
                                           

											<div class="form-group row">
												<label class="col-lg-2 form-control-label">name</label>
	
													<div class="col-lg-10">
													<input type="text" name="name" placeholder="Name" class="form-control" value="{{ $datas->name }}" required> 
													</div>
												</div>
												
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">IP</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="ip" placeholder="IP" class="form-control" value="{{ $datas->ip }}" required> 
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">Root</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="root" placeholder="root" class="form-control" value="{{ $datas->root }}" required> 
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">Password Root</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="rootpass" placeholder="rootpass" class="form-control" value="{{ $datas->rootpass }}" required> 
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">User</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="username" placeholder="username" class="form-control" value="{{ $datas->username }}" required> 
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">Password User</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="userpass" placeholder="userpass" class="form-control" value="{{ $datas->userpass }}" required> 
                                                        </div>
                                                </div>
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
										@endforeach
                                    </div>
                                </div>
                            </div>


                    <div class="clearfix"></div>
                </div>

                <script>
// var min = new Date().getFullYear(),
//     max = min + 9,
//     select = document.getElementById('idtahun');

// for (var i = min; i<=max; i++){
//     var opt = document.createElement('option');
//     opt.value = i;
//     opt.innerHTML = i;
//     select.appendChild(opt);
// }
</script>		

<script>
	
</script>


                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a> 
	@endsection