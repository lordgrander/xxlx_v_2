@extends('layout.admin_app') 
@section('content')  
<style>
    th
    {
        text-align:center;
    }
.epic-x-input
{
    width: 100%;
    height: 1rem;
    padding: 1rem;
    border-radius: 0rem 0rem 0rem 0rem;
    border: solid #b0b0b0 1px;
}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title text-center">
                <h4 class="notob">ລາຍການລາງວັນ</h4> 
            </div> 
                <table class="table table-bordered table-hover table-striped notob">
                    <tr>
                        <th>ຊື່</th>
                        <th>ເງິນລາງວັນ ( ທີ່ຄູນຈຳນວນເງິນ )</th> 
                    </tr> 

                    @foreach($select As $r)
                        @php($display_text='')
                        @if($r->name == 'ABC')
                        @elseif($r->name == 'WING')
                        @php($display_text = 'ວິ້ງ')
                        @elseif($r->name == 'TWO')
                        @php($display_text = 'ເລກສອງໂຕ')
                        @elseif($r->name == 'THREE')
                        @php($display_text = 'ເລກສາມໂຕ')
                        @elseif($r->name == 'FOUR')
                        @php($display_text = 'ເລກສີ່ໂຕ')
                        @elseif($r->name == 'FIVE')
                        @php($display_text = 'ເລກຫ້າໂຕ')
                        @elseif($r->name == 'HIGHTLOW')
                        @php($display_text = 'ສູງຕໍ່າ')
                        @elseif($r->name == 'KICKCOOL')
                        @php($display_text = 'ຄີກຄູ່')
                        @else
                        @endif
                        
                        @php($display_text_2 = '')
                        @if($r->type == 'UP')
                        @php($display_text_2 = 'ບົນ')
                        @elseif($r->type == 'DOWN')
                        @php($display_text_2 = 'ລ່າງ')
                        @else
                        @endif

                        <tr>
                            <td class="text-center">{{ $display_text }} - {{ $display_text_2 }}</td> 
                            <td class="text-center"> <input type="text" class="btn btn-dark prize" data-name="{{ $display_text }} - {{ $display_text_2 }}" data-id="{{ $r->id }}" value="{{ number_format($r->mul) }}" onkeyup="javascript:this.value=Comma(this.value);"> </td> 
                        </tr>
                    @endforeach
                     
                </table> 
                 
        </div> 
    </div>
</div>

<hr> 


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        // jQuery code to go back to the previous page
        $(document).ready(function() { 
            $('.prize').change(function(event) {
                if(confirm("ຕ້ອງການອັບເດັດເງິນລາງວັນ : " + $(this).attr('data-name')))
                {
                        let formData = {
                            id: $(this).attr('data-id'), 
                            val: $(this).val(), 
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        }); 
                        // Send an AJAX request
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('admin.prize.update') }}',
                            data: formData,
                            dataType: 'json', 
                            success: function(response) {
                                if (response.success) { 
                                    alert('ອັບເດັດລາງວັນສຳເລັດ');  
                                } else {
                                }
                            },
                            error: function(error) {
                                console.log(error);  
                            }
                        });
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
