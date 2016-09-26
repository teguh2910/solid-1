@extends('app')
@section('content')
<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-body">
            @foreach ($check as $check)
            <div class="col-lg-6">
                <a href="{{ url('stock/view_transaction') }}">
                    <button class='btn btn-xs btn-info'>
                        <i class='glyphicon glyphicon-chevron-left'></i>&nbsp;<b>BACK TO DATA TRANSACTION</b>
                    </button>
                </a><br/><br/>
                <div class="form-group">
                    <div class="col-md-7">
                        <font face='calibri'><b>Plant</b></font><br/>
                        <input type='text' value="{{$check->type_plant}}" class="form-control" disabled>
                    </div>
                   <div class="col-md-7">
                        <font face='calibri'><b>Code Area</b></font><br/>
                        <input type='text' value="{{$check->code_area}}" class="form-control" disabled>
                    </div>
                   <div class="col-md-7">
                        <font face='calibri'><b>Name Area</b></font><br/>
                        <input type='text' value="{{$check->name_area}}" class="form-control" disabled>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="clearfix">&nbsp;</div>
                <table class="table table-hover table-bordered table-condensed">
                    <thead>
                        <tr bgcolor='#00008B'>
                            <th><font face='calibri' color='white'>Back No</font></th>
                            <th><font face='calibri' color='white'>Part Number</font></th>
                            <th><font face='calibri' color='white'>Part Name</font></th>
                            <th><font face='calibri' color='white'>Qty / Box</font></th>
                            <th><font face='calibri' color='white'>Unit</font></th>
                            <th><font face='calibri' color='white'>Amount Of Box</font></th>
                            <th><font face='calibri' color='white'>Amount Of Pcs</font></th>  
                            <th><font face='calibri' color='white'>Total (Pcs)</font></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (count($t_transaction) > 0)
                        @foreach($t_transaction as $t_transaction)
                            @if ($t_transaction->total_pcs == '0')
                                <tr bgcolor='#ADE8E6'>
                            @else
                                <tr bgcolor='#A9A9A9'>
                            @endif
                            <td><font face='calibri'>{{ $t_transaction->back_number }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->part_number }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->part_name }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->qty_box }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->unit }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->amount_box }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->amount_pcs }}</font></td>
                            <td><font face='calibri'>{{ $t_transaction->total_pcs }}</font></td>
                            <td>
                                <center>
                                    <a href="{{ url('stock/input_transaction/'.$t_transaction->id) }}" class="btn btn-primary btn-xs" target="\blank">
                                        <i class="glyphicon glyphicon-plus"></i>
                                    </a>            
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                        <tr bgcolor='#FFFFFF'>
                            <td colspan="9">
                                <center>
                                    <font face='calibri'>No record to display</font>
                                </center>
                            </td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@if (count($t_transaction) > 0)
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.dataTables_filter').addClass('pull-right');
        $('.pagination').addClass('pull-right');
    });

    $('table').dataTable({
        "searching": true
    });
</script>
@endif
@endsection

