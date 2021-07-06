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
                        <h3 class="green tag-title m-0">Contact</h3>
                        <h3 class="blue tag-title m-0 ps-2">Support</h3>
                    </div>
                    <p class="paragraph pe-5 roboto">
                        Please fill out this form and one of our customer support agents will follow-up and promptly assist you.
                    </p>
                    <p class="paragraph pe-5 roboto">
                        You will receive an email from our support system after you submit this form. Once you receive the acknowledgement email, you can reply to that email and continue the conversation with the support agent.</p>
                </div>
                <div class="col-12 col-md-6">
                    <form class="contact-form widget-shadow">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="exampleInputFirstName" class="form-label form-text-color">First
                                    Name*</label>
                                <input type="Fname" class="form-control" id="exampleInputFirstName" aria-describedby="NameHelp">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label form-text-color">Email*</label>
                                <input type="Email" class="form-control" id="exampleInputEmail">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputPhone" class="form-label form-text-color">Mobile
                                    Phone*</label>
                                <input type="Phone" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputfrequency" class="form-label fo form-text-color">Frequency*</label>
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
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <a href="#" class="form-button md-btn green-bg white ms-auto">Create Ticket</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection