{{-- Section component --}}

@props([
  'exampleProp' => null,
])

<section {{ $attributes->merge(['class' => 'w-full']) }}>
  @if($slot)
    <div class="container">
      {!! $slot !!}
    </div>
  @endif
</section>
