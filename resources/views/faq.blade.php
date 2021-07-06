@extends('layouts.app')

@section('content')
<!-- ==== faq page === -->

<main>
            <section class="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="circle">
                                <img class="img-fluid" src="/images/ellipse.png">
                                <img class="img-fluid" src="/images/ellipse.png">
                                <img class="img-fluid" src="/images/ellipse.png">
                            </div>
                            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                                <h3 class="blue tag-title m-0">FREQUENTLY</h3>
                                <h3 class="green tag-title m-0 ps-2">ASKED</h3>
                            </div>
                        </div>
                    </div>
                    <!-- ==== FAQ Start === -->
                    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed white blue-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Question #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed white blue-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Question #2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed white blue-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            Question #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space
                                            to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed white blue-bg" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            Question #3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space
                                            to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==== Bottom_Section Start === -->
                    <div class="widget-contact">
                        <div class="row text-center">
                            <div class="col-12">
                                <div class="widget-shadow">
                                    <h3 class="blue tag-title">Have Another Question?</h3>
                                    <p class="form-text-color">No worries, we got your back, please reach out to our support team</p>
                                    <div class="d-inline-block mt-4 mb-4">
                                        <a href="#" class="form-button md-btn green-bg white ms-auto">Contact Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>



@endsection