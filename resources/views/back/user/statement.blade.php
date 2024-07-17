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
                     <h3>ລາຍການເຄື່ອນໄຫວໃນກະເປົ໋າ</h3>
                     {{ $user_name }}
                     <br>
                     ເງິນປະຈຸບັນ : {{ number_format($check_money) }} ກິບ
                 </div>
                 <div class="card-body p-1">
                     <div class="row">
                         
                         <div class="col-md-12 mb-3">
                             <div>
                                 
                                 <table class="table table-bordered custom-table table-striped table-hover"  style="border-radius: 10px !important;border: solid 1px black;">
                                     <thead> 
                                         <tr>
                                             <td width="">ທຸລະກຳ</td>
                                             <td class="text-center">ຈຳນວນ</td>
                                             <td class="text-center">ວັນທີ</td>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach($wallet_transaction as $rx) 
                                        @php($display = '')
                                        @php($color= 'text-success')
                                        @if($rx->type=='Deposit')
                                            @php($display = 'ຝາກ') 
                                            @php($color= 'text-success')
                                        @else
                                            @php($display = 'ຖອນ') 
                                            @php($color= 'text-danger') 
                                        @endif
                                            <tr>
                                                <td>{{ $display }}</td>
                                                <td class="{{ $color }}">{{ number_format($rx->amount) }} ກີບ</td>
                                                <td>{{ date('d-m-Y',strtotime($rx->created_at)) }}</td>
                                            </tr> 
                                        @endforeach
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <td colspan="3" class="text-right bg-danger text-white">
                                                
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
                             {{ $wallet_transaction->links('pagination.custom-pagination') }}
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