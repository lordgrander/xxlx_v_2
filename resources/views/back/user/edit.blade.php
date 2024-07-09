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
                                 <select name="" id="password" class="form-control" >
                                    <option value="no">ບໍ່ປ່ຽນລະຫັດຜ່ານ</option>
                                    <option value="yes">ປ່ຽນລະຫັດຜ່ານ</option>
                                 </select>
                            </div>
                            <div id="password_sassion">

                                <div class="mb-3">
                                    <input type="password" id="password" class="form-control" value="" placeholder="ລະຫັດຜ່ານ" required minlength="8" style="border:solid black 2px;">
                                </div>

                                <div class="mb-3">
                                    <input type="password" id="confirm-password" class="form-control" value="" placeholder="ຢືນຢັນລະຫັດຜ່ານ" required minlength="8" style="border:solid black 2px;">
                                </div>
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
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          
<script>
    
    $(document).ready(function() { 

        $('#password_sassion').hide();
        $('#password').change(function (e) {
            let check = $('#password').val();
            if(check=='yes')
            {
                $('#password_sassion').show();
            }
            else
            {
                $('#password_sassion').hide();
            }
        });

    });
</script>
@endsection
