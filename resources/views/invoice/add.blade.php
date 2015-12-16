@extends('app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"><center><font face='calibri'><b>CREATE INVOICE</b></font></center></div>
        <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/invoice/save') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>No Penerimaan</font></label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="no_penerimaan" id="no_penerimaan" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Dept Code</font></label>
              <div class="col-md-9">
               <select class="form-control" name="dept_code" id="dept_code">
                     <option value="1">Purchasing</option>
                     <option value="2">General Affair</option>
                     <option value="3">BOD</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Vendor</font></label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="vendor" id="vendor" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Tanggal Terima</font></label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="tgl_terima" id="tgl_terima" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>DOC No.</font></label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="doc_no" id="doc_no" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>DOC Date</font></label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="doc_date" id="doc_date" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Due Date</font></label>
              <div class="col-md-9">
                <input type="date" class="form-control" name="due_date" id="due_date" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Curr</font></label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="curr" id="curr" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>Amount</font></label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="amount" id="amount" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label"><font face='calibri'>DOC No.</font></label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="doc_no_2" id="doc_no_2">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-9 col-md-offset-2">
                <button type="submit" class="btn btn-primary btn-sm">
                  <span class='glyphicon glyphicon-floppy-saved'></span> <font face='calibri'><b>SAVE</b></font>
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                  <span class='glyphicon glyphicon-repeat'></span> <font face='calibri'><b>RESET</b></font>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection