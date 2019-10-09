@extends("theme1.$theme5.layouts")

@section("titles")
Usuarios
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("layoutR")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Blog
@endsection

@section("styles")

@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
                  <i class="fas fa-minus"></i></button>

              </div>
            </div>
            <div class="card-body">
                <nav class="navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                     <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Atencion al cliente</a>
                      </li>

                      <div class="margin">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Coloque la Orden</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#">IMEI Servicios</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                        </div>
                      </div>
                      <div class="margin">
                            <div class="btn-group">
                                    <button type="button" class="btn btn-default">Informacion Historial</button>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                      <span class="caret"></span>
                                      <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                            </div>
                        </div>
                        <li class="nav-item d-none d-sm-inline-block">
                                <a href="#" class="nav-link">Contact</a>
                              </li>

                    </ul>

                </nav>

            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->



@endsection

@section('scripts')



@endsection

