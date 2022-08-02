<ul class="social-links-block">
  @if($items)
  @foreach($items as $item)
    <li>
      <a href="{{$item['link']}}" target="_blank">
        @include("blocks.social-icons.{$item['service']}")
      </a>
    </li>
  @endforeach
    @else
    <li>Social list is empty</li>
  @endif
</ul>
