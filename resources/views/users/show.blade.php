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
<span class="Titles">Datos de Usuarios</span>
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
                  <h3 class="card-title">Fira de Usuario</h3>
                </div>
                <!-- /.card-header -->
                <!-- BODY -->
                  <div class="card-body">
                    <div class="form-group">
                    <p><span>ID: </span >{{ $user->id }}</p>
                    <p><span>Nombre: </span >{{ $user->name  }}</p>
                        <p><span>email: </span >{{ $user->email }}</p>
                            <p><span>Bitcoin: </span >{{ $user->btc }}</p>
                                <p><span>Ethereum: </span >{{ $user->eth }}</p>
                                    <p><span>Venemexcoin: </span >{{ $user->vmx }}</p>
                                <p><span>Dolar EEUU: </span >{{ $user->usd }}</p>
                            <p><span>Peso MXN: </span >{{ $user->mxn }}</p>
                        <p><span>Bolivares S: </span >{{ $user->bss }}</p>
                    <p><span>Avatar: </span >{{ $user->avatar }}</p>
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
