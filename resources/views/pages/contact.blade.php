@extends('layouts.home')

<!-- contact -->
<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Contact Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
            </ul>
        </div>
    </section>
</div>
<section class="contact py-5" id="contact">
    <div class="container py-md-4 py-3">
        <div class="title-main text-center mx-auto mb-md-4">
            <h3 class="title-big">Get In Touch</h3>
            <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur,
                metus
                gravida suscipit cursus, dui diam pre lorem id
                lectus.</p>
        </div>
        <div class="main-grid-contact">
            <div class="row mt-5 mx-0">
                <!-- map -->
                <div class="col-lg-6 map mt-lg-0 mt-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007"
                        allowfullscreen></iframe>
                </div>
                <!-- contact form -->
                <div class="col-lg-6 content-form-right p-0">
                    <div class="form-w3ls p-md-5 p-4">
                        <h4 class="mb-4 sec-title-w3">Send us a message</h4>
                        <form method="post" action="https://sendmail.w3layouts.com/submitForm">
                            <div class="row">
                                <div class="col-sm-6 form-group pr-sm-1">
                                    <input class="form-control" type="text" name="w3lName" id="w3lName"
                                        placeholder="First Name" required="">
                                </div>
                                <div class="col-sm-6 form-group pl-sm-1">
                                    <input class="form-control" type="text" name="w3lName" id="w3lName"
                                        placeholder="Last Name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="w3lSender" id="w3lSender"
                                    placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="w3lName" id="w3lName"
                                    placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="w3lMessage" id="w3lMessage" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="input-group1 text-right">
                                <button class="btn button-style" type="submit">Submit
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //contact -->
<!-- support -->
<div class="support py-5" id="support">
    <div class="container pb-md-5 pb-3">
        <h3 class="title-w3ls text-center mb-5">Help & Support</h3>
        <div class="row support-bottom text-center mb-5">
            <div class="col-lg-4 col-sm-6 support-grid">
                <span class="fa fa-laptop"></span>
                <h5 class="text-uppercase mt-3 mb-2">Online Support</h5>
                <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                <a href="#call" class="btn button-style button-2 mt-4">
                    Call Now
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 support-grid mt-sm-0 mt-4">
                <span class="fa fa-comments"></span>
                <h5 class="text-uppercase mt-3 mb-2">Live Chat 24/7</h5>
                <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                <a href="#chat" class="btn button-style button-2 mt-4">
                    Let's Chat
                </a>
            </div>
            <div class="col-lg-4 col-sm-6 support-grid mt-lg-0 mt-4">
                <span class="fa fa-question"></span>
                <h5 class="text-uppercase mt-3 mb-2">Any Questions</h5>
                <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                <a href="#ask" class="btn button-style button-2 mt-4">
                    Ask Now
                </a>
            </div>
        </div>
    </div>
</div>
