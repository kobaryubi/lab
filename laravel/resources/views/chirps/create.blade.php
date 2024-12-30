@extends('layouts.app')

@section('content')
  <form method="POST" action="{{ route('chirps.store') }}">
    @csrf
    <textarea
      name="message"
      placeholder="{{ __('What\'s on your mind?') }}"
    >{{ old('message') }}</textarea>
    <x-input-error :messages="$errors->get('message')" />
    <x-button>{{ __('Chirp') }}</x-button>
  </form>
@endsection
