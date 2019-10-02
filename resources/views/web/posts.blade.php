@extends("theme1.$theme5.layouts")

@section("titles")
Blog
@endsection
@section("homeD")
{{ route('home')}}
@endsection
@section("homeL")
{{ route('blog')}}
@endsection
@section("homeT")
Home
@endsection
@section("layout")
Inicio
@endsection

@section("styles")

@endsection

@section('content')

 @if(session('info'))

                <div class="container">
                    <div class="row">
                        <div class="clo-md-8 offset-md-2">
                            <div class="alert alert-success">
                                {{ session('info') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <!-- /.content -->

 <!-- Main content -->
            <section class="content ">

                <div class="row">
                  <div class="col-md-8 offset-md-2">
                  @foreach ($posts as $post)

                    <!-- Default box -->
                    <div class="card">
                    <!--card header -->
                    <div class="card-header blog-header">
                        {{$post->name}}
                    </div>
                    <!--/.card header -->
                    <!--card body -->
                      <div class="card-body">
                       @if($post->file)
                       <img src="{{ $post->file }}" class="img-fluid">
                       @endif
                       {{ $post->excerpt }}
                      <a href="{{ route('post', $post->slug ) }}" class="float-right">Lee más</a>
                      </div>
                    <!--/.card body -->
                    <!-- /.card-body -->
                      <div class="card-footer">
                        Footer
                      </div><hr/>
                      <!-- /.card-footer-->
                      @endforeach

                      {{ $posts->render()}}
                  </div>
                </div>
              </div>

            </section>


@endsection

@section('scripts')
<script>

</script>

@endsection
