



@extends('layout.admin_app') 
@section('content')  
<style>
    th
    {
        text-align:center;
    }
</style>
<style>
    .custom-table {
    max-width: 50%;
    margin: auto;
}

.custom-table td,
.custom-table th {
    vertical-align: middle;
    text-align: center;
    font-size: 14px;
}

@media (max-width: 768px) {
    .custom-table {
        max-width: 100%;
        min-width: 100%;
    }

    .custom-table td,
    .custom-table th {
        font-size: 12px;
    }
}

.custom-table .text-right {
    text-align: right;
}
body
{
    background:black!important;
}
</style>
<div class="container-fluid">
    <div class="row"> 
        <div class="card  notob p-3">
            <div class="card-header  text-center"> 
                <h3>ລາຍການແທງ</h3> 
                ງວດວັນທີ : {{ date('d-m-Y',strtotime($box->created_at)) }}
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 

                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td class="text-center">ຊື້ຜູ້ໃຊ້</td> 
                            <td class="text-center">ວິ້ງ</td>
                            <td class="text-center">ເລກສອງໂຕ</td>
                            <td class="text-center">ເລກສາມໂຕ</td>
                            <td class="text-center">ເລກສີ່ໂຕ</td>
                            <td class="text-center">ເລກຫ້າໂຕ</td>
                            <td class="text-center">ສູງຕໍ່າ</td>
                            <td class="text-center">ຄີກຄູ່</td>
                            <td class="text-center">ລວມທັງຫມົດ</td>
                            <td class="text-center">ຫັກຄ່າຄອມ</td>
                            <td class="text-center">ຄ່າຄອມ</td>
                            <td class="text-center">ຍອດຊະນະ</td>
                        </tr>  
                    @php($total=0)
                    @php($total_com=0)
                    @php($total_af_com=0)
                    @php($total_win=0)
                    @foreach($result as $r)
                        @php($win_price = 0)
                        @foreach($win as $rw)
                            @if($rw->user_id==$r['user_id'])
                                @php($win_price = $rw->total_win)
                            @endif
                        @endforeach
                        <tr>
                            <td class="text-center">{{ $r['username'] }} {{ $r['user_id'] }}</td> 
                            <td class="text-right">{{ number_format($r['WING']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['TWO']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['THREE']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['FOUR']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['FIVE']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['HIGHTLOW']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['KICKCOOL']) }} ກີບ</td>
                            <td class="text-right">{{ number_format($r['WING']+$r['TWO']+$r['THREE']+$r['FOUR']+$r['FIVE']+$r['HIGHTLOW']+$r['KICKCOOL']) }} ກີບ</td>
                            <td class="text-right">{{ number_format(($r['WING']*(100-$get_data['WING'])/100) +($r['TWO']*(100-$get_data['TWO'])/100)+($r['THREE']*(100-$get_data['THREE'])/100)+($r['FOUR']*(100-$get_data['FOUR'])/100)+($r['FIVE']*(100-$get_data['FIVE'])/100)+($r['HIGHTLOW']*(100-$get_data['HIGHTLOW'])/100)+($r['KICKCOOL']*(100-$get_data['KICKCOOL'])/100)) }} ກີບ</td>
                            <td class="text-right">{{ number_format(($r['WING']+$r['TWO']+$r['THREE']+$r['FOUR']+$r['FIVE']+$r['HIGHTLOW']+$r['KICKCOOL'])-(($r['WING']*(100-$get_data['WING'])/100) +($r['TWO']*(100-$get_data['TWO'])/100)+($r['THREE']*(100-$get_data['THREE'])/100)+($r['FOUR']*(100-$get_data['FOUR'])/100)+($r['FIVE']*(100-$get_data['FIVE'])/100)+($r['HIGHTLOW']*(100-$get_data['HIGHTLOW'])/100)+($r['KICKCOOL']*(100-$get_data['KICKCOOL'])/100))) }} ກີບ</td>
                            <td class="text-right">{{ number_format($win_price) }} ກີບ</td>
                        </tr>
                    @php($total+=($r['WING']+$r['TWO']+$r['THREE']+$r['FOUR']+$r['FIVE']+$r['HIGHTLOW']+$r['KICKCOOL'])) 

                    @php($total_com+=(($r['WING']+$r['TWO']+$r['THREE']+$r['FOUR']+$r['FIVE']+$r['HIGHTLOW']+$r['KICKCOOL'])-(($r['WING']*(100-$get_data['WING'])/100) +($r['TWO']*(100-$get_data['TWO'])/100)+($r['THREE']*(100-$get_data['THREE'])/100)+($r['FOUR']*(100-$get_data['FOUR'])/100)+($r['FIVE']*(100-$get_data['FIVE'])/100)+($r['HIGHTLOW']*(100-$get_data['HIGHTLOW'])/100)+($r['KICKCOOL']*(100-$get_data['KICKCOOL'])/100)))) 
                    @php($total_af_com+=(($r['WING']*(100-$get_data['WING'])/100) +($r['TWO']*(100-$get_data['TWO'])/100)+($r['THREE']*(100-$get_data['THREE'])/100)+($r['FOUR']*(100-$get_data['FOUR'])/100)+($r['FIVE']*(100-$get_data['FIVE'])/100)+($r['HIGHTLOW']*(100-$get_data['HIGHTLOW'])/100)+($r['KICKCOOL']*(100-$get_data['KICKCOOL'])/100)))
                    @php($total_win+=$win_price)
                    
                    @endforeach
                        <tr>
                            <td class="text-right"  colspan="12" >
                                <p><u>ລວມທັງຫມົດ : {{ number_format($total) }} ກີບ</u></p>
                                <p><u>ລວມຫັກຄ່າຄອມ : {{ number_format($total_af_com) }} ກີບ</u></p>
                                <p><u>ລວມຄ່າຄອມ : {{ number_format($total_com) }} ກີບ</u></p>
                                <p><u>ລວມຍອດຊະນະ : {{ number_format($total_win) }} ກີບ</u></p>

                            </td> 
                        </tr>
                    </table> 

                    </div>  
                </div>
            </div> 
        </div>
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
@endsection
