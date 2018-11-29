@extends('layouts.apptheme')

@section('content')
<div class="col-md-12 offset-md-10">
        <span class="anchor" id="formResetPassword"></span>
        <div class="mb-5">
        </div>

        <!-- form card reset password -->
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">User Reset</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off">
                    <div class="form-group">
                        <label for="usernamereset">Username</label>
                        <input type="usernamereset" class="form-control" id="usernamereset" required="">
                        <span id="helpResetPasswordEmail" class="form-text small text-muted">
                                Password reset instructions will be sent to this email address.
                            </span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg float-right">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form card reset password -->

</div>


@endsection