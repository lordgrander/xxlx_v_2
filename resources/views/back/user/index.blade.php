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
            <div class="title text-center">
                <h4 class="notob">ລາຍການລູກຄ້າ</h4>
            </div> 
                <table class="table table-bordered table-hover table-striped notob">
                    <tr>
                        <th>ຊື່</th>
                        <th>ວັນທີ</th>
                        <th>ສະຖານະ</th>
                        <th>ໄອພີຫຼ້າສຸດ</th>
                        <th>ຈຳນວນເງິນ</th>
                        <th>ຈັດການ</th>
                    </tr> 

                    @foreach($users As $r)
                        <tr>
                            <td class="text-center">{{ $r->username }}</td>
                            <td class="text-center">{{ $r->phone }}</td>
                            <td class="text-center">{{ $r->status }}</td>
                            <td class="text-center">{{ $r->last_login_ip }}</td> 
                            <td class="text-right">{{ number_format($r->current_money) }} ກິບ</td>
                            <td class="text-right">
                                <a href="{{ route('admin.user.money', $r->encode) }}">ຈັດການເງິນ</a> |
                                <a href="{{ route('admin.user.edit', $r->encode) }}">ແກ້ໄຂ</a> |
                                <a href="{{ route('admin.user.money', $r->encode) }}">ເບີ່ງຂໍ້ມູນ</a>
                            </td>
                        </tr>
                    @endforeach
                     
                </table> 
                
                <div>
                            <div class="item-pagination d-flex justify-content-center">
                                {{ $users->links('pagination.custom-pagination') }}
                            </div>
                        </div>
        </div> 
    </div>
</div>

<hr> 
@endsection
