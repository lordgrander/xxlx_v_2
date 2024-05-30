@extends('layout.app')  

<link rel="stylesheet" href="{{ asset('css/front-menu-list.css') }}">
@section('content')  
<div class="container">
     <center> 
        
        <div style="width:60%;">
            <div class="card notob p-3 mt-5">
                <div class="card-header text-center"> 
                    <h3>ເຂົ້າສູ່ລະບົບ </h3>
                </div>
                <div class="card-body p-1  "> 
                    <form class="needs-validation" novalidate="">  
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="ໄອດີ" value="" required="" autocomplete="off" style="border:solid black 2px;">
                            <div class="invalid-feedback">
                                {{ trans('message.valid_name_required') }}
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="ລະຫັດຜ່ານ" value="" required="" style="border:solid black 2px;">
                            <div class="invalid-feedback">
                                {{ trans('message.valid_password_required') }}
                            </div>
                        </div>

                        <button class="w-100 btn btn-outline-danger btn-lg xxx" type="submit">ເຂົ້າສູ່ລະບົບ</button>
                    </form>
                        <hr>
                        <a href="{{ route('register') }}">
                            <button class="w-100 btn btn-outline-primary btn-lg"  >ສະໝັກ</button>
                        </a>
                </div> 
            </div> 
        </div>  
     </center>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
<script>
    $(document).ready(function() {
        $('#lineLoginBtn').click(function(event) {
            window.location.href = '/login/line';
        });
        $('form.needs-validation').submit(function(event) {
            event.preventDefault();
                    $('.xxx').prop('disabled','disabled');

            // Get the form data
            var formData = {
                name: $('#name').val(),
                password: $('#password').val()
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 
            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('login.start') }}',
                data: formData,
                dataType: 'json', 
                success: function(response) {
                    if (response.success) {
                        // alert('Login successful!');
                        window.location.href="{{ route('start') }}";
                    } else {
                        alert('ລະຫັດຜ່ານຫຼືໄອດີບໍ່ຖືກຕ້ອງ');
                        $('.xxx').prop('disabled','');
                    }
                },
                error: function(error) {
                    console.log(error); 
                    $('.xxx').prop('disabled','');
                }
            });
        });
    });
</script>
@endsection