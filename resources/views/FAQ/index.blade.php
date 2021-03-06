{{-- Main layout --}}
@extends('mainLayout.main')

{{-- CSS --}}
<link rel="stylesheet" href="css/FAQ/style.css">

@section('content')
    
<div class="container-fluid mt-4">
  <div class="col text-center">

  <!--Section: FAQ-->
  <section>
    <h3 class="text-center mb-4 pb-2 text-primary fw-bold">FAQ</h3>
    <p class="text-center mb-5">
      Find the answers for the most frequently asked questions below
    </p>

    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-bag-dash-fill"></i> A simple
          question?</h6>
        <p>
          <strong><u>Absolutely!</u></strong> We work with top payment companies which guarantees
          your
          safety and
          security. All billing information is stored on our payment processing partner.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-basket-fill"></i> A question
          that
          is longer then the previous one?</h6>
        <p>
          <strong><u>Yes, it is possible!</u></strong> You can cancel your subscription anytime in
          your
          account. Once the subscription is
          cancelled, you will not be charged next month.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-box2-fill"></i> A simple
          question?
        </h6>
        <p>
          Currently, we only offer monthly subscription. You can upgrade or cancel your monthly
          account at any time with no further obligation.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-briefcase-fill"></i> A simple
          question?
        </h6>
        <p>
          Yes. Go to the billing section of your dashboard and update your payment information.
        </p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-calendar-fill"></i> A simple
          question?
        </h6>
        <p><strong><u>Unfortunately no</u>.</strong> We do not issue full or partial refunds for any
          reason.</p>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <h6 class="mb-3 text-primary"><i class="bi bi-chat-left-dots-fill"></i> Another
          question that is longer than usual</h6>
        <p>
          Of course! We're happy to offer a free plan to anyone who wants to try our service.
        </p>
      </div>
    </div>
  </section>
  <!--Section: FAQ-->
    
  </div>
</div>

@endsection