@extends('layout.admin_app') 
@section('content')  
<style>
    th
    {
        text-align:center;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="title text-center">
                <h4 class="notob">ແຈ້ງຖອນ</h4>
            </div>
            @if($out)
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>ຊື່</th>
                        <th>ວັນທີ</th>
                        <th>ຈຳນວນ</th>
                        <th></th>
                        <th></th>
                    </tr> 
                    @foreach($out as $r)
                        <tr>
                            <td class="text-center">{{ $r->HaveUser->username }}</td>
                            <td class="text-center">{{ date('d-m-Y',strtotime($r->date)) }} / {{ date('H:i:s',strtotime($r->date)) }}</td>
                            <th class="text-right">ຖອນ {{ str_replace('-','',number_format($r->total)) }} ກີບ</th>
                            <td class="text-center">@if($r->img)<a href="{{ asset($r->img) }}" target="_BLANK">ຫຼັກຖານ</a>@endif</td>
                            <td class="text-center"><a href="{{ route('admin.withdraw.select',[$r->id,$r->token]) }}">ຈັດການ</a></td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="title text-center">
                <h4 class="notob">ແຈ້ງຝາກ </h4>
            </div>
            @if($in)
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>ຊື່</th>
                        <th>ວັນທີ</th>
                        <th>ຈຳນວນ</th>
                        <th></th>
                        <th></th>
                    </tr> 
                    @foreach($in as $r)
                        <tr>
                            <td class="text-center">{{ $r->HaveUser->username }}</td>
                            <td class="text-center">{{ date('d-m-Y',strtotime($r->date)) }} / {{ date('H:i:s',strtotime($r->date)) }}</td>
                            <th class="text-right">ຝາ່ກ {{ str_replace('-','',number_format($r->total)) }} ກີບ</th>
                            <td class="text-center">@if($r->img)<a href="{{ asset($r->img) }}" target="_BLANK">ຫຼັກຖານ</a>@endif</td>
                            <td class="text-center"><a href="{{ route('admin.withdraw.select',[$r->id,$r->token]) }}">ຈັດການ</a></td>
                        </tr>
                    @endforeach
                </table> 
            @endif
        </div> 
    </div>
</div>

<hr> 
@endsection
