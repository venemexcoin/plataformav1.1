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
                    {{ Form::label('name', 'Nombre de Usuario', ['for'=>'exampleInputEmail1']) }}
                    {{form::text('name',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <hr>
              <h3>Lista de roles</h3>
              <div class="form-group">
                  <ul class="list-unstyled">
                      @foreach ($roles as $role)
                      <li>
                          <label>
                              {{ Form::checkbox('roles[]', $role->id, null) }}
                              {{ $role->name }}
                              <em>({{ $role->description ?: 'Sin descripción' }})</em>
                          </label>
                      </li>

                      @endforeach
                  </ul>
              </div>
              <div class="form-group">
                    {{ Form::label('email', 'Email del cliente', ['for'=>'exampleInputEmail1']) }}
                    {{form::text('email',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                    {{ Form::label('btc', 'Saldo en Bitcoin', ['for'=>'exampleInputEmail1']) }}
                    {{form::text('btc',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                {{ Form::label('eth', 'Saldo en Ethereum', ['for'=>'exampleInputEmail1']) }}
                {{form::text('eth',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                {{ Form::label('vmx', 'Saldo en venemexcoin', ['for'=>'exampleInputEmail1']) }}
                {{form::text('vmx',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                {{ Form::label('usd', 'Saldo en dolar', ['for'=>'exampleInputEmail1']) }}
                {{form::text('usd',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
              </div>
              <div class="form-group">
                {{ Form::label('mxn', 'Saldo en Pesos', ['for'=>'exampleInputEmail1']) }}
                {{form::text('mxn',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
             </div>
             <div class="form-group">
                {{ Form::label('bss', 'Saldo en Bolivares S', ['for'=>'exampleInputEmail1']) }}
                {{form::text('bss',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
             </div>
             <div class="form-group">
                {{ Form::label('avatar', 'Avatar del cliente', ['for'=>'exampleInputEmail1']) }}
                {{form::text('avatar',null,['class' => 'form-control'], ['id' => 'exampleInputEmail1'])}}
            </div>
              <div class="card-footer">
                {{form::submit('Guardar', ['class' => 'btn btn-xs btn-primary'])}}
              </div>
          </form>
        </div>

