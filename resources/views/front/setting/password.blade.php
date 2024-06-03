@extends('layout.app')  

<link rel="stylesheet" href="{{ asset('css/front-menu-list.css') }}">
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
</style>
@section('content')  
<div class="container">
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card  notob p-3">
                <div class="card-header  text-center">
                    <h3>ແກ້ໄຂໄອດີ ແລະ ລະຫັດຜ່ານ</h3> 
                </div>
                <div class="card-body p-1">
                    <div class="row">
                        <div class="col-12"> 
                            <form>
                                <b>1.</b> ໄອດີເຂົ້າລະບົບ
                                <div class="d-flex justify-content-center   mb-3"> 
                                    <input type="text" class="form-control" id="name" value="{{ $users->name }}" autocomplete="off">
                                </div>
                                <b>2.</b> ປ່ຽນລະຫັດຜ່ານ ( ຖ້າຕ້ອງການ )
                                <div class="d-flex justify-content-center mb-3"> 
                                    <input type="password" class="form-control" id="password" value="">
                                </div> 
                                <b>2.</b> ຢືນຢັນລະຫັດຜ່ານ
                                <div class="d-flex justify-content-center mb-3"> 
                                    <input type="password" class="form-control" id="confirm_password" value="">
                                </div> 
                                    <button class="form-control btn btn-danger" id="start-check-out">ຕົກລົງ</button> 
                            </form> 
                         </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 
<script>
    function loading_overlay()
    {
        $("#loadingScreen").css('display','flex'); 
        $('#start-check-out').prop('disabled','disabled');

    }
    function loading_overlay_hide()
    {
        $("#loadingScreen").css('display','none'); 
        $('#start-check-out').prop('disabled','');
    }

    $(document).ready(function () {
        $(document).on('click', '#start-check-out', function(e) {
            e.preventDefault();
            loading_overlay();

            let password = $("#password").val();
            let confirm_password = $("#confirm_password").val();
            if(password!=confirm_password)
            {
                alert("ລະຫັດຜ່ານບໍ່ຖືກກັນ");
                loading_overlay_hide(); 
                return false;
            }
            else
            {
                if(password)
                {
                    if(password.length <8)
                    {
                        alert("ລະຫັດຜ່ານຄວນມີ 8 ຕົວ"); 
                        loading_overlay_hide(); 
                        $('#password').focus();

                        return false;
                    }  
                }
            }

            let name = $('#name').val(); 

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 

            let formData = new FormData(); 
            formData.append('name', name);  
            formData.append('password', password);  
 
            $.ajax({
                url: '{{ route('setting.password.name.check') }}', 
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 200) {
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    } else {
                        alert('ID ນີ້ບໍ່ສາມາດໃຊ້ໄດ້');
                        $('#name').focus();
                        loading_overlay_hide(); 
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error if necessary
                        loading_overlay_hide(); 
                }
            });

            // Redirect to the order view page
        });
        });
</script>
@endsection