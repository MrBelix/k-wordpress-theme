<section class="custom-list-block">
  <ul class="custom-list-block__list">
    @if(!empty($items))
      @foreach($items as $item)
        <li>{!! $item['text'] !!}</li>
      @endforeach
    @endif
  </ul>
</section>
