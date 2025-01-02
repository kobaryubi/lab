<form id="send-verification" method="POST" action="{{ route('verification.send') }}">
  @csrf
</form>

<form method="POST" action="{{ route('profile.update') }}">
  @csrf
  @method("patch")

  <div>
    <label for="email">{{ __("Email") }}</label>
    <input id="email" type="email" name="email" :value="old('email', $user->email)" required autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" />

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
      <div>
        <p>
          <button form="send-verification">{{ __('Click here to re-send the verification email.') }}</button>
        </p>
        @if (session("status") === "verification-link-sent")
          <p>{{ __("A new verification link has been sent to your email address.") }}</p>
      </div>
    @endif
  </div>
  <div>
    <button>{{ __("Save") }}</button>
    @if (session("status") === "profile-updated")
      {{-- <p
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
      >{{ __("Saved.") }}</p> --}}
    @endif
  </div>
</form>
