@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('breadcrumb')
<section class="page-title d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-content text-center">
                    <h2>Contact Us</h2>
                    <div class="bredcrums">
                        <span><a class="home" href="">Home</a></span> 
                        <span class="active">Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- ======= Contact Address Start ======= -->
<section class="contact-address-area sec-padding section-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3 pb-30">
                <!-- single contact -->
                <div class="single-contact text-center">
                    <div class="contact-icon">
                        <i class="flaticon-paper-plane"></i>
                    </div>
                    <h6 class="contact-title fw-semi-bold">ADDRESS</h6>
                    <p>124, 5th Avenue,</p>
                    <p>2521 Khulna City.</p>
                </div>
                <!-- single contact -->
            </div>
            <div class="col-md-3 pb-30">
                <!-- single contact -->
                <div class="single-contact text-center">
                    <div class="contact-icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <h6 class="contact-title fw-semi-bold">Phone Number</h6>
                    <p>+880 1722211747</p>
                    <p>+880 1674191918</p>
                </div>
                <!-- single contact -->
            </div>
            <div class="col-md-3 pb-30">
                <!-- single contact -->
                <div class="single-contact text-center">
                    <div class="contact-icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <h6 class="contact-title fw-semi-bold">E-Mail</h6>
                    <p>info@coronalab.com</p>
                    <p>coronalab@gmail.com</p>
                </div>
                <!-- single contact -->
            </div>
            <div class="col-md-3 pb-30">
                <!-- single contact -->
                <div class="single-contact text-center">
                    <div class="contact-icon">
                        <i class="flaticon-working-hours"></i>
                    </div>
                    <h6 class="contact-title fw-semi-bold">Working Hours</h6>
                    <p>Mon to Sat : 09AM - 10PM</p>
                </div>
                <!-- single contact -->
            </div>
        </div>
    </div>
</section>
<!-- ======= Contact Address End ======= -->

<!-- ======= Contact Form Start ======= -->
<section class="default-form-area sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="sec-secondary-title">
                    <span>Free Consultation</span>
                    <h2 class="title text-capitalize">Get in touch today</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="default-form">
                    <!-- consultation form -->
                    <form id="contact_form" action="contact-form/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="btn default-btn" data-loading-text="Please wait...">Send your message</button>
                            </div>
                        </div>
                    </form><!--./ consultation form -->

                    <!-- Contact Form Validation-->
                    <script type="text/javascript">
                      $("#contact_form").validate({
                        submitHandler: function(form) {
                          var form_btn = $(form).find('button[type="submit"]');
                          var form_result_div = '#form-result';
                          $(form_result_div).remove();
                          form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                          var form_btn_old_msg = form_btn.html();
                          form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                          $(form).ajaxSubmit({
                            dataType:  'json',
                            success: function(data) {
                              if( data.status == 'true' ) {
                                $(form).find('.form-control').val('');
                              }
                              form_btn.prop('disabled', false).html(form_btn_old_msg);
                              $(form_result_div).html(data.message).fadeIn('slow');
                              setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                            }
                          });
                        }
                      });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= Contact Form End ======= -->
@endsection