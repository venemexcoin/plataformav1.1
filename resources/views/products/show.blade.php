@extends("theme.$theme.layouts")

@section("titles")
Product
@endsection
@section("homeD")
{{ route('products.index')}}
@endsection
@section("homeT")
Productos
@endsection

@section("styles")

@endsection

@section('content')
<div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              ID del Producto: {{ $product->id}}
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>Nombre del producto</h5>

            <p>{{ $product->name }}</p>
            </div>
            <div class="callout callout-info">
              <h5>Descripción de producto</h5>

              <p>{{$product->description}}</p>
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
@endsection
