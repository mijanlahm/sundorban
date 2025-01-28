@extends('layouts.user')
@section('home')

      <div class="container mt-5">
        <h1 class="mb-3">Select your Preferred Store</h1>
        <h3>Where would you prefer to receive your items?</h3>
        <form id="delivery-form">
          <div class="row g-3 mt-4">
            <!-- Home Delivery Option -->
            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="home-delivery-option">
                <input type="radio" name="deliveryOption" value="homeDelivery" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 1</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk </p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>

            <!-- Click & Collect Option -->
            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="click-collect-option">
                <input type="radio" name="deliveryOption" value="clickCollect" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 2</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk</p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>

            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="home-delivery-option">
                <input type="radio" name="deliveryOption" value="homeDelivery" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 3</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk </p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>

            <!-- Click & Collect Option -->
            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="click-collect-option">
                <input type="radio" name="deliveryOption" value="clickCollect" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 4</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk</p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>

            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="home-delivery-option">
                <input type="radio" name="deliveryOption" value="homeDelivery" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 5</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk </p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>

            <!-- Click & Collect Option -->
            <div class="col-md-6">
              <label class="option-card rounded p-3 d-flex align-items-center" id="click-collect-option">
                <input type="radio" name="deliveryOption" value="clickCollect" onclick="handleSelection(this)" />
                <div>
                  <h5 class="mb-2">Store 6</h5>
                  <p class="text-muted">Address: 21 Western Hill, Sunderland, Uk</p>
                  <p class="text-muted">Open: Monday-Sunday (9am - 9pm)</p>
                </div>
              </label>
            </div>


          </div>

          <!-- Continue Button -->
          <div class="mt-5 text-center">
            <a href="{{ route('secureCheckout.show') }}">
              <button type="button" class="btn btn-primary" id="continue-btn">Continue</button>
            </a>
          </div>
        </form>
      </div>
         

@endsection