@extends("theme.$theme.layouts")

@section("titles")
Product New
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

{!!Form::open(['route' => 'products.store','files' => true]) !!}
    @include('products.partials.form')

{!!Form::close() !!}

@endsection
