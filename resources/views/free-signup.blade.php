@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact">
        <div class="container">
            <div class="circle text-center">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="blue tag-title m-0">Sign</h3>
                <h3 class="green tag-title m-0 ps-2">Up</h3>
            </div>
            <div class="form-width">
                <form class="contact-form widget-shadow">
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
                            <a href="#" class="form-button md-btn green-bg white ms-auto">Create Account</a>
                        </div>
                    </div>
                </form>
            </div>
    </section>
</main>
@endsection