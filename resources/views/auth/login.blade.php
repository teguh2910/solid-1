@extends('app')

@section('content')
<br/><br/>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-warning">
				<div class="panel-heading"><marquee  behavior="alternate">Welcome to SOLID (AISIN Operational Invoice Document)</marquee></div>
				<div class="panel-info"><div class="panel-heading">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label"><font face='calibri'>E-Mail Address</font></label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" autofocus required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label"><font face='calibri'>Password</font></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> <font face='calibri'>Remember Me</font>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary"><span class='glyphicon glyphicon-lock'></span>&nbsp;<font face='calibri'><b>LOGIN</b></font></button>
							</div>
						</div>
					</form>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br/><br/>
@endsection
