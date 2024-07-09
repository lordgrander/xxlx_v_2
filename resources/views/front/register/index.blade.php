@extends('layout.app')  

<link rel="stylesheet" href="{{ asset('css/front-menu-list.css') }}">
<style> 
    #loading-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        /* display: flex; */ 
    }
        
    .popup {
        position: fixed;
        top: 0;
        right: 0;
        background-color: red;
        color:white;
        padding: 10px 20px;
        border-radius: 5px;
        display: none;
        z-index: 9999;
    }
</style>
<div id="popup" class="popup bounban"> <label style="color:#07f107;"> <i class="bi bi-check-circle-fill"></i></label> <label id="say_something"></label></div>

<div id="loading-overlay">
    <div id="loading-spinner" class="spinner-border text-primary" role="status">
        <span class="sr-only">...</span>
    </div>
</div>
@section('content')  
<div class="container">
     <center> 
        
        <div style="width:60%;">
            <div class="card notob p-3 mt-5">
                <div class="card-header text-center"> 
                    <h3>ສະໝັກສະມາຊິກ </h3>
                </div>
                <div class="card-body p-1  "> 
                                
                    <form id="registration-form">   
                        
                        <div class="mb-3">
                            <input type="text" id="username" class="form-control" placeholder="ຊື່ຂອງທ່ານ" autocomplete="off" required style="border:solid black 2px;">
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
                    </form>
                </div> 
            </div> 
        </div>  
     </center>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          
<script>
    $(document).ready(function() { 

        $('#registration-form').submit(function (e) {
            e.preventDefault(); 
            loading_overlay();
            $('.xxx').prop('disabled','disabled');

            $.ajax({
                type: 'POST',
                url: '{{ route('register.process') }}',
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

                        window.location.href = "{{ route('start') }}"; 
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