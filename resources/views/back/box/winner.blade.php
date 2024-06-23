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
                <h3>ຜູ້ຊະນະ</h3> 
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 

                         
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <table class="table table-bordered">
                                <tr>
                                    <th></th>
                                    <th>ລູກຄ້າ</th>
                                    <th colspan="2"></th> 
                                    <th>ໝາຍເລກ</th>
                                    <th>ລາຄາຊື້</th>
                                    <th>ຊະນະ</th>
                                    <th>ລາງວັນ</th>
                                </tr>
                                @php($total_buy=0)
                                @php($total_win=0)
                                @php($count=1)
                                @foreach($select as $r)
                                    @php($display_text = '')
                                    @php($number = $r->number)
                                    @if($r->name=='ABC')
                                    @elseif($r->name=='WING')
                                        @php($display_text = 'ວິ້ງ') 
                                    @elseif($r->name=='TWO')
                                        @php($display_text = 'ເລກສອງໂຕ') 
                                    @elseif($r->name=='THREE')
                                        @php($display_text = 'ເລກສາມໂຕ') 
                                    @elseif($r->name=='FOUR')
                                        @php($display_text = 'ເລກສີ່ໂຕ') 
                                    @elseif($r->name=='FIVE')
                                        @php($display_text = 'ເລກຫ້າໂຕ') 
                                    @elseif($r->name=='HIGHTLOW')
                                        @php($display_text = 'ສູງຕໍ່າ')  
                                        @if($r->number=='HIGHT')
                                            @php($number="ສູງ")
                                        @else
                                            @php($number="ຕໍ່າ")
                                        @endif
                                    @elseif($r->name=='KICKCOOL')
                                        @php($display_text = 'ຄີກຄູ່') 
                                        @if($r->number=='KICK')
                                            @php($number="ຄີກ")
                                        @else
                                            @php($number="ຄູ່")
                                        @endif
                                    @else
                                    
                                    @endif

                                            
                                    @php($display_text_2 = '')
                                    @if($r->type=='UP')
                                        @php($display_text_2 = 'ບົນ') 
                                    @elseif($r->type=='DOWN')
                                        @php($display_text_2 = 'ລ່າງ') 
                                    @else
                                    @endif
                                    <tr>
                                        <td class="text-center">{{ $count++ }}</td>
                                        <td class="text-center">{{ $r->bINUser->username }}</td>
                                        <td class="text-center">{{ $display_text }} </td>
                                        <td class="text-center">{{ $display_text_2 }} </td>
                                        <td class="text-center">  {{ $number }}</td>
                                        <td class="text-right">{{ number_format($r->price) }} ກິບ</td>
                                        <td class="text-right">{{ number_format($r->price*$r->mul) }} ກິບ</td>
                                        <td class="text-right">x{{  $r->mul  }}</td> 
                                    </tr>
                                    @php($total_buy+=$r->price)
                                    @php($total_win+=($r->price*$r->mul))
                                @endforeach
                                <tr>
                                    <td colspan="5"></td>
                                    <td class="text-right">ລວມ : {{ number_format($total_buy) }} ກິບ</td>
                                    <td class="text-right">ລວມ : {{ number_format($total_win) }} ກິບ</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>  
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<hr> 
 
@endsection
