@extends('layout.app')  

<link rel="stylesheet" href="{{ asset('css/front-menu-list.css') }}">
@section('content')  
<div id="overlayx"></div> 
                         
<div class="modal" id="my-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <table class="table table-bordered table-striped table-hover notob">
            <tr>
                <td colspan="2">
                    <button class="btn btn-outline-dark form-control" id="all_animal">ເລືອກທັງໝົດ</button>
                </td>
            </tr>
            <tr>
                <td>ນົກແອ່ນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="21,">21</span><span class="btn btn-outline-dark pick_animal" data-val="61,">61</span> <button class="btn btn-danger pick_animal" data-val="21,61,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ນົກກາງແກ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="22,">22</span><span class="btn btn-outline-dark pick_animal" data-val="62,">62</span> <button class="btn btn-danger pick_animal" data-val="22,62,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ລີງ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="23,">23</span><span class="btn btn-outline-dark pick_animal" data-val="63,">63</span> <button class="btn btn-danger pick_animal" data-val="23,63,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ກົບ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="24,">24</span><span class="btn btn-outline-dark pick_animal" data-val="64,">64</span> <button class="btn btn-danger pick_animal" data-val="24,64,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ແຫລວ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="25,">25</span><span class="btn btn-outline-dark pick_animal" data-val="65,">65</span> <button class="btn btn-danger pick_animal" data-val="25,65,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ນາກບິນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="26,">26</span><span class="btn btn-outline-dark pick_animal" data-val="66,">66</span> <button class="btn btn-danger pick_animal" data-val="26,66,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ນາກບິນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="26,">26</span><span class="btn btn-outline-dark pick_animal" data-val="66,">66</span> <button class="btn btn-danger pick_animal" data-val="26,66,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ເຕົ່າ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="27,">27</span><span class="btn btn-outline-dark pick_animal" data-val="67,">67</span> <button class="btn btn-danger pick_animal" data-val="27,67,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ໄກ່</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="28,">28</span><span class="btn btn-outline-dark pick_animal" data-val="68,">68</span> <button class="btn btn-danger pick_animal" data-val="28,68,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ອ່ຽນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="29,">29</span><span class="btn btn-outline-dark pick_animal" data-val="69,">69</span> <button class="btn btn-danger pick_animal" data-val="29,69,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ປາໃຫຍ່</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="30,">30</span><span class="btn btn-outline-dark pick_animal" data-val="70,">70</span> <button class="btn btn-danger pick_animal" data-val="30,70,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ກຸ້ງ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="31,">31</span><span class="btn btn-outline-dark pick_animal" data-val="71,">71</span> <button class="btn btn-danger pick_animal" data-val="31,71,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ງູ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="32,">32</span><span class="btn btn-outline-dark pick_animal" data-val="72,">72</span> <button class="btn btn-danger pick_animal" data-val="32,72,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ແມງມຸມ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="33,">33</span><span class="btn btn-outline-dark pick_animal" data-val="73,">73</span> <button class="btn btn-danger pick_animal" data-val="33,73,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ກວາງ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="34,">34</span><span class="btn btn-outline-dark pick_animal" data-val="74,">74</span> <button class="btn btn-danger pick_animal" data-val="34,74,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ແບ້</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="35,">35</span><span class="btn btn-outline-dark pick_animal" data-val="75,">75</span> <button class="btn btn-danger pick_animal" data-val="35,75,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ເຫງັນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="36,">36</span><span class="btn btn-outline-dark pick_animal" data-val="76,">76</span> <button class="btn btn-danger pick_animal" data-val="36,76,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ຫລິ່ນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="37,">37</span><span class="btn btn-outline-dark pick_animal" data-val="77,">77</span> <button class="btn btn-danger pick_animal" data-val="37,77,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ເຫມັ້ນ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="38,">38</span><span class="btn btn-outline-dark pick_animal" data-val="78,">78</span> <button class="btn btn-danger pick_animal" data-val="38,78,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ກະປູ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="39,">39</span><span class="btn btn-outline-dark pick_animal" data-val="79,">79</span> <button class="btn btn-danger pick_animal" data-val="39,79,">ເຕັມນາມ</button></td>
            </tr>
            <tr>
                <td>ນົກອິນຊີ</td>
                <td class="text-right"><span class="btn btn-outline-dark first-animal pick_animal" data-val="40,">40</span><span class="btn btn-outline-dark pick_animal" data-val="80,">80</span> <button class="btn btn-danger pick_animal" data-val="40,80,">ເຕັມນາມ</button></td>
            </tr>
         </table>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary close_modal form-control" data-dismiss="modal"  data-id="my-modal">ປິດ</button>
      </div>
    </div>
  </div>
