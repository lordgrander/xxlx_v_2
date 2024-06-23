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
                @if($select->type=='out')
                <h3>ແຈ້ງຖອນ</h3>
                
                @elseif($select->type="in")
                <h3>ແຈ້ງຝາກ</h3> 
                
                @else
                @endif
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                        <table class="table table-bordered custom-table"  style="border-radius: 10px !important;border: solid 1px black;">
                            <tr>
                                <td>ຊື່ : {{ $select->HaveUser->username }}</td>
                                <td>ວັນທີ : {{ date('d-m-Y',strtotime($select->date)) }}</td>
                                <td>ເວລາ : {{ date('H:i:s',strtotime($select->date)) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-danger"><h6>ເລກບັນຊີ : {{ ($select->bank_number) }}</h6></td>
                            </tr>
                            <tr>
                                <td colspan="3"><h1>ຈຳນວນ : {{ number_format($select->total) }} ກີບ</h1></td>
                            </tr>
                            <tr>
                                <td  colspan="3" class="text-center">
                                    <center>
                                        <img src="{{ asset($select->img) }}" alt="" width="30%">
                                    </center>
                                </td>
                            <tr>
                                <td>
                                    <button class="btn btn-success form-control accept" id="{{ $select->id }}" data-token="{{ $select->token }}"><h3>ຕົກລົງ</h3></button>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="cancel_reason" placeholder="ສາເຫດທີ່ຍົກເລີກ ( ຖ້າຍົກເລີກ )">
                                </td>
                                <td>
                                    <button class="btn btn-danger form-control cancel" id="{{ $select->id }}" data-token="{{ $select->token }}"><h3>ຍົກເລີກ</h3></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="{{ redirect()->back() }}" class="btn btn-dark form-control" id="backButton">ກັບຄືນ</a>
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
<script>
        // jQuery code to go back to the previous page
        $(document).ready(function() {
            $('#backButton').click(function(event) {
                event.preventDefault(); // Prevent the default action of the anchor tag
                window.history.back(); // Go back to the previous page in the browser history
            });

            $('.accept').click(function(event) {
                $('.accept').prop('disabled','disabled'); 

                let id = $(this).attr('id');
                let token = $(this).attr('data-token');
                 

                if(confirm("ຍືນຢັນ"))
                    {
                        let id = $(this).attr('id');
                        let token = $(this).attr('data-token'); 
                        let purpose = "SUCCESS"; 
                        
                        let formData = {
                            id: id,
                            token: token,
                            purpose: purpose,
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('wallet.process.start') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                        window.location.href = "{{ route('admin.wallet.thing',$select->type) }}"; 
                                } else {
                                    alert('Error'); 
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

            $('.cancel').click(function(event) {
                $('.cancel').prop('disabled','disabled'); 
                let reason = $('#cancel_reason').val();
                if(reason!='')
                {
                    if(confirm("ຍົກເລີກ"))
                    {
                        let id = $(this).attr('id');
                        let token = $(this).attr('data-token'); 
                        let purpose = "CANCEL"; 
                        
                        let formData = {
                            id: id,
                            token: token,
                            purpose: purpose,
                            reason: reason,
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('wallet.process.start') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                        window.location.href = "{{ route('admin.wallet.thing',$select->type) }}"; 
                                } else {
                                    alert('Error'); 
                                    $('.cancel').prop('disabled','');

                                }
                            },
                            error: function(error) {
                                console.log(error); 
                                $('.cancel').prop('disabled','');
                            }
                        });
                    }
                    else
                    {

                    }
                }
                else
                {
                    alert('ລະບຸສາເຫດທີ່ຍົກເລີກ');
                    $('#cancel_reason').focus();
                    $('.cancel').prop('disabled',''); 
                    
                }  
            });
        });
    </script>
@endsection
