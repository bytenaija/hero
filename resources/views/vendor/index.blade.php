@extends('layouts.vendor.master')
@section('title')
Vendor

@endsection
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('document').ready(function () {
        $("#voucher_number").bind('focusout', function (event) {
            var url = "transaction/getvoucher/";
            
            var voucherno = $("#voucher_number").val();
            
            if (voucherno.length >= 5) {
                url += voucherno;
                alert(url);
                $.get(url, function(data){
                    alert(data);
                    $("#validinfo").html(data);
                    $("#validinfo").show('slow');
                }, "html");
                
            } else {
                $("#validinfo").hide('slow');
            }
        });
        $("#clear").bind('click', function (event) {
            event.preventDefault();
            $("#pin").val("");
        });
        $("#bkspace").bind('click', function (event) {
            event.preventDefault();
            var vd = $("#pin").val();
            vd = vd.substring(0, vd.length - 1);

            $("#pin").val(vd);
        });
        $(".kp").bind('click', function (event) {
            event.preventDefault();

            var ed = ($("#pin").val());
            var bd = this.value;
            var together = (ed + "" + bd);

            $("#pin").val(together);
        });
    });

</script>
@section('content')
<div class="middle row center-block col-md-12">
    <div class="col-md-8">
        <form >
            <div class="form-group">
                <label for="voucher_number" class="control-label"> Voucher Number </label>
                <input type="number" id="voucher_number" name="voucher_number" value="{{old('voucher_number')}}"  class="form-control"> 

            </div>
            <p>
                <input type="password" id="pin" disabled="disabled" class="form-control">
            </p>
            <div class="middle center-block col-md-6">
                <div class="row">
                    <button class="btn btn-primary btn-num kp" type="button" value="9">9</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="8">8</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="7">7</button>
                </div>

                <div class="row">
                    <button class="btn btn-primary btn-num kp" type="button" value="6">6</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="5">5</button>
                    <button class="btn btn-primary btn-num kp" type="button"  value="4">4</button>
                </div>
                <div class="row">
                    <button class="btn btn-primary btn-num kp" type="button" value="3">3</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="2">2</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="1">1</button>
                </div>
                <div class="row">

                    <button class="btn btn-primary btn-num" type="button" id="clear">Clear</button>
                    <button class="btn btn-primary btn-num kp" type="button" value="3">0</button>
                    <button class="btn btn-primary btn-num" type="button" id="bkspace">Back<br>space</button>
                </div>
                <div class="row center-block middle col-md-9">
                    <button class="btn btn-primary" type="submit">Submit Transaction</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3" id="validinfo">
       
    </div>
</div>
@endsection

