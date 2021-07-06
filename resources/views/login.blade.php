@extends('layouts.app')

@section('content')
<main>
    <section class="widget-contact">
        <div class="container">
            <div class=" d-flex align-items-center pb-4 pt-2 justify-content-center ">
                <h3 class="blue tag-title m-0 ">Login</h3>
            </div>
            <div class="form-width">
                <form class="contact-form widget-shadow form-md-padding">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="exampleInputUserId" class="form-label form-text-color form-input-padding">Username/Email
                                Name*</label>
                            <span class="form-input">
                                <input type="UserId" class="form-control form-input-padding"
                                    id="exampleInputUserId" value="Username/Email Name">
                                <img src="images/user-icon.svg" class="img-fluid form-icon" alt="User icon">
                            </span>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="exampleInputPassword" class="form-label form-text-color form-input-padding">Password*</label>
                            <span class="form-input">
                                <input type="Password" class="form-control form-input-padding"
                                    id="exampleInputPassword" value="Password">
                                <img src="images/pass.svg" class="img-fluid form-icon" alt="User icon">
                            </span>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <a href="#" class="form-text-color bold">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-between py-5">
                        <a href="#" class="form-button b-10-radious md-btn green-bg white">LogIn</a>
                        <small class="form-text-color text-center">Already have an Account?</small>
                        <label class="btn-switch">
                            <input type="checkbox">
                            <span class="Toggler round"></span>
                        </label>
                    </div>
                    <small class="form-text-color text-center d-block">New Here?<a href="#"
                            class="blue ps-2 bold">Create Account</a></small>
                </form>
            </div>
    </section>
</main>
@endsection