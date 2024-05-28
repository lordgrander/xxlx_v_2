<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <title>xxlx</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Lao:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

            body {
                margin: 0;
                padding: 0; 
            }

            .loading-screen {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 999;
            }

            .loading-content {
                text-align: center;
            }

            .loading-icon {
                border: 8px solid #fff;
                border-top: 8px solid transparent;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 1s linear infinite;
            }

            @keyframes spin {
                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"> 
           
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
<body class="antialiased">  




<style type="text/css">
  td
  {
    text-align: center;
    padding:0px 5px!important;
  }

  table.mytable td
  {
    padding: 5px;
  }
  .biet
  {
    color:#ed1c25;
    font-size:30px;
    font-family: "Arial, Tahoma, Helvetica",sans-serif;
  }
  .nha-sub
  {
    color:black;
    font-size:23px;
    font-family: "Arial, Tahoma, Helvetica",sans-serif;
  }

  .tr-td-soi td
  {
    background:#f3f3f3;
  }

    table.table-bordered{
        border:1px solid #d9d3cb;
        margin-top:20px;
        min-width: 20px;
    }
    table.table-bordered > thead > tr > th{
        border:1px solid #d9d3cb;
        min-width: 20px;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid #d9d3cb;
        min-width: 20px;
    }

    @keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
    }

    .spin {
        animation: spin 2s linear infinite;
    }
    .ma-head 
    {
        width:80px;
        min-width: 60px;
    }
    .svg-div 
    { 
        padding:9px 0px 9px 0px;
    }
    .svg-div-m
    { 
        padding:12px 0px 12px 0px;
    }
