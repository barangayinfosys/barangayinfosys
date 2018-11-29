@extends('layouts.apptheme')

@section('content')
<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Information Field</a></li>
                    <li class="active">View</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">List of Users</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Birthday</th>
                                    <th>Place of Birth</th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Civil Status</th>
                                    <th>Nationality</th>
                                    <th>Occupation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>12/26/1998</td>
                                    <td>Edinburgh</td>
                                    <td>5'3</td>
                                    <td>143lbs</td>
                                    <td>Single</td>
                                    <td>Filipino</td>
                                    <td>IT Support</td>

                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>12/21/1992</td>
                                    <td>Tokyo</td>
                                    <td>5'3</td>
                                    <td>143lbs</td>
                                    <td>Widowed</td>
                                    <td>Filipino</td>
                                    <td>Accountant</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>11/06/1993</td>
                                    <td>San Francisco</td>
                                    <td>5'3</td>
                                    <td>143lbs</td>
                                    <td>Single</td>
                                    <td>Filipino</td>
                                    <td>Junior Technical Author</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>12/21/1992</td>
                                    <td>Tokyo</td>
                                    <td>5'3</td>
                                    <td>143lbs</td>
                                    <td>Divorced</td>
                                    <td>Filipino</td>
                                    <td>Senior Javascript Developer</td>
                                </tr>
                                <tr>
                                    <td>Airo Kelly</td>
                                    <td>12/21/1992</td>
                                    <td>Tokyo</td>
                                    <td>5'3</td>
                                    <td>143lbs</td>
                                    <td>Separated</td>
                                    <td>Filipino</td>
                                    <td>Senior Javascript Developer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@endsection