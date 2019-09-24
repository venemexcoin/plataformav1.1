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
            <div class="col-md-10 offset-2">
                    {!!Form::open(['route' => 'products.store'])!!}

                        @include('products.partials.form')

                    {!! Form::close() !!}
        </div>

@endsection


@section('scripts')
<script>
console.log('conectado');
</script>
@endsection
