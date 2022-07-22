@extends('frontend.layouts.master')

@section('content')
<!-- ======= Login Area Start ======= -->
<section class="login-area pt-5 pb-5">
    <div class="container">
        <div class="register-box ptb--100">
            @include('backend.layouts.partials._messages')
            <form action="{{ route('register')}}" method="post">
                @csrf
                <div class="login-form-head">
                    <h4>Sign Up</h4>
                    <p>Hello there, Sign up and Join with us.</p>
                </div>
                <div class="login-form-body">
                    <div class="form-row">
                        <div class="form-group col-md-6 form-gp">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name">
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 form-gp">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name">
                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-gp">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 form-gp">
                            <label for="password-confirm">Confirm Password</label>
                            <input type="password" id="password-confirm" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-gp">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone">
                        
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 form-gp">
                            <label for="division_id">Division</label>
                            <select class="form-control" name="division_id" id="division_id" >
                                <option value=""></option>
                                @foreach($divisions as $division)
                                <option value="{{ $division->id}}">{{ $division->name}}</option>
                                @endforeach
                            </select>

                            @error('division_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 form-gp">
                            <label for="district-area">District</label>
                            <select class="form-control" name="district_id" id="district-area" >
                                {{-- <option value=""></option>
                                @foreach($districts as $district)
                                    <option value="{{ $district->id}}">{{ $district->name}}</option>
                                @endforeach --}}
                            </select>

                            @error('district_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-gp">
                        <label for="address">Street Address</label>
                        <input type="text" id="address" name="address">

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        
                        <div class="social-via-register">
                            <div class="social-via-text-block">
                                <p class="social-via-text social-via-text-register">Or</p>
                            </div>
                            <div class="social-via-login">
                                <ul class="pl-0">
                                    <li><a href="" ><i style="color:#3B5997; border:2px solid #3B5997;" class="icofont-facebook outline-socisl-icon"></i></a></li>
                                    <li><a href=""><i class="icofont-twitter outline-socisl-icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Have an account? <a href="{{ route('login') }}">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ======= Login Area End ======= -->
@endsection

@section('scripts')
<script>
$("#division_id").change(function(){
    var division = $("#division_id").val();
    //Send the ajax request to server with this division
    $("#district-area").html("");
    var option = "";
    var url = "{{ url('/')}}";
    $.get(url+"/api/get-districts/"+division, function(data){

      data = JSON.parse(data)
      data.forEach(function(element){
        option += "<option value='"+ element.id +"'>"+ element.name +"</option>";
      });

      $("#district-area").html(option);
    })
  })

</script>
@endsection
