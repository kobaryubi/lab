@extends("layouts.app")

@section("content")
  <form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div>
      <label for="password">{{ __("Password") }}</label>
      <input id="password" type="password" name="password" required autocomplete="current-password" />
      <x-input-error :messages="$errors->get('password')" />
    </div>
    <div>
      <button>{{ __("Confirm") }}</button>
    </div>
  </form>
@endsection
