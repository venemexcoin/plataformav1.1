@extends("layouts.app1")
@section("title")
<span class="Titles">Productos</span>
@endsection
<style>
.Titles {
    color: brown;
    font-family: sans-SairaStencilOne-Regular;
    font-size: 50px;
}
.heders{
    color:royalblue;
    font-family: sans-SairaStencilOne-Regular;
    font-size: 20px;
}

</style>
@section("styles")

@endsection

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-primary card-outline">
              <div class="card-header">
                  <span class="heders">Inicio</span>
                @can('producs.create')
              <a href="{{ route('products.create')}}" class="btn btn-primary btn-xs float-right">
                    crear
                </a>
            @endcan
              </div> <!-- /.card-body -->
              <div class="card-body">
                <div>
                        <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Striped Full Width Table</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nombre</th>
                                        <th colspan="3">&nbsp;</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                        @can('products.show')
                                        <a href="{{ route('products.show', $product->id)}}"
                                            class="btn btn-default btn-xs">
                                                Ver
                                            </a>
                                        @endcan
                                        </td>
                                        <td>
                                        @can('products.edit')
                                        <a href="{{ route('products.edit', $product->id)}}"
                                            class="btn btn-default btn-xs">
                                                Editar
                                            </a>
                                        @endcan
                                        </td>
                                        <td>
                                        @can('products.destroy')
                                            {!! Form::open(['route' => ['products.destroy', $product->id],
                                            'method' => 'DELETE'])!!}
                                            <button class="ntn btn-danger btn-xs">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.card-body -->
                              </div>
                              <!-- /.card -->
                </div>
              </div><!-- /.card-body -->
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script>
console.log('conectado');
</script>
@endsection
