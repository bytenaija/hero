<!--<script type="text/javascript">
    alert("Hahahaha");
</script>-->

@if(Session::has('errors'))
<h3 class="error">
    @foreach($errors as $error)
    {{$error}}
    @endforeach
    Hahahahahahahaahhahahaahaha
</h3>
@else
<div class="panel panel-info">
            <div class="panel-heading"><h4>Beneficiary Information</h4></div>
            <div class="panel-body">
                <!--
                <div id="vaImage">
                    @if(!empty($beneficiary))
                    <img class="img-responsive" src="{{$beneficiary->image}}">
                    @endif
                </div>
                <div id="benInfo">
                    @if(!empty($beneficiary))
                    Name : {{ $beneficiary->firstname, $beneficiary->lastname}}
                    Sex  : {{$beneficiary->sex}}

                    @endif
                    @if(!empty($voucher))
                    Voucher Serial Number : {{$voucher->serial}}
                    @endif
                </div>
                -->
                {{$voucherid}}
            </div>
        </div>
@endif