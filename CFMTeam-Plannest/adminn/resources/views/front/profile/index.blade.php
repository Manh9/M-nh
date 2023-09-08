@extends('front.layout.master')

@section('title', 'Profile')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Profile</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Profile Section Begin -->
    <div class="checkout-section spad">
        <div class="container">

            <form action="" method="get" class="checkout-form">
                <h4>Profile</h4>
                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-lg-6">
                                <label for="fir">First Name<span>*</span></label>
                                <input type="text" id="fir" name="first_name" value="{{ $user->first_name ?? '' }}"
                                    disabled>
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name<span>*</span></label>
                                <input type="text" id="last" name="last_name" value="{{ $user->last_name ?? '' }}"
                                    disabled>
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Company Name<span>*</span></label>
                                <input type="text" id="cun-name" name="company_name"
                                    value="{{ $user->company_name ?? '' }}" disabled>
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Gender<span>*</span></label>
                                <input type="text" id="cun-name" name="company_name" value="{{ $user->gender ?? '' }}"
                                    disabled>
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" id="cun" name="country" value="{{ $user->country ?? '' }}"
                                    disabled>
                            </div>

                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="email" value="{{ $user->email ?? '' }}"
                                    disabled>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone" name="phone" value="{{ $user->phone ?? '' }}"
                                    disabled>
                            </div>




                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" id="street" class="street-first" name="street_address"
                                value="{{ $user->street_address ?? '' }}" disabled>
                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Postcode / ZIP (optional)</label>
                            <input type="text" id="zip" name="postcode_zip" value="{{ $user->postcode_zip ?? '' }}"
                                disabled>
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" id="town" name="town_city" value="{{ $user->town_city ?? '' }}"
                                disabled>
                        </div>
                        <div class="col-lg-6" style="margin-top: 30px">
                            <a href="./profile/update" class="btn btn-success">Update Profile</a>
                        </div>

                        <div class="col-lg-6" style="margin-top: 50px">
                            <a href="./profile/reset" class="btn btn-success">Change Password</a>
                        </div>


                    </div>

                </div>
            </form>
            
            @if (session('notification'))
                <div class="alert alert-success">
                    {{ session('notification') }}
                </div>
            @endif

        </div>
    </div>
    <!-- Profile Section End -->


@endsection
