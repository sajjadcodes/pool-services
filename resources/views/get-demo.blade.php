@extends('layouts.app')

@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="mt-3">
    <section class="widget-contact" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="circle pt-5">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center pb-4 pt-2">
                        <h3 class="green tag-title m-0">Get</h3>
                        <h3 class="blue tag-title m-0 ps-2">Demo</h3>
                    </div>
                    <p class="paragraph pe-5 roboto">Please complete and submit this form to receive an email with our demo video.
                    </p>
                    <p class="paragraph pe-5 roboto">If you have any questions, please do not hesitate to reach out to your support team. You can also request for a demo session with one of our Customer Success team members.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <form class="contact-form widget-shadow">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputFirstName" class="form-label form-text-color">First
                                    Name*</label>
                                <input type="Fname" class="form-control" id="exampleInputFirstName" aria-describedby="NameHelp">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputLastName" class="form-label form-text-color">Last
                                    Name*</label>
                                <input type="Lname" class="form-control" id="exampleInputLastName">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label form-text-color">Email*</label>
                                <input type="Email" class="form-control" id="exampleInputEmail">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputBusiness" class="form-label form-text-color">Business
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
                                        <img src="images/caret.svg" class="img-fluid caret-icon"
                                            alt="User icon">
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="review" class="form-label form-text-color">How Did You Hear
                                        About Us?*</label>
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
                            <a href="#" class="form-button md-btn green-bg white ms-auto">Get Demo</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection