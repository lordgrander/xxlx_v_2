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
                     <h3>ລາຍການທີ່ຊະນະ</h3>
                     {{ $user_name }}
                 </div>
                 <div class="card-body p-1">
                     <div class="row">
                         
                         <div class="col-md-12 mb-3">
                             <div>
                                 
                                 <table class="table table-bordered custom-table table-striped table-hover"  style="border-radius: 10px !important;border: solid 1px black;">
                                     <thead> 
                                         <tr>
                                             <td width="">ແທງ</td>
                                             <td class="text-center">ວັນທີ</td>
                                             <td class="text-center">ຈຳນວນ</td>
                                             <td class="text-center">ເງິນຊະນະ</td>
                                             <td class="text-center">ໂຕຄູນ</td>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @foreach($select as $rx)  
                                            @php($display_text = '')
                                            @php($display_text_2 = '')

                                            @if($rx->name == 'ABC')
                                            @elseif($rx->name == 'WING')
                                            @php($display_text = 'ວິ້ງ')
                                            @elseif($rx->name == 'TWO')
                                            @php($display_text = 'ເລກສອງໂຕ')
                                            @elseif($rx->name == 'THREE')
                                            @php($display_text = 'ເລກສາມໂຕ')
                                            @elseif($rx->name == 'FOUR')
                                            @php($display_text = 'ເລກສີ່ໂຕ')
                                            @elseif($rx->name == 'FIVE')
                                            @php($display_text = 'ເລກຫ້າໂຕ')
                                            @elseif($rx->name == 'HIGHTLOW')
                                            @php($display_text = 'ສູງຕໍ່າ')
                                            @elseif($rx->name == 'KICKCOOL')
                                            @php($display_text = 'ຄີກຄູ່')
                                            @else
                                            @endif

                                                                
                                            @php($display_text_2 = '')
                                            @if($rx->type == 'UP')
                                            @php($display_text_2 = 'ບົນ')
                                            @elseif($rx->type == 'DOWN')
                                            @php($display_text_2 = 'ລ່າງ')
                                            @else
                                            @endif
                                            <tr>
                                                <td>{{ $display_text }} - {{ $display_text_2 }}</td>
                                                <td>{{ date('d-m-Y',strtotime($rx->created_at)) }}</td>
                                                <td class=" ">{{ number_format($rx->price) }} ກີບ</td>
                                                <td class=" ">{{ number_format($rx->price*$rx->mul) }} ກີບ</td>
                                                <td>x{{ $rx->mul }}</td>
                                            </tr> 
                                        @endforeach
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                             <td colspan="5" class="text-right bg-danger text-white">
                                                
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
                             {{ $select->links('pagination.custom-pagination') }}
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