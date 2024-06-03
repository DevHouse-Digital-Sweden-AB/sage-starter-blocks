{{--
  Title: Example block
  Description: DevHouse Example block
  Category: devhouse-blocks
  Icon: align-pull-right
  Keywords: devhouse example block
  Mode: preview
  PostTypes: page
  SupportsAlign: false
  SupportsMode: false
  SupportsAnchor: true
  SupportsMultiple: false
--}}

<x-section 
  anchor="{{ $block['anchor'] }}" 
  blockid="{{ $block['id'] }}" 
  class="{{ $block['classes'] }}"
>
  @php($devhouse = 'amazing!')

  @if($devhouse === 'amazing!')
    <h1>DevHouse is {{ $devhouse }}</h1>
  @endif
</x-section>
