@extends("theme2.$theme2.layouts")

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
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nombre</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                        <td>{{ $product->id }}</td>
                                        <td id="prodectM">{{ $product->name }}</td>

                                </tr>

                            @endforeach
                        </tbody>
                    </table>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                        {{ $products->render() }}
                </div>
                <!-- /.card-footer-->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
@endsection

@section('scripts')
<script>
console.log('conectado');
</script>
@endsection

