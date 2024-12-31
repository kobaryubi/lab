@props(['messages'])

@if (!empty($messages))
  <ul>
    @foreach ($messages as $message)
      <li>{{ $message }}</li>
    @endforeach
  </ul>
@endif
