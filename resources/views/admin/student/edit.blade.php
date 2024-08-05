@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Student</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          
              <!-- form start -->
              <form method="POST" action="" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>First Name <span style="color: red;">*</span> </label>
                      <input type="text" class="form-control" name="name" value="{{ old('name',$getRecord->name)}}" required placeholder="First Name">
                      <div style="color:red">{{$errors->first('name')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Last Name <span style="color: red;">*</span> </label>
                      <input type="text" class="form-control" name="last_name" value="{{ old('last_name',$getRecord->last_name)}}" required placeholder="Last Name">
                      <div style="color:red">{{$errors->first('last_name')}}</div>
                    </div>
                  </div> 
                  
                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Admission Number <span style="color: red;">*</span> </label>
                      <input type="text" class="form-control" name="admission_number" value="{{ old('admission_number',$getRecord->admission_number)}}" required placeholder="Admission Number">
                      <div style="color:red">{{$errors->first('admission_number')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Roll Number </label>
                      <input type="text" class="form-control" name="roll_number" value="{{ old('roll_number',$getRecord->roll_number)}}"  placeholder="Roll Number">
                      <div style="color:red">{{$errors->first('roll_number')}}</div>
                    </div>
                  </div> 
                  
                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label> Class <span style="color: red;">*</span> </label>
                      <select class="form-control" name="class_id" id="" required>
                        <option value="">Select class</option>
                          @foreach ($getClass as $value )
                           <option {{ (old('class_id',$getRecord->class_id) == $value->id) ? 'selected' : ''}} value="{{$value->id}}"> {{$value->name}}</option>
                          @endforeach
                      </select>
                      <div style="color:red">{{$errors->first('class_id')}}</div>
                    </div> 
                    <div class="form-group col-md-6">
                      <label> Gender <span style="color: red;">*</span> </label>
                      <select class="form-control" name="gender" id="" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ (old('gender') == 'Male') ? 'selected' : ''}}>Male</option>
                        <option value="female" {{ (old('gender') == 'Female') ? 'selected' : ''}}>Female</option>
                        <option value="others" {{ (old('gender') == 'others') ? 'selected' : ''}}>Others</option>
                      </select>
                      <div style="color:red">{{$errors->first('gender')}}</div>
                    </div> 
                  </div>

                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Date Of Birth <span style="color: red;">*</span> </label>
                      <input type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth',$getRecord->date_of_birth)}}" required>
                      <div style="color:red">{{$errors->first('date_of_birth')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Caste </label>
                      <input type="text" class="form-control" name="caste" value="{{ old('caste',$getRecord->caste)}}"  placeholder="Caste">
                      <div style="color:red">{{$errors->first('caste')}}</div>
                    </div>
                  </div> 

                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Religion</label>
                      <input type="text" class="form-control" name="religion" value="{{ old('religion',$getRecord->religion)}}" placeholder="Religion">
                      <div style="color:red">{{$errors->first('religion')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Mobile Number </label>
                      <input type="number" class="form-control" name="mobile_number" value="{{ old('mobile_number',$getRecord->mobile_number)}}"  placeholder="Mobile Number">
                      <div style="color:red">{{$errors->first('mobile_number')}}</div>
                    </div>
                  </div>

                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Admission Date <span style="color: red;">*</span> </label>
                      <input type="date" class="form-control" name="admission_date" value="{{ old('admission_date',$getRecord->admission_date)}}" required placeholder="Admission Date">
                      <div style="color:red">{{$errors->first('admission_date')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Profile Picture </label>
                      <input type="file" class="form-control" name="profile_pic" value="">
                      <div style="color:red">{{$errors->first('profile_pic')}}</div>
                    </div>
                  </div>

                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Blood Group</label>
                      <input type="text" class="form-control" name="blood_group" value="{{ old('blood_group',$getRecord->blood_group)}}" placeholder="Bloog Group">
                      <div style="color:red">{{$errors->first('blood_group')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Height</label>
                      <input type="text" class="form-control" name="height" value="{{ old('height',$getRecord->height)}}"  placeholder="Height">
                      <div style="color:red">{{$errors->first('height')}}</div>
                    </div>
                  </div>

                  <div class="form-group col-md-12" style="display: flex;">
                    <div class="form-group col-md-6">
                      <label>Weight</label>
                      <input type="text" class="form-control" name="weight" value="{{ old('weight',$getRecord->weight)}}" placeholder="Weight">
                      <div style="color:red">{{$errors->first('weight')}}</div>
                    </div>
                    <div class="form-group col-md-6">
                    <label> Status <span style="color: red;">*</span> </label>
                      <select class="form-control" name="status" id="" required>
                        <option value="">Select Status</option>
                        <option {{ (old('status') == '0') ? 'selected' : ''}} value="active">Active</option>
                        <option {{ (old('status') == '1') ? 'selected' : ''}} value="inactive">Inactive</option>
                      </select>
                      <div style="color:red">{{$errors->first('status')}}</div>
                    </div>
                  </div>

                  <hr />

                  <div class="form-group">
                    <label>Email address<span style="color: red;">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email',$getRecord->email)}}" required placeholder="Enter email">
                    <div style="color:red">{{$errors->first('email')}}</div>
                  </div>
                  <div class="form-group">
                    <label >Password</label>
                    <input type="text" class="form-control" name="password"  placeholder="Password">
                    <p>Due you want change the Password so please add new password</p>
                  </div>
               
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection