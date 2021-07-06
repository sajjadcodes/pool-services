@extends('layouts.app');

@section('content')
<!-- ==== Page Sign_Up Start === -->
<main class="signup-tab-form">
    <div class="container">
        <div class="circle mt-5">
            <img class="img-fluid" src="/images/ellipse.png">
            <img class="img-fluid" src="/images/ellipse.png">
            <img class="img-fluid" src="/images/ellipse.png">
        </div>
        <div class="d-flex align-items-center pb-4 pt-2">
            <h3 class="blue tag-title m-0">Sign</h3>
            <h3 class="green tag-title m-0 ps-1">Up</h3>
        </div>

        <!-- ==== Page Sign_Up(Tabs_Button) Start === -->
        <ul class="nav nav-pills signup-tab my-4 d-flex justify-content-between signup-form-width tilt-line" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1</button>
                <small class="form-text-color active">Setting Up Your Account</small>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2</button>
                <small class="form-text-color active">Choose <br />Your Plan</small>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3</button>
                <small class="form-text-color active">Finalize</small>
            </li>
        </ul>
        <!-- ==== Page Sign_Up(Tabs_Content) Start === -->
        <div class="tab-content" id="pills-tabContent">

            <!-- ==== Page Sign_Up(tabs_content_1) Start === -->
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form class="contact-form widget-shadow widget-contact signup-form-width">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="exampleInputFirstName" class="form-label form-text-color">First
                                Name*</label>
                            <input type="Fname" class="form-control" id="exampleInputFirstName" aria-describedby="NameHelp">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="exampleInputLastName" class="form-label  form-text-color">Last
                                Name*</label>
                            <input type="Lname" class="form-control" id="exampleInputLastName">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="exampleInputBusiness" class="form-label  form-text-color">Business
                                Name*</label>
                            <input type="Business" class="form-control" id="exampleInputBusiness">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="exampleInputPhone" class="form-label form-text-color">Mobile
                                Phone*</label>
                            <input type="Phone" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp">
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                                <label for="exampleInputClient" class="form-label fo form-text-color">Client
                                    Count*</label>
                                <span class="form-input">
                                    <select class="form-control" id="">
                                        <option>Choose One</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                    <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                </span>
                            </div>
                        </div>
                        <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                            <img class="img-fluid" src="images/line.svg" alt="line">
                            <small class="form-text-color">Username and Password</small>
                            <img class="img-fluid" src="images/line.svg" alt="line">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="exampleInputEmail" class="form-label form-text-color">Email*</label>
                            <input type="Email" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="exampleInputPassword" class="form-label  form-text-color">Password*</label>
                            <input type="Password" class="form-control" id="exampleInputPassword">
                        </div>
                        <div class="d-flex align-items-center py-4">
                            <small class="form-text-color text-center">Already have an Account?<a href="#"
                                    class="blue ps-1 bold">Sign In</a></small>
                            <a href="#" class="form-button md-btn green-bg white ms-auto">Next Step
                                <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon">
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ==== Page Free Sign_Up(Tabs_Content_2) Start === -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form class="contact-form widget-shadow widget-contact">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-7">
                            <h6 class="bold grey pb-4 signup-subtitle">1. Choose the plans that’s right for you
                            </h6>
                            <ul class="p-0 m-0">
                                <li class="d-flex align-items-center">
                                    <img class="img-fluid" src="/images/yes.png" alt="">
                                    <p class="form-text-color style-italic m-0">No contracts, no commitments</p>
                                </li>
                                <li class="d-flex align-items-center pt-3">
                                    <img class="img-fluid" src="/images/yes.png" alt="">
                                    <p class="form-text-color style-italic m-0">Change or cancel your plan anytime
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-5 d-flex justify-content-end align-items-end">
                            <div class="button-group left">
                                <div class="button left active">Monthly</div>
                                <div class="button right">Annualy</div>
                            </div>
                        </div>
                    </div>

                    <!-- ******** Planing tabs ********* -->
                    <div class="planing-tabs mb-5">
                        <ul class="nav nav-pills mb-3 d-flex align-items-center justify-content-end mt-5" id="pills-tab" role="tablist">
                            <li class="nav-item tab-item ms-4" role="presentation">
                                <button class="nav-link active" id="startup-tab" data-bs-toggle="pill" data-bs-target="#startup" type="button" role="tab" aria-controls="startup" aria-selected="true">Startup</button>
                            </li>
                            <li class="nav-item tab-item ms-4" role="presentation">
                                <button class="nav-link" id="standard-tab" data-bs-toggle="pill" data-bs-target="#standard" type="button" role="tab" aria-controls="standard" aria-selected="false">Standard</button>
                            </li>
                            <li class="nav-item tab-item ms-4" role="presentation">
                                <button class="nav-link" id="enterprise-tab" data-bs-toggle="pill" data-bs-target="#enterprise" type="button" role="tab" aria-controls="enterprise" aria-selected="false">Enterprise</button>
                            </li>
                        </ul>
                        <!-- ******** Planing tabs Content ********* -->
                        <div class="tab-content" id="pills-tabContent">
                            <!-- ** Planing tabs Content_Startup_1 ** -->
                            <div class="tab-pane fade show active" id="startup" role="tabpanel" aria-labelledby="startup-tab">
                                <div class="data d-flex">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Monthly Price</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">$49.50</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">$99</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">$0.40 Cents
                                            <br>Per Client</small>
                                    </div>
                                </div>
                                <div class="data d-flex lighten-gray">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Clients/Properties</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">10 - 40</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">40 - 300</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">300+</small>
                                    </div>
                                </div>
                                <small class="form-text-color text-end pt-3 d-block">Please
                                    <a href="#" class="blue bold"> contact us</a>
                                    for detail information and we’ll be happy to help.
                                </small>
                            </div>
                            <!-- ** Planing tabs Content_standard_2 ** -->
                            <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                <div class="data d-flex">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Monthly Price</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">$29.80</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">$55</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">$2.10 Cents
                                            <br>Per Client</small>
                                    </div>
                                </div>
                                <div class="data d-flex lighten-gray">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Clients/Agents</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">20 - 15</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">92 - 542</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">255+</small>
                                    </div>
                                </div>
                                <small class="form-text-color text-end pt-3 d-block">Please
                                    <a href="#" class="blue bold"> contact us</a>
                                    for detail information and we’ll be happy to help.
                                </small>
                            </div>
                            <!-- ** Planing tabs Content_Enterprise_3 ** -->
                            <div class="tab-pane fade" id="enterprise" role="tabpanel" aria-labelledby="enterprise-tab">
                                <div class="data d-flex">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Monthly Price</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">$29.80</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">$55</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">$2.10 Cents
                                            <br>Per Client</small>
                                    </div>
                                </div>
                                <div class="data d-flex lighten-gray">
                                    <div class="data--table cell-lg">
                                        <small class="form-text-color">Clients/Agents</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block">20 - 15</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-1">92 - 542</small>
                                    </div>
                                    <div class="data--table">
                                        <small class="form-text-color text-center d-block ps-3">255+</small>
                                    </div>
                                </div>
                                <div class="client-count blue-bg ms-auto d-flex align-items-center justify-content-between p-3">
                                    <div class="widget-blue">
                                        <h5 class="white form-text-color mb-3">Enterprise Client Count</h5>
                                        <p class="white form-text-color m-0">Enterprise plans are purchased in increments
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <span class="form-input">
                                            <select class="form-control" id="">
                                                <option>Choose One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                            <img src="images/caret.svg" class="img-fluid caret-icon"
                                                alt="User icon">
                                        </span>
                                    </div>

                                </div>
                                <small class="form-text-color text-end pt-3 d-block">Please<a href="#"
                                        class="blue bold">contact us</a> for detail information and we’ll be
                                    happy to help.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pb-5 d-block">
                            <h6 class="bold grey pb-4 signup-subtitle m-0">2. Choose your setup training</h6>
                            <p class="form-text-color style-italic m-0 ps-4">Get tailored and professional help from one of our Onboarding Specialist.</p>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="pool-training">
                                <ul class="p-0 m-0">
                                    <li class="header d-flex justify-content-between white">
                                        <p class="plans--text p-0 m-0 ">Without Setup Training</p>
                                        <p class="plans--text p-0 m-0 ">$0</p>
                                    </li>
                                    <li class="text lighten-gray">
                                        <p class="form-text-color" style="line-height: 26px;">
                                            So you want to go at it alone... not to fear, you can always reach out to our Customer Support team for specific help needs FREE of charge
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 ">
                            <div class="pool-training ">
                                <ul class="p-0 m-0 ">
                                    <li class="header d-flex justify-content-between white">
                                        <p class="plans--text p-0 m-0 ">One-Time Setup & Training</p>
                                        <p class="plans--text p-0 m-0 ">$50</p>
                                    </li>
                                    <li class="text lighten-gray">
                                        <p class="form-text-color" style="line-height: 26px;">Get tailored and professional help from one of our Onboarding Specialist. Including, but not limited to:</p>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0">Import clients and
                                                create routes</p>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0"> Setup tech’s task items
                                                and dosage costs</p>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0">Setup recurring invoices
                                                and jobs</p>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0">Setup visit report
                                                templates (email/sms)</p>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0">Answer questions and
                                                provide guidance, etc.</p>
                                        </span>
                                        <span class="d-flex align-items-center">
                                            <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                            <p class="form-text-color linehight-42 m-0">... and more to make you
                                                successful with PSS!</p>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="#"><img src="images/pre-btn.svg" class="img-fluid" alt=""></a>
                        <a href="#" class="form-button md-btn green-bg white ms-auto">Next Step
                            <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon">
                        </a>
                    </div>
                </form>
            </div>

            <!-- ==== Page Free Sign_Up(tabs_content_3) Start === -->
            <div class="tab-pane fade p-payment" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <form class="contact-form widget-shadow  widget-contact p-0" id='payment_form' action='{{ route('stripePost') }}'>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="payment-method p-payment-method">
                                <h6 class="widget-subtitle grey pb-5 m-0">Payment Method</h6>
                                <div class="brand-logos pb-4">
                                    <img class="img-fluid" src="images/visa.svg" alt="">
                                    <img class="img-fluid" src="images/master.svg" alt="">
                                    <img class="img-fluid" src="images/express.svg" alt="">
                                    <img class="img-fluid" src="images/discover.svg" alt="">
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="exampleInputFirstName" class="form-label form-text-color px-4">Name On Card</label>
                                            <input type="Fname" class="form-control px-4" required id="exampleInputFirstName" aria-describedby="NameHelp" name="" value="Name On Card">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="exampleInputBilling" class="form-label form-text-color px-4">Billing Address</label>
                                            <input type="Billing" class="form-control px-4" required id="exampleInputBilling" value="Billing Address" name="">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="exampleInputCard" class="form-label form-text-color px-4">Card Number</label>
                                            <span class="form-input">
                                                <input type="text" required class="form-control px-4 form-control card-number"
                                                    id="exampleInputCardNumber" value="Card Number" name=""
                                                    required="" autocomplete="current-password"
                                                    data-keeper-lock-id="">
                                                <img src="images/pass.svg" class="img-fluid caret-icon"
                                                    alt="User icon">
                                            </span>
                                        </div>
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="exampleInputClient" class="form-label form-text-color px-4">Expiration
                                                    Date</label>
                                                <span class="form-input">
                                                    <select class="form-control card-expiry-month  px-4" id="" required name="">
                                                        <option>Month</option>
                                                        <option value='1'>Jan</option>
                                                        <option value='2'>Feb</option>
                                                        <option value='3'>March</option>
                                                        <option value='4'>April</option>
                                                        <option value='5'>june</option>
                                                        <option value='6'>july</option>
                                                        <option value='7'>august</option>
                                                    </select>
                                                    <img src="images/caret.svg" class="img-fluid caret-icon"
                                                        alt="User icon">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="form-group">
                                                <label class="form-label">&nbsp;</label>
                                                <span class="form-input">
                                                    <select class="form-control card-expiry-year px-4" required id="" name="">
                                                        <option>Year</option>
                                                        <option>2021</option>
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                    </select>
                                                    <img src="images/caret.svg" class="img-fluid caret-icon"
                                                        alt="User icon">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-12  col-md-4 mb-3">
                                            <label for="exampleInputFirstName card-cvc" required class="form-label form-text-color px-4">CVV</label>
                                            <input type="Fname" class="form-control px-4" id="exampleInputFirstName" aria-describedby="NameHelp" name="" value="CVV">
                                        </div>
                                    </div>
                                </form>
                                <div class="primary-padding my-5">
                                    <img class="img-fluid" src="images/stripe.svg" alt="">
                                    <img class="img-fluid" src="images/aes.svg" alt="">
                                    <img class="img-fluid" src="images/safe.svg" alt="">
                                    <img class="img-fluid" src="images/guaranteed.svg" alt="">
                                </div>
                                <a href="#"><img src="images/pre-btn.svg" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 blue-bg">
                            <div class="order-summary p-payment-method">
                                <h6 class="widget-subtitle white pb-5 m-0">Order Summary</h6>
                                <div class="row d-flex align-items-center mb-5">
                                    <div class="col-sm-12 col-md-2">
                                        <div class="card"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <h6 class="form-text-color white bold">Start Up Plan</h6>
                                        <p class="form-text-color white m-0">10-40 Clients</p>
                                    </div>
                                    <div class="col-sm-12 col-md-2 text-end ">
                                        <h6 class="form-text-color white bold m-0">$49.50</h6>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col-sm-12 col-md-2">
                                        <div class="card"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <h6 class="form-text-color white bold">Training</h6>
                                        <p class="form-text-color white m-0">One-Time Set Up</p>
                                    </div>
                                    <div class="col-sm-12 col-md-2 text-end ">
                                        <h6 class="form-text-color white bold m-0">$50.50</h6>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="widget-subtitle white pb-3 m-0">Coupon Code</h6>
                                <form class="coupon-code d-flex align-items-center justify-content-between">
                                    <input type="text" class="form-control coupon-field" id="code" name="" value="coupon code">
                                    <a href="#" class="form-text-color coupon-btn green-bg white d-flex align-items-center justify-content-center">Apply</a>
                                </form>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between pb-2">
                                    <p class="form-text-color white">Subtotal</p>
                                    <p class="form-text-color white">$99.50</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="form-text-color white">Discount</p>
                                    <p class="form-text-color white"> - </p>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between pb-3">
                                    <h6 class="widget-subtitle white bold">Total</h6>
                                    <h6 class="widget-subtitle white bold">$99.50</h6>
                                </div>
                                <p class="text-14 white pb-5">All monthly subscription plans will be automatically renewed using the payment method you provide today. You may cancel at anytime to avoid future charges. By clicking “Pay & Create Account”, you agree to Pool Service
                                    Software
                                    <span class="bold">Terms of Use</span> and
                                    <span class="bold">Privacy Statement</span>.
                                </p>
                                <span class="form-input">
                                <button class="pay-btn ps-4 green-bg white form-text-color bold d-flex align-items-center justify-content-center flex-direction-columns" type="submit">Pay
                                        & Create Account <span class="pay-text white m-0">100% Secure Checkout</span>
                                <img src="images/lock.svg" class="img-fluid lock-icon" alt="User icon"></button>
                                    <!-- <a href="#"
                                        class="pay-btn ps-4 green-bg white form-text-color bold d-flex align-items-center justify-content-center flex-direction-columns">Pay
                                        & Create Account
                                        <span class="pay-text white m-0">100% Secure Checkout</span>
                                <img src="images/lock.svg" class="img-fluid lock-icon" alt="User icon">
                                </a> -->
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection


