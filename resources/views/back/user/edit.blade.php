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
                        <h3>ແກ້ໄຂສະມາຊິກ </h3>
                    </div>
                    <div class="card-body p-1  "> 
                                    
                        <form id="registration-form">   
                            
                            <div class="mb-3">
                                <input type="text" id="username" class="form-control" value="{{ $user->username }}" placeholder="ຊື່" autocomplete="off" required style="border:solid black 2px;">
                            </div>
                             
                            <div class="mb-3">
                                <input type="text" id="name" class="form-control" value="{{ $user->name }}" placeholder="ໄອດີເຂົ້າລະບົບ" autocomplete="off" required style="border:solid black 2px;">
                            </div>
                             

                            <div class="mb-3">
                                <input type="number" id="phone" class="form-control" value="{{ $user->phone }}" placeholder="ເບີໂທລະສັບ" autocomplete="off" style="border:solid black 2px;">
                            </div>

                            <div class="mb-3">
                                 <select name="" id="password_commit" class="form-control" >
                                    <option value="no">ບໍ່ປ່ຽນລະຫັດຜ່ານ</option>
                                    <option value="yes">ປ່ຽນລະຫັດຜ່ານ</option>
                                 </select>
                            </div>
                            <div id="password_sassion">

                                <div class="mb-3">
                                    <input type="password" id="password" class="form-control" value="" placeholder="ລະຫັດຜ່ານ"  minlength="8" style="border:solid black 2px;">
                                </div>

                                <div class="mb-3">
                                    <input type="password" id="confirm-password" class="form-control" value="" placeholder="ຢືນຢັນລະຫັດຜ່ານ"  minlength="8" style="border:solid black 2px;">
                                </div>
                            </div>


                            <div class="text-center">
                                <button class="w-100 btn btn-danger btn-lg text-white xxx" type="submit">ຕົກລົງ</button>
                                <br><br>
                                <a href="{{ route('admin.user') }}" class="btn btn-dark form-control" id="backButton">ກັບຄືນ</a>
                            </div>
                        </form>
                    </div> 
                </div> 
            </div>  
        </center>
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          
<script>
    
    $(document).ready(function() { 

        $('#password_sassion').hide();
        $('#password_commit').change(function (e) {
            let check = $(this).val();
            if(check=='yes')
            {
                $('#password_sassion').show();
                $('#password').attr('required', 'required');
                $('#confirm-password').attr('required', 'required');
            }
            else
            {
                $('#password_sassion').hide();
                $('#password').removeAttr('required');
                $('#confirm-password').removeAttr('required');
            } 
        }); 

        $('#registration-form').submit(function (e) {
            e.preventDefault();  
            $('.xxx').prop('disabled','disabled');

            let check = $('#password_commit').val();
            var data = null;
            if(check=='yes')
            {
                data = {
                    username: $('#username').val(), 
                    name: $('#name').val(), 
                    phone: $('#phone').val(),
                    password: $('#password').val(),
                    check: $('#password_commit').val(),
                    _token: '{{ csrf_token() }}',
                }

                if($('#password').val()!=$('#confirm-password').val())
                {
                    alert('ລະຫັດຜ່ານບໍ່ກົງກັນ');
                    $('.xxx').prop('disabled',''); 

                    return false;
                }
            }
            else
            {
                data = {
                    username: $('#username').val(), 
                    name: $('#name').val(), 
                    phone: $('#phone').val(),  
                    check: $('#password_commit').val(),
                    _token: '{{ csrf_token() }}',
                }
            } 

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.user.update',  $user->encode  ) }}',
                data: data,
                success: function (response) { 
                    console.log(response.success);
                    if(response.success)
                    {
                        alert('ແກ້ໄຂສຳເລັດ');
                        $('.xxx').prop('disabled',''); 
                    }
                    else
                    {  
                        if(response.context=='duplicate_username')
                        {

                            alert('ໄອດີເຂົ້າລະບົບມີຄົນໃຊ້ແລ້ວ');
                        $('.xxx').prop('disabled',''); 
                        }
                        else if(response.context=='password_not_match')
                        {

                        }
                        else
                        {

                        }
                    } 
                },
                error: function (error) {
                    loading_overlay_hide();
                    $('.xxx').prop('disabled','');
                    if (error.status === 422) {
                        var errors = error.responseJSON.errors;
                        // Handle and display validation errors if needed.
                        // Loop through the errors and concatenate them into a single message
                        let errorMessages = '';
                        for (var field in errors) {
                            errorMessages += '<small>' + field + ':</small> ' + errors[field].join('<br>') + '<br>';
                        }
                        // showPopup(errorMessages);
                        alert(errorMessages);
                    }
                },
            });
        });  
    });
</script>
@endsection
