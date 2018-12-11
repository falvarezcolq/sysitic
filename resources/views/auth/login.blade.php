@extends('layout.log')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Por favor ingrese sus credenciales</h3>
					</div>
					<div class="panel-body">
					<form role="form" action="/auth/login" method="POST" >
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
                        <fieldset>
							<div class="form-group">
								<label for="user">Usuario</label>
								<input required type="text" class="form-control" name="user" placeholder="Usuario" autofocus>
							</div>

							<div class="form-group">
								<label for="password">Contraseña</label>
								<input required type="password" class="form-control" name="password" placeholder="contraseña" autofocus>
							</div>

							<!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordar
                                    </label>
                            </div> -->

							<input type="submit" value="Ingresar" class="btn btn-success">

							<!-- <a href="{{url('admin')}}" class="btn btn-success">Ingresar</a> -->
                            
						</fieldset>
					</form>
				</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection

