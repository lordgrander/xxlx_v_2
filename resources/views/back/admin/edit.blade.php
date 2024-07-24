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
                        <h3>ແກ້ໄຂຂໍ້ມູນ </h3>
                    </div>
                    <div class="card-body p-1  "> 
                                    
                    <form class=" add_user">
                        
                        <div class="mb-3"> 
                            <input type="text" autocomplete="off" placeholder="ຊື່" id="name" value="{{ $select->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" autocomplete="off" placeholder="ໄອດີເຂົ້າລະບົບ" value="{{ $select->login }}" id="login" class="form-control">
                        </div> 
                        <div class="mb-3">
                            <select name="" id="status" class="form-control">   
                                <option value="Admin">Admin</option>
                                <option value="Normal">Normal</option>
                            </select>
                        <br>
                            <button class="btn btn-danger form-control">ບັນທຶກແກ້ໄຂ</button>
                        </div>
                    </form>
                        <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.admin') }}" class=" form-control" id="backButton">ກັບຄືນ</a>
                        <a href="{{ route('admin.admin.edit.password',$encode) }}" class=" form-control" id="backButton">ແກ້ໄຂລະຫັດຜ່ານ</a>

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
            $('.btn-dark').prop('disabled', true);

            // Get the form data
            var formData = {
                name: $('#name').val(),
                login: $('#login').val(), 
                status: $('#status').val(),
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
                url: '{{ route('admin.admin.update') }}',
                data: formData,
                dataType: 'json', 
                success: function(response) {
                    if(response.status=='Duplicate')
                    {
                        alert('Admin Login ມີຄົນໃຊ້ແລ້ວ');
                    }
                    else
                    {

                        location.reload();
                    }
                },
                error: function(error) {
                    console.log(error); 
                }
            });
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