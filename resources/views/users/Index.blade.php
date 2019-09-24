@extends("layouts.app1")

@section("styles")
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
@endsection

@section("title")
<span class="Titles">Productos</span>
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


                    crear


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
                                    @foreach ($users as $user)
                                        <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td width="10px">
                                        @can('users.show')
                                        <a href="{{ route('users.show', $user->id)}}"
                                            class="btn btn-default btn-xs">
                                                Ver
                                            </a>
                                        @endcan
                                        </td>
                                        <td width="10px">
                                        @can('users.edit')
                                        <a href="{{ route('users.edit', $user->id)}}"
                                            class="btn btn-default btn-xs">
                                                Editar
                                            </a>
                                        @endcan
                                        </td>
                                        <td width="10px">
                                        @can('users.destroy')
                                            {!! Form::open(['route' => ['users.destroy', $user->id],
                                            'method' => 'DELETE'])!!}
                                            <button class="ntn btn-danger btn-xs">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                                  {{ $users->render()}}
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
