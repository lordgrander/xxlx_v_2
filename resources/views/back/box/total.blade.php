



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
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <table class="table table-bordered">
                        
                            @php($currentUserId = null)
                            @php($userTotal = 0)
                            @php($grandTotal = 0)
                       

                        @foreach($results as $r)
                                @php($display_text = $r->number)

                                @if($r->name == 'ABC')
                                @elseif($r->name == 'WING')
                                @php($display_text = 'ວິ້ງ')
                                @elseif($r->name == 'TWO')
                                @php($display_text = 'ເລກສອງໂຕ')
                                @elseif($r->name == 'THREE')
                                @php($display_text = 'ເລກສາມໂຕ')
                                @elseif($r->name == 'FOUR')
                                @php($display_text = 'ເລກສີ່ໂຕ')
                                @elseif($r->name == 'FIVE')
                                @php($display_text = 'ເລກຫ້າໂຕ')
                                @elseif($r->name == 'HIGHTLOW')
                                @php($display_text = 'ສູງຕໍ່າ')
                                @elseif($r->name == 'KICKCOOL')
                                @php($display_text = 'ຄີກຄູ່')
                                @else
                                @endif

                            <tr>
                                <td>{{ $r->bINUser->username }}</td>
                                <td class="text-center">{{ $display_text }}</td>          
                                <td class="text-right">{{ number_format($r->total_price) }} ກີບ</td>
                            </tr>
 
                                @php($userTotal += $r->total_price)
                                @php($grandTotal += $r->total_price)
                                @php($currentUserId = $r->user_id)
                            

                           
                            @if ($loop->last || $results[$loop->index + 1]->user_id !== $r->user_id)
                                <tr>
                                    <td colspan="2"></td>
                                    <td class="text-right"><u><strong>ຍອດລວມ :</strong> {{ number_format($userTotal) }} ກີບ</u></td>
                                </tr>
                                
                                @php($userTotal = 0)
                                 
                            @endif
                        @endforeach
                        <tr>
                            <td class="text-right"  colspan="3" >
                                <u>ລວມທັງຫມົດ : {{ number_format($grandTotal) }} ກີບ</u>
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
