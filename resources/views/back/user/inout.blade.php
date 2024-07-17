@extends('layout.admin_app') 
 
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
 </style>
 @section('content')  
 <div class="container">
     <div class="row">
         <div class="col-12 mt-2">
             <div class="card  notob p-3">
                 <div class="card-header  text-center">
                     <h3>ລາຍການແຈ້ງຝາກ-ຖອນ</h3>
                     {{ $user_name }}
                 </div>
                 <div class="card-body p-1">
                     <div class="row">
                         
                         <div class="col-md-12 mb-3">
                             <div>
                                 
                                 <table class="table table-bordered custom-table table-striped table-hover"  style="border-radius: 10px !important;border: solid 1px black;">
                                     <thead> 
                                        <tr> 
                                            <th></th>
                                            <th>ທຸລະກຳ</th>
                                            <th>ວັນທີ</th>
                                            <th>ຈຳນວນ</th>
                                             
                                            <th colspan="2">ຈັດກາ່ນ</th>
                                        </tr> 
                                     </thead>
                                     <tbody>
                                        @foreach($order_inout as $r)
                                            @php($display='')
                                            @if($r->type=='in')
                                                @php($display='ຝາກເງິນ')
                                            @else
                                                @php($display='ຖອນເງິນ')
                                            @endif
                                            <tr>
                                                <td class="text-center">#{{ $r->id }}</td> 
                                                <td class="text-center">{{ $display }}</td> 
                                                <td class="text-center">{{ date('d-m-Y',strtotime($r->date)) }} / {{ date('H:i:s',strtotime($r->date)) }}</td>
                                                <th class="text-right"> {{ str_replace('-','',number_format($r->total)) }} ກີບ </th>
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
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <td colspan="6" class="text-right bg-danger text-white">
                                                
                                             </td>
                                         </tr>
                                     </tfoot>
                                 </table>
                             
                             </div>
                             <hr>
                         </div>
                     </div>
                     <div>
                         <div class="item-pagination d-flex justify-content-center">
                             {{ $order_inout->links('pagination.custom-pagination') }}
                         </div>
                     </div>
                     <br>
                     <a href="{{ route("admin.user") }}" class="btn btn-dark">ຍ້ອນກັບຫນ້າລູກຄ້າ</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
  
 @endsection