@extends('layouts.app')

@section('content')
<section class="checkout">
  <div class="container">
    <div class="row text-center pb-70">
      <div class="col-lg-12 col-12 header-wrap">
        <p class="story">
          YOUR FUTURE CAREER
        </p>
        <h2 class="primary-header">
          Start Invest Today
        </h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9 col-12">
        <div class="row">
          <div class="col-lg-5 col-12">
            <div class="item-bootcamp">
              <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
              <h1 class="package text-uppercase">
                {{ $camp->title }}
              </h1>
              <p class="description">
                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
              </p>
            </div>
          </div>
          <div class="col-lg-1 col-12"></div>
          <div class="col-lg-6 col-12">
            <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
              @csrf
              <div class="mb-4">
                <label for="name" class="form-label">Full Name</label>
                <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ Auth::user()->name }}" required/>
                @error('name')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::user()->email }}" required/>
                @error('email')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-4">
                <label for="occupation" class="form-label">Occupation</label>
                <input name="occupation" id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" value="{{ old('occupation') ? : Auth::user()->occupation }}" required/>
                @error('occupation')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-4">
                <label for="card_number" class="form-label">Card Number</label>
                <input name="card_number" id="card_number" type="number" class="form-control @error('card_number') is-invalid @enderror" value="{{ old('card_number') ? : '' }}" required/>
                @error('card_number')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-5">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <label for="expired" class="form-label">Expired</label>
                    <input name="expired" id="expired" type="month" class="form-control @error('expired') is-invalid @enderror" value="{{ old('expired') ? : '' }}" required/>
                    @error('expired')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-lg-6 col-12">
                    <label for="cvc" class="form-label">CVC</label>
                    <input name="cvc" id="cvc" type="number" class="form-control @error('cvc') is-invalid @enderror" maxlength="3" value="{{ old('cvc') ? : '' }}" required/>
                    @error('cvc')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                  </div>
                </div>
              </div>
              <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
              <p class="text-center subheader mt-4">
                <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and encrypted.
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection