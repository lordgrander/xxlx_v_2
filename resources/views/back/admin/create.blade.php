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
                        <h3>ສ້າງສະມາຊິກ </h3>
                    </div>
                    <div class="card-body p-1  "> 
                                    
                    <form class=" add_user">
                        
                        <div class="mb-3"> 
                            <input type="text" autocomplete="off" placeholder="ຊື່" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" autocomplete="off" placeholder="ໄອດີເຂົ້າລະບົບ" id="login" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" autocomplete="off" placeholder="ລະຫັດຜ່ານ" id="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <select name="" id="status" class="form-control"> 
                                <option value="Admin">Admin</option>
                                <option value="Normal">Normal</option>
                            </select>
                        <br>
                            <button class="btn btn-danger form-control">ເພີ່ມ</button>
                        </div>
                    </form>
                        
                        <a href="{{ route('admin.admin') }}" class="btn btn-dark form-control" id="backButton">ກັບຄືນ</a>
                         
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
                password: $('#password').val(),
                status: $('#status').val()
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.admin.store') }}',
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

     
</script>

@endsection