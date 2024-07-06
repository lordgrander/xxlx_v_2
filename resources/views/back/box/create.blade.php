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
                <h3>ສ້າງງວດເລກ</h3> 
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <center>
                            <button class="btn btn-danger accept">ສ້າງງວດ</button>
                        </center>

                         
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="form-group">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ວັນທີ</th>
                                    <th>ບົນ</th>
                                    <th>ລ່າງ</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($box as $r)
                                    @if($r->status=='BUYING') 
                                        <tr>
                                            <td class="text-center">{{ date('d-m-Y',strtotime($r->created_at)) }}</td>
                                            <td class="text-right"><input type="text" class="form-control" id="up" autocomplete="OFF"></td>
                                            <td class="text-right"><input type="text" class="form-control" id="down" autocomplete="OFF"></td>
                                            <td class="text-right"><button class="btn btn-danger save_to_tell"  data-id="{{ $r->id }}">ບັນທືກ</button></td>
                                        </tr>
                                    @elseif($r->status=='TELLING')
                                        <tr>
                                            <td class="text-center">{{ date('d-m-Y',strtotime($r->created_at)) }}</td>
                                            <td class="text-right">{{ $r->up }}</td>
                                            <td class="text-right">{{ $r->down }}</td>
                                            <td class="text-right">
                                                <button class="btn btn-danger">ແກ້ໄຂ</button>
                                                <button class="btn btn-danger">ປະກາດຜົນ</button>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td class="text-center">{{ date('d-m-Y',strtotime($r->created_at)) }}</td>
                                            <td class="text-right">{{ $r->up }}</td>
                                            <td class="text-right">{{ $r->down }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('admin.view.box', $r->id) }}">ເບີ່ງການຂາຍ</a>
                                                &nbsp;|&nbsp;
                                                <a href="{{ route('box.see.winner', $r->token) }}">ເບີ່ງຜູ້ຊະນະ</a> 
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div> 
                        <div>
                            <div class="item-pagination d-flex justify-content-center">
                                {{ $box->links('pagination.custom-pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        // jQuery code to go back to the previous page
        $(document).ready(function() {
            $('#backButton').click(function(event) {
                event.preventDefault(); // Prevent the default action of the anchor tag
                window.history.back(); // Go back to the previous page in the browser history
            });

            $('.accept').click(function(event) {
                $('.accept').prop('disabled','disabled');  

                if(confirm("ຍືນຢັນ"))
                    { 
                        
                        let formData = {
                            id: '0', 
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('box.create.start') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                        window.location.href = " "; 
                                } else {
                                    alert('ຍັງມີງວດທີ່ກຳລັງຂາຍຫຼືກຳລັງຈະປະກາດຜົນ ຕ້ອງປິດກ່່ອນເພື່ອຈະທຳການສ້າງໃຫມ່ໄດ້'); 
                                    $('.accept').prop('disabled',''); 
                                }
                            },
                            error: function(error) {
                                console.log(error); 
                                $('.accept').prop('disabled','');
                            }
                        });
                    }
                    else
                    { 
                        $('.accept').prop('disabled','');
                    }
            }); 

            $('.save_to_tell').click(function(event) {

                let up = $('#up').val();
                let down = $('#down').val();

                if(up=='')
                {
                    $('#up').focus(); 
                    return false;
                }
                else
                {
                    if(up.length<5)
                    {
                        alert('ບົນຫນ້ອຍກວ່າ 5');
                        $('#up').focus(); 
                        return false;
                    }
                }

                if(down=='')
                {
                    $('#down').focus(); 
                    return false;
                }
                else
                { 
                    if(down.length<5)
                    {
                        alert('ລ່າງຫນ້ອຍກວ່າ 5');
                        $('#down').focus();
                        return false;
                    }
                }
                $('.save_to_tell').prop('disabled','disabled'); 

                if(confirm("ຍືນຢັນບັນທືຶກຜົນ"))
                    {  
                        let formData = {
                            id: $(this).attr('data-id'), 
                            up: $('#up').val(), 
                            down: $('#down').val(), 
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('box.tell.start') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                        location.reload(); 
                                } else { 
                                    $('.accept').prop('disabled',''); 
                                }
                            },
                            error: function(error) {
                                console.log(error); 
                                $('.accept').prop('disabled','');
                            }
                        });
                    }
                    else
                    {

                    }
            }); 

            
        });
    </script>
@endsection
