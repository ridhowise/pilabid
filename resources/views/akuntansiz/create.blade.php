@extends('layouts.adm') 
@section('content')

<!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Create Aplikasi</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="/aplikasi"><i class="fa fa-arrow-left"></i></a></li>

                                    </ol>

                                </div>
                            </div>
                        </div><!-- end .page title-->

				
								<div class="col-md-12">
                                <div class="panel panel-card margin-b-30">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Aplikasi
                                    </div>
                                    <div class="panel-body  p-xl-3">
                                        <form  action="{{ route('aplikasi.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
											

                                            <div class="form-group row"><label class="col-lg-2 form-control-label">Server</label>

                                            <div class="col-lg-10">
												<select name="server_id" id="server" class="form-control select" required>
												<option value="0">-- PILIH server --</option>
												@foreach ($server as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
												</select>
												</div>
											</div>

											
											<div class="form-group row">
											<label class="col-lg-2 form-control-label">Name</label>

                                                <div class="col-lg-10">
												<input type="text" name="name" value="{{$data->name ?? ''}}" placeholder="Name" class="form-control" required> 
                                                </div>
                                            </div>
											<div class="form-group row">
												<label class="col-lg-2 form-control-label">IP</label>
	
													<div class="col-lg-10">
													<input type="text" name="ip" value="{{$data->ip ?? ''}}" placeholder="IP" class="form-control" required> 
													</div>
												</div>
											<div class="form-group row">
												<label class="col-lg-2 form-control-label">Root</label>
	
													<div class="col-lg-10">
													<input type="text" name="root" value="root" placeholder="root" class="form-control" readonly >
													</div>
												</div>
                                            
											<div class="form-group row">
												<label class="col-lg-2 form-control-label">Password Root </label>
	
													<div class="col-lg-10">
													<input type="text" name="rootpass" value="{{$data->rootpass ?? ''}}" placeholder="password root" class="form-control" > 
													</div>
												</div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">Username</label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="username" value="{{$data->username ?? ''}}" placeholder="username" class="form-control" > 
                                                        </div>
                                                    </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-2 form-control-label">Password User </label>
        
                                                        <div class="col-lg-10">
                                                        <input type="text" name="userpass" value="{{$data->userpass ?? ''}}" placeholder="password user" class="form-control" > 
                                                        </div>
                                                    </div>
                                            <div class="hr-line-dashed"></div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
				
				
				
				
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->
		
		 

        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a> 
	@endsection