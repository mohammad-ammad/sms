@extends('../layout/app')
@section('content-container')
<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Promotion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Promotion</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">

<div class="container-fluid">
<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Student Promotion</h3>

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
                  <select class="form-control" id="exampleSelectBorder">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Promote to Class</label>
                  <select class="form-control" id="exampleSelectBorder">
                    <option>Value 1</option>
                    <option>Value 2</option>
                    <option>Value 3</option>
                  </select>
            </div>
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
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