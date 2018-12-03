@extends('layouts.apptheme')
@section('content')

<form role="form" action="{{ route('users.store')}}" method="POST">
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
                              <option value="{{$user_Position->id}}">{{ $user_Position['name'] }}</option>
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
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

@endsection