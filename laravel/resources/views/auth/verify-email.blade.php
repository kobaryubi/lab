@extends("layouts.app")

@section("content")
  {{-- @if (session('status') == 'verification-link-sent')
    <div>
      {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
  @endif --}}
  <form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button>{{ __("Resend Verification Email") }}</button>
  </form>
  <form method="POST" action="{{ route('logout')}}">
    @csrf
    <button>{{ __("Log Out") }}</button>
  </form>
@endsection
