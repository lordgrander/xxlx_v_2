@extends('layout.app')  

<link rel="stylesheet" href="{{ asset('css/front-menu-list.css') }}">
@section('content')  
<div class="container">
     <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- <div class="card-header">  </div> -->

                
                <div class="card-body p-1">
                    <div class="container    "> 
                        <div class="row mt-2 notob">
                            <div class="col-md-2 mb-3">
                                @if(session('user_id'))
                                <p class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width:20px;"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c1.8 0 3.5-.2 5.3-.5c-76.3-55.1-99.8-141-103.1-200.2c-16.1-4.8-33.1-7.3-50.7-7.3l-91.4 0zm308.8-78.3l-120 48C358 277.4 352 286.2 352 296c0 63.3 25.9 168.8 134.8 214.2c5.9 2.5 12.6 2.5 18.5 0C614.1 464.8 640 359.3 640 296c0-9.8-6-18.6-15.1-22.3l-120-48c-5.7-2.3-12.1-2.3-17.8 0zM591.4 312c-3.9 50.7-27.2 116.7-95.4 149.7l0-187.8L591.4 312z"/></svg> &nbsp; User : {{ session('user_name') }}</p>
                                <p class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:20px;"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96l0 32 576 0 0-32c0-35.3-28.7-64-64-64L64 32zM576 224L0 224 0 416c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-192zM112 352l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z"/></svg> &nbsp; Credit : {{ number_format($money) }} ກີບ</p> 
                                     
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="container text-center  "> 
                        <div class="row mt-2 notob">
                            <div class="col-md-2 mb-3">
                                <a href="{{ route('buy.run','W') }}">
                                    <div class="feature-card">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 448 512"><path d="M320 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM125.7 175.5c9.9-9.9 23.4-15.5 37.5-15.5c1.9 0 3.8 .1 5.6 .3L137.6 254c-9.3 28 1.7 58.8 26.8 74.5l86.2 53.9-25.4 88.8c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l28.7-100.4c5.9-20.6-2.6-42.6-20.7-53.9L238 299l30.9-82.4 5.1 12.3C289 264.7 323.9 288 362.7 288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H362.7c-12.9 0-24.6-7.8-29.5-19.7l-6.3-15c-14.6-35.1-44.1-61.9-80.5-73.1l-48.7-15c-11.1-3.4-22.7-5.2-34.4-5.2c-31 0-60.8 12.3-82.7 34.3L57.4 153.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l23.1-23.1zM91.2 352H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h69.6c19 0 36.2-11.2 43.9-28.5L157 361.6l-9.5-6c-17.5-10.9-30.5-26.8-37.9-44.9L91.2 352z"/></svg> -->
                                        <span>ຊື້ເລກວິ້ງ</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3">
                                <a href="{{ route('buy.kick.cool') }}">
                                    <div class="feature-card">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 320 512"><path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"/></svg> -->
                                        <span>ຊື້ເລກຄີກ/ຄູ່</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3">
                                <a href="{{ route('buy.hight.low') }}">
                                    <div class="feature-card">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 512 512"><path d="M344 0H488c13.3 0 24 10.7 24 24V168c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-39-39-87 87c-9.4 9.4-24.6 9.4-33.9 0l-32-32c-9.4-9.4-9.4-24.6 0-33.9l87-87L327 41c-6.9-6.9-8.9-17.2-5.2-26.2S334.3 0 344 0zM168 512H24c-13.3 0-24-10.7-24-24V344c0-9.7 5.8-18.5 14.8-22.2s19.3-1.7 26.2 5.2l39 39 87-87c9.4-9.4 24.6-9.4 33.9 0l32 32c9.4 9.4 9.4 24.6 0 33.9l-87 87 39 39c6.9 6.9 8.9 17.2 5.2 26.2s-12.5 14.8-22.2 14.8z"/></svg> -->
                                        <span>ຊື້ເລກສູງຕໍ່າ</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3"> 
                                <a href="{{ route('buy.run','T') }}">
                                    <div class="feature-card">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 448 512"><path d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM352 352a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 192a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg> -->
                                        <span>ຊື້ເລກ 2 ໂຕ</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3">
                                <a href="#">
                                    <div class="feature-card bg-light text-dark">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 96a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm64 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm128 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg> -->
                                        <span>ຊື້ເລກ 3 ໂຕ ( ກຳລັງມາໄວໆນີ້ )</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3">
                                <a href="#">
                                    <div class="feature-card bg-light text-dark">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 448 512"><path d="M0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm160 64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zM352 160a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM320 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg> -->
                                        <span>ຊື້ເລກ 4 ໂຕ ( ກຳລັງມາໄວໆນີ້ )</span> 
                                    </div>
                                </a>
                            </div> 
                            <div class="col-md-2 mb-3">
                                <a href="#">
                                    <div class="feature-card bg-light text-dark">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" style="width:1rem;" viewBox="0 0 448 512"><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm64 96a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM96 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM224 224a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm64-64a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg> -->
                                        <span>ຊື້ເລກ 5 ໂຕ ( ກຳລັງມາໄວໆນີ້ )</span> 
                                    </div>
                                </a>
                            </div> 

                             @if(session('user_id'))
                                    <table class="table table-bordered">
                                    @foreach($prize as $r) 
                                        @php($display_text = '')
                                        @php($display_com = '')
                                        @if($r->name == 'ABC')
                                        @elseif($r->name == 'WING')
                                            @php($display_text = 'ວິ້ງ')
                                            @php($display_com = $r->com.'%')
                                        @elseif($r->name == 'TWO')
                                            @php($display_text = 'ເລກສອງໂຕ')
                                            @php($display_com = $r->com.'%')
                                        @elseif($r->name == 'THREE')
                                            @php($display_text = 'ເລກສາມໂຕ')
                                            @php($display_com = 'Coming Soon')
                                        @elseif($r->name == 'FOUR')
                                            @php($display_text = 'ເລກສີ່ໂຕ')
                                            @php($display_com = 'Coming Soon')
                                        @elseif($r->name == 'FIVE')
                                            @php($display_text = 'ເລກຫ້າໂຕ')
                                            @php($display_com = 'Coming Soon')
                                        @elseif($r->name == 'HIGHTLOW')
                                            @php($display_text = 'ສູງຕໍ່າ')
                                            @php($display_com = $r->com.'%')
                                        @elseif($r->name == 'KICKCOOL')
                                            @php($display_text = 'ຄີກຄູ່')
                                            @php($display_com = $r->com.'%')
                                        @else
                                        @endif
                                        <tr>
                                            <td>{{ $display_text }}</td>
                                            <td width="30%" class="text-right">{{ $display_com }}</td>
                                        </tr>
                                    @endforeach
                                    </table>
                                @endif
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <div class="col-12 mt-2">
            <div class="card notob">
                <div class="card-header text-center"> 
                    <h3>ຜົນອອກ</h3>
                </div>
                <div class="card-body p-1">
                    <div class="container text-center  "> 
                        <div class="row mt-2 ">
                            <div class="col-md-12 mb-3"> 
                                    <table class="table table-bordered   ">
                                        <thead>
                                            <tr> 
                                                <th class="text-center">ງວດວັນທີ</th>
                                                <th class="text-center">ສາຍບົນ</th>
                                                <th class="text-center">ສາຍລ່າງ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($box as $r)
                                                <tr> 
                                                    <td class="text-center">{{ date('d-m-Y',strtotime($r->created_at)) }}</td>
                                                    <td class="text-right">{{ $r->up }}</td>
                                                    <td class="text-right">{{ $r->down }}</td>
                                                </tr>
                                            @endforeach 
                                        </tbody>
                                        <tfoot> 
                                        </tfoot>
                                    </table> 
                                    <div class="item-pagination d-flex justify-content-center">
                                        {{ $box->links('pagination.custom-pagination')  }}
                                    </div>
                            </div>  
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        
     </div>
</div>
    
@endsection