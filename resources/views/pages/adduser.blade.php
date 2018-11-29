@extends('layouts.apptheme')

@section('content')
    <div class="container-fluid">
            <div class="container py-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center mb-5">Add User</h2>
                            
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <span class="anchor" id="formRegister"></span>
                                    <hr class="mb-5">
                
                                    <!-- form card register -->
                                    <div class="card card-outline-secondary">
                                        <div class="card-header">
                                            <h3 class="mb-0">Create and Give Access</h3>
                                        </div>
                                        <div class="card-body">
                                            <form class="form" role="form" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="makeadmin" name="makeadmin">
                                                        <label class="custom-control-label" for="makeadmin">Make as Admin</label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <br>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="cedula" name="cedulaname">
                                                        <label class="custom-control-label" for="cedula">Cedula Access</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="barangayclearance" name="barangayclearancename">
                                                        <label class="custom-control-label" for="barangayclearance">Barangay Clearance Access</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="resident" name="residentname">
                                                        <label class="custom-control-label" for="resident">Resident Access</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="summons" name="summonsname">
                                                        <label class="custom-control-label" for="summons">Summons Access</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="report" name="reportname">
                                                        <label class="custom-control-label" for="report">Report Access</label>
                                                    </div>
                                                </div>
                                            </div>       
                                            <button type="submit" class="btn btn-primary">Submit</button>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- /form card register -->
                
                                </div>

                
                            </div>
                            <!--/row-->
                
                        <br><br><br><br>
                
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->
                    <hr>
                    <p class="text-center">The End.<br>
                        <a class="small text-info d-inline-block" href="https://www.codeply.com/bootstrap-4-examples">More Bootstrap 4 Examples</a>
                    </p>
                    
                </div>
                <!--/container-->
            
    </div>
    <!-- /.container-fluid -->
    
@endsection