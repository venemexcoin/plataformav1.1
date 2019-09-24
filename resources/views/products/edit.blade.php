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
<span class="Titles">Mostrar productos</span>
@endsection

@section('content')

        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8 offset-md-4">
                    {!!Form::model($product, ['route' => ['products.update', $product->id],
                    'method' => 'PUT']) !!}

                        @include('products.partials.form')

                    {!! Form::close() !!}
        </div>
        </div>
        </div>
    
@endsection


@section('scripts')
<script>
console.log('conectado');
</script>
@endsection