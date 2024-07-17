 


<div class="flex-shrink-0 p-3 main-nav sub-nav noto" style="width: 0;">
    <a href="#" class="text-right d-flex justify-content-end pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom" id="hide-nav"> 
      <span class="fs-5 fw-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"  style="fill:white;width:1.5em;cursor:hand;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
      </span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <a href="{{ route('admin.index') }}">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"  data-bs-toggle="collapse"  aria-expanded="false">
            1. ໜ້າຫຼັກ
          </button>
        </a>
        <!-- <div class="collapse" id="home-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li> 
          </ul>
        </div> -->
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          2. ອໍເດີ້
        </button>
        <div class="collapse" id="dashboard-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"> 
            <li><a href="{{ route('admin.wallet.thing', 'in') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">2.1 ອໍເດິ້ຝາກເງິນ</a></li> 
            <li><a href="{{ route('admin.wallet.thing', 'out') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">2.2 ອໍເດິ້ຖອນເງິນ</a></li> 
          </ul>
        </div> 
      </li>
      <!-- <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#in-collapse" aria-expanded="false">
          3. ຝາກຖອນເງິນ
        </button>
        <div class="collapse" id="in-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('buy.history') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">3.1 ຝາກ</a></li> 
            <li><a href="{{ route('buy.history') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">3.2 ຖອນ</a></li> 
          </ul>
        </div>
      </li> -->
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          3. orders
        </button>
        <div class="collapse" id="orders-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('admin.view.box.c') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">3.1 ການແທງ</a></li> 
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#create-collapse" aria-expanded="false">
          4. ເບີ່ງ
        </button>
        <div class="collapse" id="create-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('admin.create.box') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">4.1 ເບີ່ງ ງວດເລກ</a></li> 
            <li><a href="{{ route('admin.user') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">4.2 ເບີ່ງ ລູກຄ້າ</a></li> 
          @if(session('admin_status')=="Admin")
            <li><a href="{{ route('admin.admin') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">4.3 ເບີ່ງ Admin</a></li> 
          @else
          @endif
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#view-collapse" aria-expanded="false">
          6. ອື່ນໆ
        </button>
        <div class="collapse" id="view-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small"> 
            <li><a href="{{ route('admin.order') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">6.1 ເບີ່ງ ລູກຄ້າ</a></li> 
          @if(session('admin_status')=="Admin")
            <li><a href="{{ route('admin.order') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">6.2 ເບີ່ງ Admin</a></li> 
          @else
          @endif
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#report-collapse" aria-expanded="false">
          7. ລາຍງານ
        </button>
        <div class="collapse" id="report-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('admin.order') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">7.1 ລາຍງານ ຍອດຮັບ</a></li> 
            <li><a href="{{ route('admin.order') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">7.2 ລາຍງານ ຍອດເສຍ</a></li> 
          @if(session('admin_status')=="Admin")
            <li><a href="{{ route('admin.order') }}" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">7.3 ລາຍງານ Admin</a></li> 
          @else
          @endif
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      @if(session('admin_id'))
        <li class="mb-1">
          <a href="{{ route('logout') }}">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              ອອກຈາກລະບົບ
            </button>
          </a>
          <!-- <div class="collapse" id="account-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none text-white rounded">New...</a></li> 
            </ul>
          </div> -->
        </li>
      @else
        <li class="mb-1">
          <a href="{{ route('login') }}">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              ເຂົ້າສູ່ລະບົບ
            </button>
          </a> 
        </li> 

      @endif
    </ul>
</div>

<div id="overlayx"></div>  

 

<script> 
    $(document).ready(function () {
            // Hide the overlay initially
            $(".overlay").css("opacity", "0");
            $(".overlay").css("display", "none");
            var nav_sw = 0;
            // Show the container and overlay when the button is clicked
            $("#show-nav").click(function () { 
                    $(".overlay").css("opacity", "0.7");
                    $(".main-nav").css("width", "280"); // i want this gose from 0 to 280px for 1sec
                     
                    $(".overlay").css("display", "block");
                    $(".overlay").css("position", "fixed");
                    $(".sub-nav").css("display", "block"); 
                    $(".sub-nav").css("position", "fixed"); 
                    $('#overlayx').show();
            });

            // Hide the container and overlay when the close button is clicked
            $("#hide-nav").click(function () {
                $(".overlay").css("opacity", "0");
                $(".overlay").css("display", "none"); 
                $(".sub-nav").css("display", "none");
                $(".main-nav").css("width", "0"); 
                $(".overlay").css("position", "");
                $(".sub-nav").css("position", ""); 
                $('#overlayx').hide();

                // setTimeout(function() {   }, 2000); 
            });
            
            
        });
</script>