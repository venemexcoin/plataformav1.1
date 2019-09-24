<div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
            <div class="card-body">
              <div class="form-group">
                    {{ Form::label('name', 'Nombre de producto', ['for'=>'exampleInputEmail1']) }}
                    {{form::text('name',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                    {{ Form::label('description', 'Descripcion de producto', ['for'=>'exampleInputEmail1']) }}
                    {{form::text('description',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="card-footer">
                {{form::submit('Guardar', ['class' => 'btn btn-xs btn-primary'])}}
              </div>
          </form>
        </div>

