@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact">
        <div class="container text-center">
            <div class="circle">
                <img class="img-fluid" src="../Pool/images/ellipse.png">
                <img class="img-fluid" src="../Pool/images/ellipse.png">
                <img class="img-fluid" src="../Pool/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="blue tag-title m-0">Access</h3>
                <h3 class="green tag-title m-0 ps-2">Code</h3>
            </div>
        </div>
        <div class="form-width text-center">
            <form class="contact-form widget-shadow form-md-padding">
                <small class="form-text-color text-center pb-4 d-block">Enter the access code we just sent to
                    your
                    e-mail</small>
                <div class="enter-code">
                    <input type="Email" class="form-control" id="exampleInputEmail">
                </div>
                <div class="text-center d-inline-block mt-4 mb-4">
                    <a href="#" class="form-button md-btn green-bg white ms-auto">Confirm</a>
                </div>
                <small class="form-text-color text-center d-block">Didn’t get the access code?<a href="#"
                        class="blue ps-1 bold">Resend it</a></small>
            </form>
        </div>
    </section>
</main>
@endsection