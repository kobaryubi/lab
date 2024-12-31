@extends("layouts.app")

@section("content")
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
      <label for="email">{{ __("Email") }}</label>
      <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
      <x-input-error :messages="$errors->get('email')"/>
    </div>
    <div>
      <label for="password">{{ __("Password") }}</label>
      <input id="password" type="password" name="password" required autocomplete="new-password" />
      <x-input-error :messages="$errors->get('password')"/>
    </div>
    <div>
      <label for="password_confirmation">{{ __("Confirm Password") }}</label>
      <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
      <x-input-error :messages="$errors->get('password_confirmation')"/>
    </div>
    <div>
      <a href="{{ route('login') }}">{{ __("Already registered?") }}</a>
      <button>{{ __("Register") }}</button>
    </div>
  </form>
@endsection
