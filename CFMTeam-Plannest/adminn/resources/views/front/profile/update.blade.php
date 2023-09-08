@extends('front.layout.master')

@section('title', 'Update Profile')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <span>Update Profile</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Update Profile Section Begin -->
<div class="checkout-section spad">
    <div class="container">
        <form action="{{ route('profile.update') }}" method="POST" class="checkout-form">
            @csrf
            <h4>Update Profile</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="first_name">First Name<span>*</span></label>
                            <input type="text" id="first_name" name="first_name" value="{{ $user->first_name ?? '' }}">
                        </div>
                        <div class="col-lg-12">
                            <label for="last_name">Last Name<span>*</span></label>
                            <input type="text" id="last_name" name="last_name" value="{{ $user->last_name ?? '' }}">
                        </div>

                        <div class="col-lg-12">
                            <label for="cun-name">Company Name<span>*</span></label>
                            <input type="text" id="cun-name" name="company_name" value="{{ $user->company_name ?? ''  }}"
                                >
                        </div>
                        <div class="col-lg-12">
                            <label for="cun-name">Gender<span>*</span></label>
                            <input type="text" id="cun-name" name="gender" value="{{ $user->gender ?? ''  }}"
                                >
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" id="cun" name="country" value="{{ $user->country ?? ''  }}" >
                        </div>
                        
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" id="email" name="email" value="{{ $user->email ?? ''  }}" disabled>
                        </div>

                        <div class="col-lg-12">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" id="phone" name="phone" value="{{ $user->phone ?? '' }}">
                        </div>


                        <!-- Add more fields for profile update here -->
                    </div>


                </div>

                <div class="col-lg-6">
                    <div class="col-lg-12">
                        <label for="street">Street Address<span>*</span></label>
                        <input type="text" id="street" class="street-first" name="street_address"
                            value="{{ $user->street_address ?? ''  }}" >
                    </div>
                    <div class="col-lg-12">
                        <label for="zip">Postcode / ZIP (optional)</label>
                        <input type="text" id="zip" name="postcode_zip" value="{{ $user->postcode_zip ?? ''  }}" >
                    </div>
                    <div class="col-lg-12">
                        <label for="town">Town / City<span>*</span></label>
                        <input type="text" id="town" name="town_city" value="{{ $user->town_city ?? ''  }}"                           >
                    </div>
                    
                 

                </div>
                <!-- Add more columns for profile update here -->
            </div>
            <button type="submit" class="btn btn-success">Update Profile</button>
        </form>
    </div>
</div>
<!-- Update Profile Section End -->

@endsection
