@extends("theme.$theme.layouts")

@section("titles")
User Edit
@endsection
@section("homeD")
{{ route('users.index')}}
@endsection
@section("homeT")
Usuarios
@endsection

@section("styles")

@endsection

@section('content')

{!!Form::model($user, ['route' => ['users.update', $user->id],
'method' => 'PUT','files' => true]) !!}
    @include('users.partials.form')

{!!Form::close() !!}

@endsection
