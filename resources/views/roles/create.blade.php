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
<span class="Titles">Mostrar Role</span>
@endsection

@section('content')

        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10 offset-2">
                    {!!Form::open(['route' => 'roles.store'])!!}

                        @include('roles.partials.form')

                    {!! Form::close() !!}
        </div>

@endsection


@section('scripts')
<script>
console.log('conectado');
</script>
@endsection
