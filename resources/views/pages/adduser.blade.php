@extends('layouts.apptheme')

@section('content')
<div class="container">
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addnewusers">
        Add New Users
</button>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">User Role</th>
        <th scope="col">User Permissions</th>
        <th scope="col">Actions</th>


      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Dummy Data</td>
        <td>Dummy Data</td>
        <td>Dummy Data</td>
        <td>Dummy Data</td>
        <td>Dummy Data</td>
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-info mr-2" data-toggle="modal" data-target="#edit-modal">
                    <i class="fa fa-edit fa-fw"></i>
                </button>
                <!-- Button trigger modal-->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalConfirmDelete">
                    <i class="fa fa-trash fa-fw"></i>
                </button>
            </div>
        </td>

      </tr>
    </tbody>
  </table>
</div>
      <!--Modal: modalConfirmDelete-->
      <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
          <!--Content-->
          <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
              <p class="heading">Are you sure?</p>
              
            </div>
            
      
            <!--Body-->
            <div class="modal-body">
      
              <i class="fa fa-times fa-4x animated rotateIn"></i>
      
            </div>
      
            <!--Footer-->
            <div class="modal-footer flex-center">
              <a href="" class="btn  btn-outline-danger">Yes</a>
              <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!--Modal: modalConfirmDelete-->
{{-- MODAL FOR ADD --}}
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="addnewusers" tabindex="-1" role="dialog" aria-labelledby="addnewusers" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addnewusers">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form role="form" action="/add_user">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="username">Username</label> 
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Change Password</label> 
                            <input type="password" class="form-control" name="change_password" placeholder="Enter password">
                          </div>
                          <div class="form-group">
                            <label for="name">Name</label> 
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label for="">Contact</label> 
                            <input type="text" class="form-control" name="contact" placeholder="Enter phone number">
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
            </div>
          </div>
        </div>
      </div>





      {{-- MODAL FOR EDIT --}}
      <div class="modal fade" id="edit-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title"><b>Edit User</b></h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="/edit_user">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="username">Username</label> 
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label> 
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <label for="">Contact</label> 
                        <input type="text" class="form-control" name="contact" placeholder="Enter contact">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Change Password</label> 
                        <input type="password" class="form-control" name="change_password" placeholder="Enter password">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection