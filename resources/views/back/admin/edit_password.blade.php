@extends('layout.admin_app') 
@section('content')  
 
<style>
    th
    {
        text-align:center;
    }
</style>
<div class="container-fluid">
    <div class="container">
        <center> 
            
            <div style="width:60%;">
                <div class="card notob p-3 mt-5">
                    <div class="card-header text-center"> 
                        <h3>ແກ້ໄຂລະຫັດຜ່ານ </h3>
                    </div>
                    <div class="card-body p-1  "> 
                                    
                    <form class=" add_user">
                        
                        <div class="mb-3"> 
                            <input type="password" autocomplete="off" placeholder="ລະຫັດຜ່ານ" id="password" value="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="password" autocomplete="off" placeholder="ຢືນຢັນລະຫັດຜ່ານ" value="" id="confirm_password" class="form-control">
                        </div> 
                        <div class="mb-3"> 
                            <button class="btn btn-danger form-control">ບັນທຶກລະຫັດຜ່ານ</button>
                        </div>
                    </form>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.admin') }}" class=" form-control" id="backButton">ກັບຄືນ</a>
                        <a href="{{ route('admin.admin.edit', $encode) }}" class=" form-control" id="backButton">ແກ້ໄຂຂໍ້ມູນ</a>

                        </div>
                         
                    </div> 
                </div> 
            </div>  
        </center>
    </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<script>
    $(document).ready(function() { 

        $('form.add_user').submit(function(event) {
            event.preventDefault();
            
            let password = $('#password').val(); 
            let confirm_password= $('#confirm_password').val();

            if(password===confirm_password)
            {
                 
                if(confirm("ແກ້ໄຂລະຫັດຜ່ານ?"))
                {
                    
                    $('.btn-dark').prop('disabled', true);

                    // Get the form data
                    var formData = { 
                        password: $('#password').val(), 
                        encode: '{{ $encode }}'
                    };
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // Send an AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('admin.admin.password.update') }}',
                        data: formData,
                        dataType: 'json', 
                        success: function(response) {
                            
                                alert('ສຳເລັດ')
                                location.reload();
                             
                        },
                        error: function(error) {
                            console.log(error); 
                        }
                    });
                }
            }
            else
            {
                alert("ລະຫັດຜ່ານບໍ່ຖືກກັນ");
            }
            
        });
 
 
    });

     
    SelectElement("status",    "{{ $select->status }}");  

function SelectElement(id, valueToSelect)
{    
    var element = document.getElementById(id);
    element.value = valueToSelect;
}
     
</script>

@endsection