@extends('app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
               <li role="presentation">
                    <a href="{{ url('invoice/user/list') }}">
                        <font face='calibri' color='grey'><b>INVOICE LIST
                        <span class='badge badge-info'>@foreach ($result as $result) {{ $result->a }} @endforeach</span></b></font>
                    </a>
                </li>
                <li role="presentation" class="active">
                    <a>
                        <big><big><big><font face='calibri' color='grey'><b>INVOICE REJECT
                            <span class='badge badge-info'>@foreach ($result2 as $result2) {{ $result2->b }} @endforeach</span></b></font></big></big></big>
                    </a>
                </li>
            </ul>
                <br/><font face='calibri' color='grey'><b>LIST INVOICE REJECT FROM ACCOUNTING</b></font></font>
        	<div class="clearfix">&nbsp;</div>
                <table class="table table-striped table-bordered">
                <thead>
                    <tr class='success'>
                        <th><center><small><font face='calibri'>NO PENERIMAAN</font></small></center></th>
                        <th><center><small><font face='calibri'>DEPARTMENT</font></small></center></th>
                        <th><center><small><font face='calibri'>VENDOR</font></small></center></th>
                        <th><center><small><font face='calibri'>TGL TERIMA</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC NO</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC DATE</font></small></center></th>
                        <th><center><small><font face='calibri'>DUE DATE</font></small></center></th>
                        <th><center><small><font face='calibri'>CURR</font></small></center></th>
                        <th><center><small><font face='calibri'>AMOUNT</font></small></center></th>
                        <th><center><small><font face='calibri'>DOC NO</font></small></center></th>
                        <th><center><small><font face='calibri'>REJECT REASON</font></small></center></th>
                        <th><center><small><font face='calibri'></font></small></center></th>
                    </tr>
                </thead>
                <tbody>
            @if (count($invoice) > 0)
                @foreach ($invoice as $invoice)
                <?php 
                    date_default_timezone_set('Asia/Jakarta');
                    $date = date('Y-m-d');
                    if ($invoice->due_date < $date) {
                        echo"<tr class='danger'>";
                    } else {
                        echo"<tr class='warning'>";
                    }
                    ?>
                    <td><font face='calibri'>{{ $invoice->no_penerimaan }}</font></td>
                    <td><font face='calibri'>
                    @if ($invoice->dept_code == '1')
                        Purchasing
                    @elseif ($invoice->dept_code == '2')
                        General Affair
                    @elseif ($invoice->dept_code == '3')
                        BOD
                    @elseif ($invoice->dept_code == '5')
                        MIS
                    @elseif ($invoice->dept_code == '6')
                        HRD
                    @endif
                    </font></td>
                    <td><font face='calibri'>{{ $invoice->vendor }}</font></td>
                    <td><center><font face='calibri'>{{ $invoice->tgl_terima }}</font></center></td>
                    <td><font face='calibri'>{{ $invoice->doc_no }}</font></td>
                    <td><center><font face='calibri'>{{ $invoice->doc_date }}</font></center></td>
                    <td><center><font face='calibri'>{{ $invoice->due_date }}</font></center></td>
                    <td><font face='calibri'>{{ $invoice->curr }}</font></td>
                    <td><font face='calibri'>{{ $invoice->amount }}</font></td>
                    <td><font face='calibri'>{{ $invoice->doc_no_2 }}</font></td>
                    <td><font face='calibri'><small><b>{{ $invoice->remark_act }}</b><br/> ( {{$invoice->tgl_pending_act}} )</small></font></td>
                    <td>
                        <center>
                            <a href="{{ url('invoice/checked/user/'.$invoice->id) }}" class="btn btn-info btn-xs" onclick="return confirm('Are you sure to checked invoice with no penerimaan \'{{$invoice->no_penerimaan}}\' ?')">
                                <font face='calibri'><b>Checked</b></font>
                            </a>
                            <a href="{{ url('invoice/reject/user/'.$invoice->id) }}" class="btn btn-danger btn-xs">
                                <font face='calibri'><b>Reject</b></font>
                            </a>
                        </center>
                        
                    </td>
                </tr>
                @endforeach
            @else
                <tr class='warning'>
                    <td colspan="12"><center><font face='calibri'>No record to display</font></center></td>
                </tr>
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@if (count($invoice) > 0)
<script src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/js/dataTables.bootstrap.js')}}"></script>
<script>
    $(document).ready(function(){
        $('input[type="search"]').removeClass('form-control').removeClass('input-sm');
        $('.dataTables_filter').addClass('pull-right');
        $('.pagination').addClass('pull-right');
    });

    $('table').dataTable({
        "searching": true
    });
</script>
@endif
<br/>
@endsection