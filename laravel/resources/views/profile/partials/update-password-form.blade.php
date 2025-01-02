<form method="POST" action="{{ route('password.update') }}">
  @csrf
  @method("put")

  <div>
    <label for="update_password_current_password">{{ __("current password") }}</label>
    <input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" />
    <x-input-error :messages="$errors->updatepassword->get('current_password')" />
  </div>
  <div>
    <label for="update_password_password">{{ __("new password") }}</label>
    <input id="update_password_password" name="password" type="password" autocomplete="new-password" />
    <x-input-error :messages="$errors->updatepassword->get('password')" />
  </div>
  <div>
    <label for="update_password_password_confirmation">{{ __("confirm password") }}</label>
    <input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
    <x-input-error :messages="$errors->updatepassword->get('password_confirmation')" />
  </div>
  <div>
    <button>{{ __("save") }}</button>
    @if (session("status") === "password-updated")
      {{-- <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
      >{{ __("saved.") }}</p> --}}
    @endif
  </div>
</form>
