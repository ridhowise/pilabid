@extends('layouts.adm') 
@section('content')
<!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Create Role</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Role</li>
                                    </ol>

                                </div>
                            </div>
                        </div><!-- end .page title-->

                            <div class="col-md-12">


                                <div class="col-md-6">
                                <div class="panel panel-card margin-b-30">
                                    <!-- Start .panel -->
                                    <div class="card-header">
                                        Role
                                    </div>
                                    <div class="panel-body  p-xl-3">
                                        <form class="form-horizontal" action="{{ route('level.store') }}" method="post">
										{{ csrf_field() }}
                                            <div class="form-group row"><label class="col-lg-2 form-control-label">Role</label>

                                                <div class="col-lg-10">
												<input type="text" name="name" placeholder="Role" class="form-control" required> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <button class="btn btn-sm btn-primary" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                    <div class="clearfix"></div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a> 
	@endsection
