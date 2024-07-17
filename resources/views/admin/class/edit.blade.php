@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Class</h1>
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
              <form method="POST" action="">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label> Class Name</label>
                    <input type="text" class="form-control" name="name" value="{{$getRecord->name}}" required placeholder="Enter class name">
                  </div>
                  <div class="form-group" >
                    <label>Status</label>
                    <select name="status" id="" class="form-control">
                      <option {{($getRecord->status == 0) ? 'selected':''}} value="0">Active</option>
                      <option {{($getRecord->status == 1) ? 'selected':''}} value="1">Inactive</option>
                    </select>
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