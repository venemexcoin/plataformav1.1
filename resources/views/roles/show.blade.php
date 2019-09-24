@extends("layouts.app1")

@section("styles")
<style>
.Titles {
    color: brown;
    font-family: sans-SairaStencilOne-Regular;
    font-size: 50px;
}

</style>
@endsection

@section("title")
<span class="Titles">Mostrar Roles</span>
@endsection

@section('content')
<section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-2">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Roles Y Permisos</h3>
                </div>
                <!-- /.card-header -->
                <!-- BODY -->
                  <div class="card-body">
                    <div class="form-group">
                    <p><span>Nombre: </span >{{ $role->name }}</p>
                    <p><span>Slug: </span >{{ $role->slug }}</p>
                    <p><span>Description: </span >{{ $role->description  }}</p>
                    </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
<script>
console.log('conectado');
</script>
@endsection
