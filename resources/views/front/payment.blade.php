@extends('layout.main')

@section('content')
<div class="container">
    <br><br><br>
   <div class="row">
        <div class="small-6 small-centered columns">
        <form action="{{route('payment.store')}}" method="POST" id="payment-form">
            {{csrf_field()}}
            
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_GrOMUKI1IiT9pHQP5HRDKWO9"
    data-amount=""
    data-name="MyKey Shirts"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
        </div>
    </div>
    <br><br><br><br><br><br>
 </div>

@endsection