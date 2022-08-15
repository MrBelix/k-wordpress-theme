@php
$arrowsClass = !empty($arrows)? 'arrow-' . $arrows : '';
@endphp
<div class="splide {{$arrowsClass}} {{$class??null}}">
  <div class="splide__track">
      <ul class="splide__list">
        @foreach($items as $item)
          <li class="splide__slide">
            @include("partials.slide-templates.$template", ['item' => $item])
          </li>
        @endforeach
      </ul>
  </div>
</div>
