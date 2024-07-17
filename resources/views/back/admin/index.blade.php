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
                <h4 class="notob">ລາຍການ Admin</h4>
                <a href="{{ route('admin.admin.create') }}"><button class="btn btn-danger">ສ້າງ Admin</button></a>
            </div> 
                <table class="table table-bordered table-hover table-striped notob">
                    <tr>
                        <th>ຊື່</th> 
                        <th>ໄອດີເຂົ້າລະບົບ</th> 
                        <th>ສະຖານະ</th>
                        <th>ໄອພີຫຼ້າສຸດ</th>  
                        <th>ຈັດການ</th>
                    </tr> 

                    @foreach($select As $r)
                        <tr>
                            <td class="text-center">{{ $r->name }}</td>
                            <td class="text-center">{{ $r->login }}</td>
                            <td class="text-center">{{ $r->status }}</td>  
                            <td class="text-center">{{ $r->last_login_ip }}</td>   
                            <td class="text-right"> 
                                <a href="{{ route('admin.admin.edit', $r->encode) }}">ແກ້ໄຂ</a>  
                                |
                                <a href="#" class="delete" id="{{ $r->encode }}">ລືບ</a>  
                            </td>
                        </tr>
                    @endforeach
                     
                </table> 
                 
        </div> 
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<script>
    $(document).ready(function() { 
        
        $('.delete').click(function(event) {
            if(confirm('ລືບຜູ້ໃຊ້ຜູ້ນີ້ແມ່ນບໍ່?'))
            {
                let id = $(this).attr('id');   
                var formData = {
                    id: id,
                };

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                // Send an AJAX request
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.admin.delete') }}',
                    data: formData,
                    dataType: 'json', 
                    success: function(response) { 
                        location.reload(); 
                    },
                    error: function(error) {
                        console.log(error); 
                    }
                });
            }
            
        });
    });
</script>
@endsection
