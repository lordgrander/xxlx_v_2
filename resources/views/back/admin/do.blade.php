@extends('layout.admin_app') 
@section('content')  
<style>
    th
    {
        text-align:center;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="title text-center">
                <h4 class="notob">ລາຍການ ເຄື່ອນໄຫວຂອງ Admin</h4> 
            </div> 
                <table class="table table-bordered table-hover table-striped notob">
                    <tr>
                        <th>ເຄື່ອນໄຫວ</th> 
                        <th>ເວລາ</th>  
                        <th>ວັນທີ</th>  
                    </tr> 

                    @foreach($beta_do As $r)
                        <tr>
                            <td class="text-center">{{ $r->what }}</td> 
                            <td class="text-center">{{ date('H:i:s',strtotime($r->date)) }}</td>
                            <td class="text-center">{{ date('d-m-Y',strtotime($r->date)) }}</td>
                        </tr>
                    @endforeach
                     
                </table> 
                 
                <div>
                         <div class="item-pagination d-flex justify-content-center">
                             {{ $beta_do->links('pagination.custom-pagination') }}
                         </div>
                     </div>
        </div> 
    </div>
</div>

<hr> 

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<script>
    $(document).ready(function() { 
        
        $('.delete').click(function(event) {
             
            
        });
    });
</script>
@endsection