</div>
 
 
<div class="modal" id="my-modal-x" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <table class="table table-bordered table-striped table-hover notob">
            <tr>
                <td colspan="2">
                    <button class="btn btn-outline-dark form-control" id="all_animal_x">ເລືອກທັງໝົດ</button>
                </td>
            </tr>
            <tr>
                <td>ປານ້ອຍ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="01,">01</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="41,">41</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="81,">81</span>
                    <button class="btn btn-danger pick_animal" data-val="01,41,81,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຫອຍ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="02,">02</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="42,">42</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="82,">82</span>
                    <button class="btn btn-danger pick_animal" data-val="02,42,82,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຫ່ານ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="03,">03</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="43,">43</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="83,">83</span>
                    <button class="btn btn-danger pick_animal" data-val="03,43,83,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ນົກຍຸງ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="04,">04</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="44,">44</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="84,">84</span>
                    <button class="btn btn-danger pick_animal" data-val="04,44,84,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ສິງ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="05,">05</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="45,">45</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="85,">85</span>
                    <button class="btn btn-danger pick_animal" data-val="05,45,85,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ເສືອ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="06,">06</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="46,">46</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="86,">86</span>
                    <button class="btn btn-danger pick_animal" data-val="06,46,86,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຫມູ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="07,">07</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="47,">47</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="87,">87</span>
                    <button class="btn btn-danger pick_animal" data-val="07,47,87,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ກະຕ່າຍ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="08,">08</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="48,">48</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="88,">88</span>
                    <button class="btn btn-danger pick_animal" data-val="08,48,88,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຄວາຍ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="09,">09</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="49,">49</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="89,">89</span>
                    <button class="btn btn-danger pick_animal" data-val="09,49,89,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ນາກນ້ຳ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="10,">10</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="50,">50</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="90,">90</span>
                    <button class="btn btn-danger pick_animal" data-val="10,50,90,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຫມາ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="11,">11</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="51,">51</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="91,">91</span>
                    <button class="btn btn-danger pick_animal" data-val="11,51,91,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ມ້າ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="12,">12</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="52,">52</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="92,">92</span>
                    <button class="btn btn-danger pick_animal" data-val="12,52,92,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຊ້າງ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="13,">13</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="53,">53</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="93,">93</span>
                    <button class="btn btn-danger pick_animal" data-val="13,53,93,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ແມວ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="14,">14</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="54,">54</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="94,">94</span>
                    <button class="btn btn-danger pick_animal" data-val="14,54,94,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຫນູ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="15,">15</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="55,">55</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="95,">95</span>
                    <button class="btn btn-danger pick_animal" data-val="15,55,95,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ເຜີ້ງ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="16,">16</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="56,">56</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="96,">96</span>
                    <button class="btn btn-danger pick_animal" data-val="16,56,96,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ນົກຍາງ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="17,">17</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="57,">57</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="97,">97</span>
                    <button class="btn btn-danger pick_animal" data-val="17,57,97,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ແມວປ່າ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="18,">18</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="58,">58</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="98,">98</span>
                    <button class="btn btn-danger pick_animal" data-val="18,58,98,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ກະເບື້ອ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="19,">19</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="59,">59</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="99,">99</span>
                    <button class="btn btn-danger pick_animal" data-val="19,59,99,">ເຕັມນາມ</button>
                </td>
            </tr> 
            <tr>
                <td>ຂີ້ເຂັບ</td>
                <td class="text-right">
                    <span class="btn btn-outline-dark first-animal pick_animal" data-val="20,">20</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="60,">60</span>
                    <span class="btn btn-outline-dark pick_animal" data-val="00,">00</span>
                    <button class="btn btn-danger pick_animal" data-val="20,60,00,">ເຕັມນາມ</button>
                </td>
            </tr> 
         </table>
      </div>
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary close_modal form-control" data-dismiss="modal"  data-id="my-modal-x">ປິດ</button>
      </div>
    </div>
  </div>
