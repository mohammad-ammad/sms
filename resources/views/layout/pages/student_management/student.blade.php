@extends('../layout/app')
@section('content-container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Students Management</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Father Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>Ali</td>
                    <td>Raza</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>123</td>
                    <td>Ayesha</td>
                    <td>Malik</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>123</td>
                    <td>Ahsan</td>
                    <td>Khan</td>
                    <td>
                    <button type="button" class="btn btn-success btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection