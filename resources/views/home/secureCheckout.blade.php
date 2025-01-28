@extends('layouts.user')
@section('home')

    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="center-div">
            <h2 class="mb-5">Secure Checkout</h2>
            <div class="mb-5">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control secureinput" id="email" placeholder="Enter email" required>
            </div>
            
            <!-- Buttons container -->
            <div class="btn-container">
                <div class="securebtn">
                    <a href="{{ route('contactDetails.show') }}">
                        <button class="btn btn-primary">Checkout as a guest</button>
                    </a>
                </div>
                
                <button class="btn btn-secondary">I have an account</button>
            </div>
        </div>
    </div>
         

@endsection