</style>
<br><br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <td class="ma-head">Đặc biệt</td>
                    <td colspan="12"><b class="biet p-0 number number_five number_five_top" data-number="{{ $up }}" >{!! $display_up !!}</b></td>
                </tr>

                <tr class="tr-td-soi">
                    <td class="ma-head">Giải nhất</td>
                    <td colspan="12" class=""><b class="nha-sub number number_five number_five_buttom" data-number="{{ $down }}" >{!! $display_down !!}</b></td>
                </tr>

                <tr>
                    <td class="ma-head">Giải nhì</td>
                    <td colspan="6"><div class="" id=""><b class="nha-sub number number_five number_five_one" data-number="{{ $one }}" id="encode_one">{!! $display_one !!}</b></div></td>
                    <td colspan="6"><div class="" id=""><b class="nha-sub number number_five number_five_two" data-number="{{ $two }}" id="encode_two">{!! $display_two !!}</b></div></td> 
                </tr>

                <tr class="tr-td-soi">
                    <td class="ma-head" rowspan="2">Giải ba</td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_three" data-number="{{ $three }}" id="encode_three">{!! $display_three !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_four" data-number="{{ $four }}" id="encode_four">{!! $display_four !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_five" data-number="{{ $five }}" id="encode_five">{!! $display_five !!}</b></div></td> 
                </tr>
                
                <tr class="tr-td-soi">    
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_six" data-number="{{ $six }}" id="encode_six">{!! $display_six !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_seven" data-number="{{ $seven }}" id="encode_seven">{!! $display_seven !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_five number_five_eight" data-number="{{ $eight }}" id="encode_eight">{!! $display_eight !!}</b></div></td> 
                </tr>

                <tr>
                    <td class="ma-head">Giải tư</td>
                    <td colspan="3"><div class="" id=""><b class="nha-sub number number_four number_four_one" data-number="{{ $nine }}" id="encode_nine">{!! $display_nine !!}</b></div></td> 
                    <td colspan="3"><div class="" id=""><b class="nha-sub number number_four number_four_two" data-number="{{ $ten }}" id="encode_ten">{!! $display_ten !!}</b></div></td> 
                    <td colspan="3"><div class="" id=""><b class="nha-sub number number_four number_four_three" data-number="{{ $eleven }}" id="encode_eleven">{!! $display_eleven !!}</b></div></td> 
                    <td colspan="3"><div class="" id=""><b class="nha-sub number number_four number_four_four" data-number="{{ $twelve }}" id="encode_twelve">{!! $display_twelve !!}</b></div></td> 
                </tr>

                <tr class="tr-td-soi">
                    <td class="ma-head" rowspan="2">Giải năm</td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_five" data-number="{{ $thirteen }}" id="encode_thirteen">{!! $display_thirteen !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_six" data-number="{{ $fourteen }}" id="encode_fourteen">{!! $display_fourteen !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_seven" data-number="{{ $fifteen }}" id="encode_fifteen">{!! $display_fifteen !!}</b></div></td> 
                </tr>

                <tr class="tr-td-soi">    
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_eight" data-number="{{ $sixteen }}" id="encode_sixteen">{!! $display_sixteen !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_nine" data-number="{{ $seventeen }}" id="encode_seventeen">{!! $display_seventeen !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_four number_four_ten" data-number="{{ $eighteen }}" id="encode_eighteen">{!! $display_eighteen !!}</b></div></td> 
                </tr>

                <tr>
                    <td class="ma-head" >Giải sáu</td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_three number_three_one" data-number="{{ $nineteen }}" id="encode_nineteen">{!! $display_nineteen !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_three number_three_two" data-number="{{ $twenty }}" id="encode_twenty">{!! $display_twenty !!}</b></div></td> 
                    <td colspan="4"><div class="" id=""><b class="nha-sub number number_three number_three_three" data-number="{{ $twenty_one }}" id="encode_twenty_one">{!! $display_twenty_one !!}</b></div></td> 
                </tr>

                <tr  class="tr-td-soi">
                    <td class="ma-head" >Giải bảy</td> 
                    <td colspan="3"><div><b class="biet number number_two number_two_one" data-number="{{ $twenty_two }}" id="encode_twenty_two">{!! $display_twenty_two !!}</b></div></td> 
                    <td colspan="3"><div><b class="biet number number_two number_two_two" data-number="{{ $twenty_three }}" id="encode_twenty_three">{!! $display_twenty_three !!}</b></div></td> 
                    <td colspan="3"><div><b class="biet number number_two number_two_three" data-number="{{ $twenty_four }}" id="encode_twenty_four">{!! $display_twenty_four !!}</b></div></td> 
                    <td colspan="3"><div><b class="biet number number_two number_two_four" data-number="{{ $twenty_five }}" id="encode_twenty_five">{!! $display_twenty_five !!}</b></div></td> 
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-start">
                
                <div class="p-5" style="border:solid black 1px;"> 
                    1. <br>
                    <button class="btn btn-success" id="new">NEW</button>
                </div> 
                <div class="p-5" style="border:solid black 1px;"> 
                    2.
                    <input type="text" class="form-control" id="top" autocomplete="off" value="{{ $another_box_leader->up }}"> 
                    <input type="text" class="form-control" id="bottom" autocomplete="off" value="{{ $another_box_leader->down }}"> 
                    <button class="btn btn-success" id="set_number">SAVE</button>
                </div>

                <div class="p-5" style="border:solid black 1px;">
                    3.
                    <select class="form-control" id="status">
                        <option value="SUCCESS">SUCCESS</option>
                        <option value="TELLING">TELLING</option>
                        <option value="WAITING">WAITING</option>
                    </select> 
                    <button class="btn btn-success" id="set_status">SAVE</button>
                </div> 

            </div>
        </div>
    </div>

</div>
   
</body>     
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     
     $(document).ready(function() {

        $('#new').click(function (e) {
            e.preventDefault(); 
            if(confirm("Add New?")) 
            {
                    

                $.ajax({
                    type: 'POST',
                    url: '{{ route('another.number.new') }}',
                    data: {
                        encode: "xxxxxx",  
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) { 
                        location.reload(); 
                    },
                    error: function (error) {
                        
                    },
                });
            
            }
        });

        $('#set_status').click(function (e) {
            e.preventDefault();  

            if(confirm("Change status?")) 
            {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('another.status') }}',
                    data: {
                        status: $('#status').val(),  
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) {

                        location.reload(); 
                    },
                    error: function (error) {
                        
                    },
                });
            }
        });

        $('#set_number').click(function (e) {
            e.preventDefault();  

            if(confirm("Set number?")) 
            {

                if($('#top').val()=='' || $('#bottom').val()=='')
                {
                    alert('No number');
                    return false;
                }
                else
                {

                }

                $.ajax({
                    type: 'POST',
                    url: '{{ route('another.number') }}',
                    data: {
                        top: $('#top').val(),  
                        bottom: $('#bottom').val(),  
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) { 
                        location.reload(); 
                    },
                    error: function (error) {
                        
                    },
                });
            }

        });
        
        @if($select->status=='TELLING')

        processNext('');

        function spining(position, odd) {
            var element = $('.position'); 
            console.log(element,position);
           
            var currentValue = $('.'+position).attr('data-number');
            console.log(position,'xxxxxxxxxxxxxxxx',currentValue);
            if (currentValue === '') {
                var startTime = Date.now();
                var spinInterval = setInterval(function() {
                    var spining = Math.round(Math.random() * 90000 + 10000);
                    var result = spining.toString().substring(0, odd);
                    element.innerHTML = result;
                  
                    if (Date.now() - startTime >= 10000) { // 1 minute
                        clearInterval(spinInterval);
                        saveToDatabase(position, result);
                        processNext(position);
                    }
                }, 100);
            } else {
                processNext(position);
            }
        }

        function processNext(currentPosition) {
            var positions = [
                'number_three_one', 'number_three_two', 'number_three_three', 
                'number_four_five', 'number_four_six', 'number_four_seven', 'number_four_eight',
                'number_four_nine', 'number_four_ten',
                'number_four_one', 'number_four_two', 'number_four_three', 'number_four_four',
                'number_five_three', 'number_five_four', 'number_five_five', 'number_five_six',
                'number_five_seven', 'number_five_eight',
                'number_five_one', 'number_five_two',
                'number_two_one', 'number_two_two',
                'number_two_three', 'number_two_four',
                'number_five_buttom','number_five_top' 
            ];
            
            var nextIndex = positions.indexOf(currentPosition) + 1;
            if (nextIndex < positions.length) {
                var nextPosition = positions[nextIndex];
                var odd = getOddValue(nextPosition);
                spining(nextPosition, odd);
            }
        }

        function getOddValue(position) {
            if (position.includes('number_two')) return 2;
            if (position.includes('number_three')) return 3;
            if (position.includes('number_four')) return 4;
            if (position.includes('number_five')) return 5;
        }

        function saveToDatabase(position, result) {
            $.ajax({
                url: '{{ route('another.number.save') }}',
                method: 'POST',
                data: {
                    position: position,
                    result: result,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if(response.status=='DONEx')
                    {
                        $('.'+position).html(response.result);
                        $('.'+position).attr('data-number',response.result);

                    }
                    else
                    {
                        $('.'+position).html(result);
                        $('.'+position).attr('data-number',result); 
                    }
                    console.log(position, result);
                },
                error: function(error) {
                    console.error('Error saving number:', error);
                }
            });
        }

            var spining_number = setInterval(function() {
                var top_number = "12345";
                var bottom_number = "54321";
 

                spiningx('number_three_one',3); 
                spiningx('number_three_two',3); 
                spiningx('number_three_three',3);
                
                spiningx('number_four_one',4);
                spiningx('number_four_two',4);
                spiningx('number_four_three',4);
                spiningx('number_four_four',4);
                spiningx('number_four_five',4);
                spiningx('number_four_six',4);
                spiningx('number_four_seven',4);
                spiningx('number_four_eight',4);
                spiningx('number_four_nine',4);
                spiningx('number_four_ten',4);

                spiningx('number_five_one',5);
                spiningx('number_five_two',5);
                spiningx('number_five_three',5);
                spiningx('number_five_four',5);
                spiningx('number_five_five',5);
                spiningx('number_five_six',5);
                spiningx('number_five_seven',5);
                spiningx('number_five_eight',5);
                
                spiningx('number_two_one',2);
                spiningx('number_two_two',2);
                spiningx('number_two_three',2);
                spiningx('number_two_four',2); 

                
                spiningx('number_two_one',2);
                spiningx('number_two_two',2);
                spiningx('number_two_three',2);
                spiningx('number_two_four',2);


                spiningx('number_five_top',5);  
                spiningx('number_five_buttom',5);  
                
            }, 100);
        @elseif($select->status=='WAITING')
        @elseif($select->status=='SUCCESS')
        @endif

        function spiningx(position,odd)
        {
            let check = $('.'+position).attr('data-number');
            if(check==='')
            {
                var spining = Math.round(Math.random() * 90000 + 10000);
                var result = spining.toString().substring(0, odd);

                $('.'+position).html(result); 
            }
            else
            {
                $('.'+position).html($('.'+position).attr('data-number'));

            }
        }

        
       
    });

    SelectElement("status",    "{{ $select->status }}");  

function SelectElement(id, valueToSelect) {    
    var element = document.getElementById(id);
    if (element) { // Check if the element exists
        element.value = valueToSelect;
    } else {
        console.error("Element with ID '" + id + "' not found.");
    }
}

</script>
 
      
 
<!-- encode_one -->
<!-- encode_two -->
<!-- encode_three -->
<!-- encode_four -->
<!-- encode_five -->
<!-- encode_six -->
<!-- encode_seven -->
<!-- encode_eight -->
<!-- encode_nine -->
<!-- encode_ten -->
<!-- encode_eleven -->
<!-- encode_twelve -->
<!-- encode_thirteen -->
<!-- encode_fourteen -->
<!-- encode_fifteen -->
<!-- encode_sixteen -->
<!-- encode_seventeen -->
<!-- encode_eighteen -->
<!-- encode_nineteen -->
<!-- encode_twenty -->
<!-- encode_twenty_one -->
<!-- encode_twenty_two -->
<!-- encode_twenty_three -->
<!-- encode_twenty_four -->
<!-- encode_twenty_five -->