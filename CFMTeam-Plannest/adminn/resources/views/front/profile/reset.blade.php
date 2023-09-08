@extends('front.layout.master')

@section('title', 'Change Password')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Change Password</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Change Password Section Begin -->
    <div class="checkout-section spad">
        <div class="container">

            @if (session('notification'))
                <div class="alert alert-danger">
                    {{ session('notification') }}
                </div>
            @endif

            <form action="{{ route('profile.reset') }}" method="POST" class="checkout-form">
                @csrf
                <h4>Change Password</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" id="current_password" name="current_password" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" id="new_password" name="new_password" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="confirm_password">Confirm New Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Change Password Section End -->

@endsection
