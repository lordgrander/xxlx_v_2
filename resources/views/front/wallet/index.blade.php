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
                    <h3>ຝາກເງິນ</h3>
                     ຍອດເງິນ : {{ number_format($money) }} ກີບ
                </div>
                <div class="card-body p-1">
                    <div class="row">
                         <div class="col-12"> 
                            <form>
                                <b>1.</b> ທະນາຄານທີ່ໂອນ
                                <div class="d-flex justify-content-center   mb-3"> 
                                        <select name="bank_id" id="bank_id" class="form-control epic-hight-select">
                                            <option value="0">--ເລືອກ--</option>
                                            @foreach ($bank as $row)
                                            <option value="{{ $row->id }}">{{ $row->name }}</option> 
                                            @endforeach
                                        </select>  
                                </div>
                                <b>2.</b> ຫຼັກຖານການໂອນ
                                <div class="d-flex justify-content-center mb-3"> 
                                    <label for="image-upload" class="pic-button form-control">ເລືອກຮູບ</label>
                                </div>
                                <b>3.</b> ຈຳນວນທີ່ໂອນເຂົ້າ
                                <div class="d-flex justify-content-center mb-3"> 
                                    <input type="text" class="form-control" id="formatted-input" autocomplete="off" class="epic-right-input" placeholder="ປ້ອນຈຳນວນທີ່ໂອນ" oninput="formatNumber(this);">
                                </div>
                                    <button class="form-control btn btn-danger" id="start-check-out">ຕົກລົງ</button>
                                <div class="d-flex justify-content-center"> 
                                
                                </div>
                                <div class="d-flex justify-content-center"> 
                                    <input type="file" id="image-upload" accept="image/*" style="display: none;">
                                    <span id="file-name" class="text-warning">*</span>
                                    <img id="image-preview" src="#" alt="" class="img-fluid" style="border-radius:5px;">
                                </div>
                            </form> 
                         </div>
                    </div>
                    <div>
                        <center><h3>ປະຫວັດ</h3></center>
                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <td></td>
                                <td class="text-center">ໄອດີ</td>
                                <td class="text-center">ຈຳນວນຝາກ</td>
                                <td class="text-center">ສະຖານະ</td>
                                <td class="text-center">ວັນທີ</td>
                            </tr>
                            @foreach($order_inout AS $r)
                                <tr>
                                    <td class="text-center">{{ $r->Havebank->name }}</td>
                                    <td class="text-center">WX-{{ $r->id }}</td>
                                    <td class="text-right">{{ number_format($r->total) }} ກີບ</td>
                                    <td class="text-center">
                                        @if($r->status=='Waiting')
                                            ກຳລັງດຳເນິນການ
                                        @elseif($r->status=='Success')
                                            ສຳເລັດແລ້ວ
                                        @else

                                        @endif
                                    </td>
                                    <td class="text-right">{{ date('d-m-Y',strtotime($r->date)) }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="item-pagination d-flex justify-content-center">
                            {{ $order_inout->links('pagination.custom-pagination')  }}
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

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let protected_bank = $('#bank_id').val();

            let fileInput = document.getElementById('image-upload');
            let money = $('#formatted-input').val();
            let imageFile = fileInput.files[0];

            // Check if an image is selected
            if (!imageFile) {
                alert('ກະລຸນາເລືອກຮູບຫຼັກຖານ.');
                loading_overlay_hide();
                return false;
            }

            if (!money) {
                alert('ກະລຸນາປ້ອນຈຳນວນເງິນ.');
                loading_overlay_hide();
                return false;
            }

            let formData = new FormData();
            formData.append('image', imageFile);
            formData.append('money', money);
            formData.append('bank', protected_bank);
 
            $.ajax({
                url: '{{ route('wallet.in.process') }}', 
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
                        loading_overlay_hide();
                        showBadPopup("" + response.message + "");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle the error if necessary
                }
            });

            // Redirect to the order view page
        });

                
            const fileName = document.getElementById('file-name');

        


        // Get the file input element and image preview element
        const fileInput = document.getElementById('image-upload');
        const imagePreview = document.getElementById('image-preview');

        // Add an event listener to the file input
        fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];

        // Check if a file is selected
        if (file) {
            // Create a FileReader to read the selected file
            const reader = new FileReader();
            
            // Set up the FileReader onload event
            reader.onload = function() {
            // Update the image preview source with the FileReader result
            imagePreview.src = reader.result;
            // fileName.textContent = fileInput.files[0].name;
            $('#file-name').html('<label style="color:#07f107;"> <i class="bi bi-check-circle-fill"></i></label>');

            }
            
            // Read the file as a data URL
            reader.readAsDataURL(file);
        } else {
            // Clear the image preview source if no file is selected
            imagePreview.src = '#';
            fileName.textContent = '';

        }
        });
        
    });
    function Comma(Num) { // function to add commas to textboxes
            Num += '';
            Num = Num.replace(/,/g, ''); // Remove existing commas
            x = Num.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1))
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            return x1 + x2;
        }


        function formatNumber(input) {
            // Remove existing commas and any non-digit characters
            const num = input.value.replace(/[^0-9]/g, '');

            // Format the number with commas
            const formattedNum = numberWithCommas(num);

            // Update the input value
            input.value = formattedNum;
        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
</script>
@endsection