</div> 
<div class="container">
     <div class="row"> 
        
        <div class="col-12 mt-2">
            <div class="card notob p-3">
                <div class="card-header text-center"> 
                    <h3>{{ $head_menu }}</h3>
                    @if($gain_number=='2')
                        <button class="btn btn-danger" id="animal_number">ເລືອກ 2 ປ່ອງ</button>
                        <button class="btn btn-danger" id="animal_number_x">ເລືອກ 3 ປ່ອງ</button>
                    @else
                    @endif
                </div>
                <div class="card-body p-1 d-flex"> 
                    <table class="table   ">
                        <thead> 
                        </thead>
                        <tbody>
                            <tr> 
                                <td class="text-center"> 
                                    <input type="text" class="form-control simple-input" id="inputValues" placeholder="ປ້ອນເລກ" value="1,2,3,4,5,6,7,8,9">
                                </td>
                                <td class="text-right"> 
                                    <input type="text" class="form-control simple-input" placeholder="ຈຳນວນເງິນ" id="set_price" value="0"  onkeyup="javascript:this.value=Comma(this.value);">
                                </td> 
                                <td>
                                    <button class="btn btn-danger" id="goButton">Go</button>
                                </td>
                            </tr> 
                        </tbody>
                        <tfoot> 
                        </tfoot>
                    </table>   
                </div> 
            </div> 
        </div> 
        <div class="col-12 mt-2">
            <div class="card notob p-3">
                <table class="table table-bordered table-hover  ">
                    <thead>
                        <tr> 
                            <th class="text-center"  width="8%"></th>
                            <th class="text-center">ໝາຍເລກ</th>
                            <th class="text-center">ຈຳນວນເງິນ</th>  
                            <th class="text-center"></th>  
                        </tr>
                    </thead>
                    <tbody id="numberInputsContainer">
                    </tbody>
                    <!-- <tfoot id="badnumberInputsContainer"> 
                    </tfoot> -->
                </table> 
            </div>
        </div>
        
        <div class="col-12 mt-2">
            <div class="card notob"> 
                <div class="p-3">
                    <div>
                        <h5 class="text-danger">1. ຕັ້ງລາຄາ :</h5>
                            <button class="btn btn-outline-dark set-all" data-id="1K">1K</button>
                            <button class="btn btn-outline-dark set-all" data-id="5K">5K</button>
                            <button class="btn btn-outline-dark set-all" data-id="10K">10K</button>
                            <button class="btn btn-outline-dark set-all" data-id="20K">20K</button>
                            <button class="btn btn-outline-dark set-all" data-id="50K">50K</button>
                            <button class="btn btn-outline-dark set-all" data-id="100K">100K</button>
                            <button class="btn btn-outline-dark set-all" data-id="500K">500K</button>
                            <button class="btn btn-outline-dark set-all" data-id="1000">1,000K</button>
                    </div>
                    <hr>
                    <div>
                        <h5 class="text-danger">2. ເລືອກແທງ :</h5>
                        <select name="pick_type" id="pick_type" class="w-100 btn btn-outline-dark">
                            <option value="UP">ແທງບົນ</option>
                            <option value="DOWN">ແທງລ່າງ</option>
                            <option value="UPDOWN">ບົນ+ລ່າງ</option>
                        </select> 
                    </div>
                    <hr>
                    <div>
                        <h5 class="text-danger">3. ຍອດລວມ :</h5> 
                        <div class="d-flex justify-content-between">
                            <div>
                                ຍອດເງິນເຄຣດີທ : {{ number_format($money) }} ກີບ
                            </div>
                            <div>
                                <span id="display_total">ລວມ  : 0 ກີບ</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-3">
                    <button id="submit_data" class="btn btn-danger w-100">Go</button> 
                </div>
            </div>
        </div>
     </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#inputValues').focus();

            $('.set-all').click(function() {
                let set = $(this).attr('data-id');
                 
                if(set=='1K')
                {
                    $('.price').val(number_format('1000', '', '', ','));
                }
                else if(set=='5K')
                {
                    $('.price').val(number_format('5000', '', '', ','));
                }
                else if(set=='10K')
                {
                    $('.price').val(number_format('10000', '', '', ','));
                }
                else if(set=='20K')
                {
                    $('.price').val(number_format('20000', '', '', ','));
                }
                else if(set=='50K')
                {
                    $('.price').val(number_format('50000', '', '', ','));
                }
                else if(set=='100K')
                {
                    $('.price').val(number_format('100000', '', '', ','));
                }
                else if(set=='500K')
                {
                    $('.price').val(number_format('500000', '', '', ','));
                }
                else if(set=='1000')
                {
                    $('.price').val(number_format('1000000', '', '', ','));
                }
                else
                {
                    $('.price').val('');
                }
                cacu_total();
            });

            $('#pick_type').change(function() { 
                cacu_total(); 
            });
            
            $('.pick_animal').click(function() {
                let make = $('#inputValues').val();
                let add = $(this).attr('data-val');
                $('#inputValues').val(add +'' +make);
                $('#overlayx').hide();
                $('#my-modal').hide();
                $('#my-modal-x').hide();
            });

            $('#all_animal').click(function() {
                let add = `21,61,22,62,23,63,24,64,25,65,26,66,26,66,27,67,28,68,29,69,30,70,31,71,32,72,33,73,34,74,35,75,36,76,37,77,38,78,39,79,40,80`;
                let make = $('#inputValues').val(); 
                $('#inputValues').val(add +'' +make);
                $('#overlayx').hide();
                $('#my-modal').hide();
                $('#my-modal-x').hide();
            });
            
            $('#all_animal_x').click(function() {
                let add = `01,41,81,02,42,82,03,43,83,04,44,84,05,45,85,06,46,86,07,47,87,08,48,88,09,49,89,10,50,90,11,51,91,12,52,92,13,53,93,14,54,94,15,55,95,16,56,96,17,57,97,18,58,98,19,59,99,20,60,00,`;
                let make = $('#inputValues').val(); 
                $('#inputValues').val(add +'' +make);
                $('#overlayx').hide();
                $('#my-modal').hide();
                $('#my-modal-x').hide();
            });
                 
            $('#animal_number').click(function() {
                $('#overlayx').show();
                $('#my-modal').show();
            });
                 
            $('#animal_number_x').click(function() {
                $('#overlayx').show();
                $('#my-modal-x').show();
            });

            $('.close_modal').click(function() {
                 $('#'+ $(this).attr('data-id')).hide();
                 $('#overlayx').hide();
            });


            $('#overlayx').click(function() {
                $('#my-modal').hide();
                $('#overlayx').hide();
            });

            $('#inputValues').keyup(function() {
                if (event.keyCode === 13) {
                    $('#goButton').click();
                }
            });

            $('#set_price').keyup(function() {
                if (event.keyCode === 13) {
                    $('.price ').val($(this).val());
                }
            });
            
            $('#goButton').click(function() {
                var inputValues = $('#inputValues').val();
                var set_price = $('#set_price').val();
                var numberInputsContainer = $('#numberInputsContainer'); 
                var validNumber = {{ $gain_number }}; 
        
                numberInputsContainer.empty(); 
                // var numbers = inputValues.match(/-?\d+(\.\d+)?/g);
                // var numbers = inputValues.match(/-?\d+(\.\d+)?(?=[,\-|/\\\s]|$)/g);
                // inputValues = inputValues.replace(/-/g, ','); 
                // inputValues = inputValues.replace(/[\-|\s/\\.,]/g, ','); 
                inputValues = inputValues.replace(/[\-|\s/\\.,;=\[\]{}_:]/g, ',');
 
                var numbers = inputValues.match(/-?\d*\.?\d+(?=[,\-|/\\\s]|$)/g);

                if (numbers) {
                    var count = 1;
                    $.each(numbers, function(index, number) { 
                        var inputField = `<input type="number" class="form-control number-input text-center simple-input number" value="${number}">`;
                        
                        let box = ` 
                            <tr> 
                                <td class="text-center">
                                    ${count++}
                                </td>
                                <td class="text-center">
                                    ${inputField}
                                </td>
                                <td class="text-right"> 
                                    <input type="text" class="form-control simple-input price text-right" value="${number_format (set_price, '', '', ',') }"  onkeyup="javascript:this.value=Comma(this.value);">
                                </td>  
                                <td class="text-center">
                                    <button class="btn btn-danger btn-delete">
                                        X
                                    </button>
                                </td>
                            </tr> 
                        `;

                        if (number.length > validNumber) {  
                        } else { 
                            numberInputsContainer.append(box);
                        }
                    });
                } else {
                    alert('ປ້ອນໝາຍເລກກ່ອນ.');
                }

                        // Add event listener for number inputs to restrict to 1 digit
                numberInputsContainer.on('keyup', '.number-input', function() {
                    let value = $(this).val();
                    if (value.length > {{ $gain_number }}) {
                        $(this).val(value.substring(0, 1));
                    }
                });
                cacu_total();
            });

            // Add event listener for delete buttons
            $(document).on('click', '.btn-delete', function() {
                $(this).closest('tr').remove();
            });

            $('#submit_data').click(function() {
                if(confirm("ເລີ່ມແທງ?"))
                { 
                    if(cacu_total()>{{ $money }})
                    {
                        alert('ຍອດເຄຣດີທບໍ່ພໍ ກະລຸນາເຕີມເຄຣດີທ');
                    }
                    else
                    {
                        
                    } 
                    $('#submit_data').prop('disabled','disabled');
                    let custom_data = '123';
                    let pick_type = $('#pick_type').val();
                    let numberInputsContainer = $('#numberInputsContainer');
                    let validNumber = {{ $gain_number }}; 
                    
                    // Collect number and price data
                    let data = [];
                    let valid = true; // Flag to check validation

                    numberInputsContainer.find('tr').each(function() {
                        let number = $(this).find('.number').val();
                        let price = $(this).find('.price').val();
                      
                        if (number !== '') {
                            if(price!=='' && price!=='0')
                            {
                                if(number.length==validNumber)
                                { 
                                    data.push({
                                        number: number,
                                        price: price
                                    });
                                }
                                else
                                {
                                    $(this).find('.number').focus();
                                    alert('ໝາຍເລກນີ້ບໍ່ຄົບ');
                                    valid = false; // Set valid to false if any field is empty
                                    
                                    $('#submit_data').prop('disabled','');
                                    return false; // Break the loop
                                }
                            }
                            else
                            { 
                                $(this).find('.price').focus();
                                alert('ປ້ອນຈຳນວນເງິນ');
                            valid = false; // Set valid to false if any field is empty
                            
                            $('#submit_data').prop('disabled','');
                            return false; // Break the loop
                            }
                        } else {
                            if (number === '') {
                                $(this).find('.number').focus();
                                alert('ປ້ອນໝາຍເລກ');
                            } else if (price === '' && price==='0') {
                                $(this).find('.price').focus();
                                alert('ປ້ອນຈຳນວນເງິນ');
                            }
                            valid = false; // Set valid to false if any field is empty
                            
                            $('#submit_data').prop('disabled','');
                            return false; // Break the loop
                        }
                    }); 

                    // Proceed with AJAX only if all fields are valid
                    if (valid) {
                        $.ajax({
                            url: '{{ route('buy.run.start',$gain_number) }}', // Replace with your Laravel route
                            type: 'POST',
                            data: {
                                custom_data: custom_data,
                                pick_type: pick_type,
                                data: data,
                                _token: $('meta[name="csrf-token"]').attr('content') // Ensure the CSRF token is correctly included
                            },
                            success: function(response) {
                                if(response.status=='CLOSED')
                                {
                                    alert('ຂໍອະໄພປິດການຂາຍແລ້ວ');
                                }
                                else
                                {
                                    if(response.status=='DOUBLE')
                                    {
                                        window.location.href = '{{ url('/2749/248/0302/4421/7799/778') }}/'+ response.order_one + '/' + response.order_two;   
                                    }
                                    else
                                    {
                                        window.location.href = '{{ url('/2749/248/0302/4421/7799/778') }}/'+ response.order;  
                                    }
                                }
                                
                            },
                            error: function(error) {
                                console.error(error);
                                $('#submit_data').prop('disabled','');
                                alert('ເພີ່ມໝາຍເລກ.');
                            }
                        });
                    }
                
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

        function number_format (number, decimals, dec_point, thousands_sep) {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        function cacu_total()
        {
            let total = 0;
            
            let numberInputsContainer = $('#numberInputsContainer');
                numberInputsContainer.find('tr').each(function() {
                    let number = $(this).find('.number').val();
                    let price = $(this).find('.price').val();

                    if (number !== '' && price !== '') {
                        total = +(total) + +(price.replace(/,/g, ''));
                        console.log(total);
                        console.log(price);
                    } else {
                     
                    }
                });

                if($('#pick_type').val()=='UPDOWN')
                {
                    $('#display_total').html('ລວມ  : ' + number_format(total*2,'','',',') + ' ກີບ (ບົນ + ລ່າງ)'); 
                    return total*2;
                }
                else
                {
                    $('#display_total').html('ລວມ  : ' + number_format(total,'','',',') + ' ກີບ');  
                    return total;
                } 
        }
    </script>
@endsection