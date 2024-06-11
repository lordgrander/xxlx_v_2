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
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title text-center notob">
                @if($thing=='out')
                <h3>ແຈ້ງຖອນ</h3>
                Menu : 
                <small><a href="{{ route('admin.wallet.thing.list',$thing) }}"><u>ເບີ້ງລາຍການແຈ້ງຖອນທັງໝົດ</u></a></small>
                | 
                <small><a href="{{ route('admin.wallet.thing','in') }}"><u>ແຈ້ງຝາກ</u></a></small>
                @elseif($thing="in")
                <h3>ແຈ້ງຝາກ</h3> 
                Menu : 
                <small><a href="{{ route('admin.wallet.thing.list',$thing) }}"><u>ເບີ້ງລາຍການແຈ້ງຝາກທັງໝົດ</u></a></small>
                |
                <small><a href="{{ route('admin.wallet.thing','out') }}"><u>ແຈ້ງຖອນ</u></a></small>
                @else
                @endif
            </div>
            <table class="table table-bordered table-hover table-striped noto">
                <tr>
                    <th>ຊື່</th>
                    <th>ວັນທີ</th>
                    <th>ຈຳນວນ</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr> 
                @foreach($select as $r)
                    <tr>
                        <td class="text-center">#{{ $r->id }}</td>
                        <td class="text-center">{{ $r->HaveUser->username }}</td>
                        <td class="text-center">{{ date('d-m-Y',strtotime($r->date)) }} / {{ date('H:i:s',strtotime($r->date)) }}</td>
                        <th class="text-right"> {{ str_replace('-','',number_format($r->total)) }} ກີບ ( {{ $r->type }} )</th>
                        <td class="text-center">@if($r->img)<a href="{{ asset($r->img) }}" target="_BLANK">ຫຼັກຖານ</a>@endif</td>
                        @if($r->status=='Waiting')
                            <td class="text-center"><button class="btn btn-warning"></button> <a href="{{ route('admin.withdraw.select',[$r->id,$r->token]) }}">ຈັດການ</a></td>
                        @elseif($r->status=="Success")
                            <td class="text-center">
                                <button class="btn btn-success"></button> {{ $r->status }}
                            </td> 
                        @elseif($r->status=="Cancel") 
                            <td class="text-center">
                                <button class="btn btn-danger"></button> {{ $r->status }}
                                <p>ສາເຫດທີ່ຍົກເລີກ : {{ $r->cancel_reason }}</p>
                            </td> 
                        @else
                            <td></td>
                        @endif
                    </tr>
                @endforeach
            </table>
                    <div>
                        <div class="item-pagination d-flex justify-content-center">
                            {{ $select->links('pagination.custom-pagination') }}
                        </div>
                    </div>
        </div> 
    </div>
</div>

<hr> 
@endsection
