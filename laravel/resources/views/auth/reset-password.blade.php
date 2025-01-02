<form method="POST" action="{{ route('password.store') }}">
  @csrf
  <input type="hidden" name="token" value="{{ $request->route('token') }}">
  <div>
    <label for="email">{{ __("Email") }}</label>
    <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" />
  </div>
  <div>
    <label for="password">{{ __("Password") }}</label>
    <input id="password" type="password" name="password" required autocomplete="new-password" />
    <x-input-error :messages="$errors->get('password')" />
  </div>
  <div>
    <label for="password_confirmation">{{ __("Confirm Password") }}</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
    <x-input-error :messages="$errors->get('password_confirmation')" />
  </div>
  <div>
    <button>{{ __("Reset Password") }}</button>
  </div>
</form>
