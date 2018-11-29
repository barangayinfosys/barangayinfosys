@extends('layouts.apptheme')

@section('content')
     <!-- Header-->
     <div class="breadcrumbs">
        <div class="col-sm-4">
           <div class="page-header float-left">
              <div class="page-title">
                 <h1>Information Field</h1>
              </div>
           </div>
        </div>
        <div class="col-sm-8">
           <div class="page-header float-right">
              <div class="page-title">
                 <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Information Field</a></li>
                    <li class="active">Add</li>
                 </ol>
              </div>
           </div>
        </div>
     </div>
     <div class="content mt-3">
        <div class="animated fadeIn">
           <div class="row">
              <div class="col-lg-12">
                 <div class="card">
                    <div class="card-header">
                       <strong>Information Field</strong>
                    </div>
                    <div class="card-body card-block">
                       <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name" class="form-control"></div>
                         </div>
                          <div class="row form-group">
                             <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birthday</label></div>
                             <div class="col-12 col-md-9"><input type="date" id="" name="date" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                             <div class="col col-md-3"><label for="placeofbirth" class=" form-control-label">Place of Birth</label></div>
                             <div class="col-12 col-md-9"><input type="placeofbirth" id="placeofbirth" name="placeofbirth" placeholder="" class="form-control"><!--<small class="help-block form-text">Where you exist</small>--></div>
                          </div>
                          <div class="row form-group">
                             <div class="col col-md-3"><label for="height" class=" form-control-label">Height</label></div>
                             <div class="col-12 col-md-9"><input type="number" id="" name="height" placeholder="" class="form-control"><small class="help-block form-text">Ex. 5'3 -> 5.3</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="weight" class=" form-control-label">Weight</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="" name="weight" placeholder="" class="form-control"><small class="help-block form-text">Decimal Format</small></div>
                          </div>
                          <div class="row form-group">
                             <div class="col col-md-3"><label class=" form-control-label">Civil Status</label></div>
                             <div class="col col-md-9">
                                <div class="form-check">
                                   <div class="radio">
                                      <label for="radio1" class="form-check-label ">
                                      <input type="radio" id="single" name="radios" value="option1" class="form-check-input">Single
                                      </label>
                                   </div>
                                   <div class="radio">
                                      <label for="radio2" class="form-check-label ">
                                      <input type="radio" id="married" name="radios" value="option2" class="form-check-input">Married
                                      </label>
                                   </div>
                                   <div class="radio">
                                      <label for="radio3" class="form-check-label ">
                                      <input type="radio" id="divorced" name="radios" value="option3" class="form-check-input">Divorced
                                      </label>
                                   </div>
                                   <div class="radio">
                                      <label for="radio3" class="form-check-label ">
                                      <input type="radio" id="separated" name="radios" value="option3" class="form-check-input">Separated
                                      </label>
                                   </div>
                                   <div class="radio">
                                      <label for="radio3" class="form-check-label ">
                                      <input type="radio" id="widowed" name="radios" value="option3" class="form-check-input">Widowed
                                      </label>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nationality</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nationality" name="nationality" placeholder="Nationality" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Occupation</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="occupation" name="occupation" placeholder="Occupation" class="form-control"></div>
                          </div>
                          
                       </form>
                    </div>
                    <div class="card-footer">
                       <button type="submit" class="btn btn-primary btn-sm">
                       <i class="fa fa-dot-circle-o"></i> Submit
                       </button>
                       <button type="reset" class="btn btn-danger btn-sm">
                       <i class="fa fa-ban"></i> Reset
                       </button>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- .animated -->
     </div>
     <!-- .content -->
@endsection