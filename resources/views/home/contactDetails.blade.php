@extends('home.layouts.layoutsHome')
@section('home')

    
<div class="container contactcon">

    <div class="contact-head mb-5">
        <h1 class="text-center">Contact Details</h1>
    </div>
    

    <form>
      <!-- Name and Email -->
      <div class="row con-row">
        <div class="col-md-6 colmargin">
          <label for="name" class="form-label con-form-label">Full Name</label>
          <input type="text" class="form-control con-form-control" id="name" placeholder="Enter your full name" required>
        </div>
        <div class="col-md-6 colmargin">
          <label for="email" class="form-label con-form-label">Email Address</label>
          <input type="email" class="form-control con-form-control" id="email" placeholder="Enter your email" required>
        </div>
      </div>

      <!-- Phone and Address Line 1 -->
      <div class="row con-row">
        <div class="col-md-6 colmargin">
          <label for="phone" class="form-label con-form-label">Phone Number</label>
          <input type="tel" class="form-control con-form-control" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="col-md-6 colmargin">
          <label for="addressLine1" class="form-label con-form-label">Address Line 1</label>
          <input type="text" class="form-control con-form-control" id="addressLine1" placeholder="Enter address line 1" required>
        </div>
      </div>

      <!-- Address Line 2 and City -->
      <div class="row con-row">
        <div class="col-md-6 colmargin">
          <label for="addressLine2" class="form-label con-form-label">Address Line 2 (Optional)</label>
          <input type="text" class="form-control con-form-control" id="addressLine2" placeholder="Enter address line 2">
        </div>
        <div class="col-md-6 colmargin">
          <label for="city" class="form-label con-form-label">City</label>
          <input type="text" class="form-control con-form-control" id="city" placeholder="Enter your city" required>
        </div>
      </div>

      <!-- State/Province and Postal Code -->
      <div class="row con-row">
        <div class="col-md-6 colmargin">
          <label for="state" class="form-label con-form-label">State/Province</label>
          <input type="text" class="form-control con-form-control" id="state" placeholder="Enter your state or province" required>
        </div>
        <div class="col-md-6 colmargin">
          <label for="postalCode" class="form-label con-form-label">Postal/Zip Code</label>
          <input type="text" class="form-control con-form-control" id="postalCode" placeholder="Enter your postal/zip code" required>
        </div>
      </div>

      <!-- Country -->
      <div class="mb-3 con-mb-3">
        <label for="country" class="form-label con-form-label">Country</label>
        <select class="con-form-select form-control" id="country" required>
          <option value="" disabled selected>Select your country</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="GB">United Kingdom</option>
          <!-- Add more countries as needed -->
        </select>
      </div>

      <!-- Submit Button -->
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mt-3">Proceed to Payment</button>
      </div>
    </form>
  </div>
         

@endsection