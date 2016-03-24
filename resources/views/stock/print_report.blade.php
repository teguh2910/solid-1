@extends('app')

@section('content')
	
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
       <br/>
      <div class="panel panel-success">
        <div class="panel-heading"><center><font face='calibri'><b>PRINT REPORT</b></font></center></div>
        <div class="panel-info"><div class="panel-heading">
        <div class="panel-body">
          
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/stock/print_result') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-3 control-label"><font face='calibri'>INPUT ID AREA</font></label>
              <div class="col-md-9">
                <input type='text' class="form-control" name="id_area" id="id_area" autofocus required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn-primary">
                  <span class='glyphicon glyphicon-print'></span> <font face='calibri'><b> PRINT</b></font>
                </button>
              </div>
            </div>
          </form>

        </div>
        </div></div>
      </div>
    </div>
  </div>
</div>
  <!-- Table -->
 


@endsection
