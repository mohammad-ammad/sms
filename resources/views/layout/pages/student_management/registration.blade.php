@extends('../layout/app')
@section('content-container')
<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">

<div class="container-fluid">
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Student Registration</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Student ID</label>
                  <input type="text" class="form-control" placeholder="Student Id">
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Student Name</label>
                  <input type="text" class="form-control" placeholder="Student Name">
            </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-12 col-sm-6">
              <div class="form-group">
                  <label>Father Name</label>
                  <input type="text" class="form-control" placeholder="Father Name">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
              <div class="form-group">
                  <label>Admission Date</label>
                  <input type="text" class="form-control" placeholder="Admission Date">
              </div>
              </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          <div class="float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
</div>

</section>

</div>

@endsection