@extends('home.layouts.layoutsHome')
@section('home')

    
            
            <div class="container mt-5">
              <h1 class="mb-3">Delivery options</h1>
              <h3>How would you prefer to receive your items?</h3>
              <form id="delivery-form">
                <div class="row g-3 mt-4">
                  <!-- Home Delivery Option -->
                  <div class="col-md-6">
                    <label class="option-card rounded p-3 d-flex align-items-center" id="home-delivery-option">
                      <input type="radio" name="deliveryOption" value="homeDelivery" onclick="handleSelection(this)" />
                      <div>
                        <h5 class="mb-2">Home Delivery</h5>
                        <p class="text-muted">Get your items delivered right to your door.</p>
                      </div>
                    </label>
                  </div>
          
                  <!-- Click & Collect Option -->
                  <div class="col-md-6">
                    <label class="option-card rounded p-3 d-flex align-items-center" id="click-collect-option">
                      <input type="radio" name="deliveryOption" value="clickCollect" onclick="handleSelection(this)" />
                      <div>
                        <h5 class="mb-2">Click & Collect</h5>
                        <p class="text-muted">Pick up your items at a nearby store.</p>
                      </div>
                    </label>
                  </div>
                </div>
          
                <!-- Continue Button -->
                <div class="mt-5 text-center">
                  <a href="{{ route('selectStore.show') }}">
                    <button type="button" class="btn btn-primary" id="continue-btn">Continue</button>
                  </a>
                </div>
              </form>
            </div>

            
         

@endsection