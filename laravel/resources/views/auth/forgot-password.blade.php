@extends("layouts.app")

@section("content")
  @if (session("status"))
    <p>{{ session("status") }}</p>
  @endif
  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div>
      <label for="email">{{ __("Email") }}</label>
      <input id="email" type="email" name="email" :value="old('email')" required autofocus />
      <x-input-error :messages="$errors->get('email')"  />
    </div>
    <div>
      <button>{{ __("Email Password Reset Link") }}</button>
    </div>
  </form>
@endsection
