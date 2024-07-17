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
                                    
                        <form id="registration-form">   
                            
                            <div class="mb-3">
                                <input type="text" id="username" class="form-control" placeholder="ຊື່ລູກຄ້າ" autocomplete="off" required style="border:solid black 2px;">
                            </div>
                            
                            <div class="mb-3">
                                <input type="text" id="name" class="form-control" placeholder="ໄອດີເຂົ້າລະບົບ" autocomplete="off" required style="border:solid black 2px;">
                            </div>

                            <div class="mb-3">
                                <input type="number" id="phone" class="form-control" placeholder="ເບີໂທລະສັບ" autocomplete="off" style="border:solid black 2px;">
                            </div>

                            <div class="mb-3">
                                <input type="password" id="password" class="form-control" placeholder="ລະຫັດຜ່ານ" required minlength="8" style="border:solid black 2px;">
                            </div>

                            <div class="mb-3">
                                <input type="password" id="confirm-password" class="form-control" placeholder="ຢືນຢັນລະຫັດຜ່ານ" required minlength="8" style="border:solid black 2px;">
                            </div>


                            <div class="text-center">
                                <button class="w-100 btn btn-danger btn-lg text-white xxx" type="submit">ຕົກລົງ</button>
                            </div>
                        </form><br>
                        
                        <a href="{{ route('admin.user') }}" class="btn btn-dark form-control" id="backButton">ກັບຄືນ</a>
                         
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

        $('#registration-form').submit(function (e) {
            e.preventDefault(); 
            loading_overlay();
            $('.xxx').prop('disabled','disabled');

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.user.create.process') }}',
                data: {
                    username: $('#username').val(),
                    name: $('#name').val(),
                    phone: $('#phone').val(),
                    password: $('#password').val(),
                    'confirm-password': $('#confirm-password').val(),
                    _token: '{{ csrf_token() }}',
                },
                success: function (response) {
                    if(response.status=='Duplicate')
                    {

                        loading_overlay_hide();
                        $('.xxx').prop('disabled','');
                        alert("ໄອດີນີ້ໄດ້ສະໝັກໄປແລ້ວ");
                    }
                    else
                    {
                        alert('ສຳເລັດ')
                        loading_overlay_hide();
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
     

        function loading_overlay()
        {
            $("#loading-overlay").css('display','flex'); 
        }
        function loading_overlay_hide()
        {
            $("#loading-overlay").css('display','none'); 
        }

        
    function showPopup(str) { 
        
        $('#say_something').html(str);
        $("#popup").fadeIn(300, function() {
            setTimeout(function() { 
            $('#say_something').html(""); 
            $("#popup").fadeOut(300);
            }, 2000);
        });
    } 
</script>
@endsection
