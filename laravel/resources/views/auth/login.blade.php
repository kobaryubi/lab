@extends("layouts.app")

@section("content")
  @if (session("status"))
    <p>{{ session("status") }}</p>
  @endif
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
      <label for="email">{{ __("Email") }}</label>
      <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
      <x-input-error :messages="$errors->get('email')"  />
    </div>
    <div>
      <label for="password">{{ __("Password") }}</label>
      <input id="password" type="password" name="password" required autocomplete="current-password" />
      <x-input-error :messages="$errors->get('password')"  />
    </div>
    <div>
      <label for="remember_me">
        <input id="remember_me" type="checkbox" name="remember" />
        {{ __("Remember me") }}
      </label>
    </div>
    <div>
      @if (Route::has("password.request"))
        <a href="{{ route('password.request') }}">{{ __("Forgot your password?") }}</a>
      @endif
      <button>{{ __("Log in") }}</button>
    </div>
  </form>
@endsection
