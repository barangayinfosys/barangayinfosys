@extends('layouts.apptheme')

@section('content')
<div class="container">
  <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
  </div>
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
        {{-- <th scope="col">Password</th> --}}
        <th scope="col">User Role</th>
        <th scope="col">User Position</th>
        <th scope="col">Actions</th>


      </tr>
    </thead>
    <tbody>
     @foreach ($users as $user)
      <tr>
        <th scope="row">{{$user['id']}}</th>
        <td>{{$user['name']}}</td>
        <td>{{$user['username']}}</td>
        {{-- <td>{{$user['password']}}</td> --}}
        <td>{{$user->userRole['name']}}</td>
        <td>{{$user->userPosition['name']}}</td>
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
        @endforeach

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
              <h5 class="modal-title" id="addnewusers">Add New User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form id="user_add_input" role="form" action="{{ route('users.store')}}" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="username">Username</label> 
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" name="username" placeholder="Enter username" required autofocus>
                           @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                           @endif
                          </div>
                          <div class="form-group">
                            <label for="name">Name</label> 
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name" placeholder="Enter Name" required autofocus>
                          @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                          @endif
                          </div>
                          <div class="form-group">
                            <label for="User Role">User Role</label>
                            <select id="user_role_id" class="form-control {{ $errors->has('user_role_id') ? ' is-invalid' : '' }}" value="{{ old('user_role_id') }}" name="user_role_id" required autofocus>
                              @foreach ($userRoles as $user_Role)
                              <option value="{{$user_Role['id']}}">{{ $user_Role['name'] }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('user_role_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_role_id') }}</strong>
                                    </span>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="User Position">User Position</label>
                            <select class="form-control{{ $errors->has('user_position_id') ? ' is-invalid' : '' }}" name="user_position_id" value="{{ old('user_position_id') }}" required autofocus id="user_position_id">
                              @foreach ($userPositions as $user_Position)
                              <option value="{{$user_Position['id']}}">{{ $user_Position['name'] }}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('user_position_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_position_id') }}</strong>
                                    </span>
                            @endif
                          </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add</button>
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
                            <label for="username">Name</label> 
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                          </div>
                          <div class="form-group">
                            <label for="User Role">User Role</label>
                            
                            <select class="form-control" id="userRole">
                            @foreach ($userRoles as $userRole)
                              <option value="{{$userRole['id']}}">{{ $userRole['name'] }}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="User Position">User Position</label>
                            
                            <select class="form-control" id="userposition">
                              @foreach ($userPositions as $userPosition)
                              <option value="{{$userPosition['id']}}">{{ $userPosition['name'] }}</option>

                              @endforeach
                            </select>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary add_user_submit">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
</div>
{{-- <script type="text/javascript">

$(".add_user_submit").click(function(e) {
    e.preventDefault();
    var form_action = $("#user_add_input").find("form").attr("action");
    var user_inputs = $('#user_add_input').serializeArray();
    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data: user_inputs,
        success: function(response){
					if(response.status =='failed'){
						alert(response.message);
						return;
					}
					else{
						alert('FAILED');
					}
				}
});
</script> --}}
@endsection