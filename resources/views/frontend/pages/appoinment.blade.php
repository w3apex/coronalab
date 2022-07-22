@extends('frontend.layouts.master')

@section('header-top')
    @include('frontend.layouts.partials._header-top')
@endsection

@section('content')
<section class="default-form-area pt-5 bg-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 mb-5">
                <div class="sec-secondary-title text-center">
                    <h4>Book Appoinment</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="default-form">
                    <!-- consultation form -->
                    <form id="contact_form" action="{{ route('booking.submit') }}" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="date">
                                        <option>Select Appoinment Date</option>
                                        @foreach($everyMonth as $date)
                                        <option value="{{ $date }}">{{ $date }}</option><br>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="blood_group">
                                        <option>Select blood group</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
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
@endsection