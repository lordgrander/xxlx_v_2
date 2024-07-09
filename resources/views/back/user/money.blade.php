@extends('layout.admin_app') 
@section('content')  
<style>
    th
    {
        text-align:center;
    }
</style>
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
body
{
    background:black!important;
}
</style>
<div class="container-fluid">
    <div class="row"> 
        <div class="card  notob p-3">
            <div class="card-header  text-center">
               
                <h3>ຈັດການເງິນ</h3>
                
            </div>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                        <table class="table table-bordered custom-table"  style="border-radius: 10px !important;border: solid 1px black;">
                            <tr>
                                <td>ຊື່ : {{ $user->username }} | ຈຳນວນເງິນ : {{ number_format($check_money[0]->current_money) }} ກິບ</td> 
                            </tr> 
                            <tr> 
                                <td  >
                                    <select name="" id="action" class="form-control">
                                        <option value="">ເລືອກ</option>
                                        <option value="Deposit">ຝາກ</option>
                                        <option value="Withdrawal">ຖອນ</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td  ><input type="text" id="money" class="form-control" placeholder="ຈຳນວນເງິນ"  onkeyup="javascript:this.value=Comma(this.value);" autocomplete="OFF"></td>
                            </tr>  
                            <tr>
                                <td>
                                    <button class="btn btn-success form-control accept" id=" " data-token=" "><h6>ຕົກລົງ</h6></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <a href="{{ redirect()->back() }}" class="btn btn-dark form-control" id="backButton">ກັບຄືນ</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        // jQuery code to go back to the previous page
        $(document).ready(function() {
            $('#backButton').click(function(event) {
                event.preventDefault(); // Prevent the default action of the anchor tag
                window.history.back(); // Go back to the previous page in the browser history
            });

            $('.accept').click(function(event) {
                $('.accept').prop('disabled','disabled'); 
 
                let action = $("#action").val();  
                 
                if(action==='')
                {
                    alert("ກະລຸນາເລືອກ");
                    $("#action").focus();
                    $('.accept').prop('disabled','');  
                    return false;
                }

                    if(confirm("ຍືນຢັນ"))
                    {
                        
                        let money = $("#money").val();  
                        
                        let formData = {
                            action: action,
                            token: '{{ $token }}',
                            money: money,
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('admin.user.money.process') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                    alert('ສຳເລັດ');
                                    window.location.reload();
                                } else {
                                    alert(response.message); 
                                    $('.accept').prop('disabled',''); 
                                }
                            },
                            error: function(error) {
                                console.log(error); 
                                $('.accept').prop('disabled','');
                            }
                        });
                    }
                    else
                    {

                    }
            });

             
        });

        
        function Comma(Num) {  
            Num += '';
            Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
            Num = Num.replace(',', ''); Num = Num.replace(',', ''); Num = Num.replace(',', '');
            x = Num.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1))
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            return x1 + x2;
        }
    </script>
@endsection
