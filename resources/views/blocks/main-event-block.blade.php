<section class="main-event-block">
  <h2 class="main-event-block__year">{{$year}}</h2>

  @if($event)
  <div class="main-event-block__block">
    <h2 class="mobile">{{$event->getTitle()}}</h2>
    <div class="main-event-block__block-thumbnail">
      <img src="{{$event->getThumbnail()}}" alt="{{$event->getTitle()}}">
    </div>
    <div class="main-event-block__block-info">
      <h2 class="desktop">
        <span>{!! $event->getTitle() !!}}</span>
      </h2>
      <div>
        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d_521_3200)">
            <path d="M4 52.96C4 54.0884 4.91162 55 6.04 55H52.96C54.0884 55 55 54.0884 55 52.96V26.185H4V52.96ZM52.96 8.59H42.25V4.51C42.25 4.2295 42.0205 4 41.74 4H38.17C37.8895 4 37.66 4.2295 37.66 4.51V8.59H21.34V4.51C21.34 4.2295 21.1105 4 20.83 4H17.26C16.9795 4 16.75 4.2295 16.75 4.51V8.59H6.04C4.91162 8.59 4 9.50163 4 10.63V21.85H55V10.63C55 9.50163 54.0884 8.59 52.96 8.59Z" fill="#FFC60A"/>
          </g>
          <defs>
            <filter id="filter0_d_521_3200" x="0" y="0" width="59" height="59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset/>
              <feGaussianBlur stdDeviation="2"/>
              <feComposite in2="hardAlpha" operator="out"/>
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.776471 0 0 0 0 0.0392157 0 0 0 0.7 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_521_3200"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_521_3200" result="shape"/>
            </filter>
          </defs>
        </svg>
        {{$event->getDate()}}
      </div>
      <div>
        <svg width="52" height="65" viewBox="0 0 52 65" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_d_521_3201)">
            <path d="M26 4C20.1674 4.007 14.5756 6.36849 10.4513 10.5665C6.32696 14.7644 4.0069 20.4561 4.00002 26.3929C3.99304 31.2444 5.54998 35.9643 8.43202 39.8286C8.43202 39.8286 9.03202 40.6327 9.13002 40.7487L26 61L42.878 40.7385C42.966 40.6306 43.568 39.8286 43.568 39.8286L43.57 39.8225C46.4506 35.9599 48.0068 31.2422 48 26.3929C47.9931 20.4561 45.673 14.7644 41.5487 10.5665C37.4244 6.36849 31.8326 4.007 26 4ZM26 34.5357C24.4178 34.5357 22.871 34.0581 21.5554 33.1634C20.2399 32.2686 19.2145 30.9969 18.609 29.509C18.0035 28.0211 17.845 26.3838 18.1537 24.8043C18.4624 23.2247 19.2243 21.7738 20.3432 20.635C21.462 19.4962 22.8874 18.7207 24.4393 18.4065C25.9911 18.0923 27.5997 18.2535 29.0615 18.8698C30.5233 19.4862 31.7727 20.5298 32.6518 21.8689C33.5308 23.208 34 24.7824 34 26.3929C33.9973 28.5517 33.1536 30.6213 31.6539 32.1478C30.1542 33.6743 28.1209 34.533 26 34.5357Z" fill="#FFC60A"/>
          </g>
          <defs>
            <filter id="filter0_d_521_3201" x="0" y="0" width="52" height="65" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix"/>
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
              <feOffset/>
              <feGaussianBlur stdDeviation="2"/>
              <feComposite in2="hardAlpha" operator="out"/>
              <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.776471 0 0 0 0 0.0392157 0 0 0 0.7 0"/>
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_521_3201"/>
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_521_3201" result="shape"/>
            </filter>
          </defs>
        </svg>
        {!! $event->getAddress() !!}
      </div>
    </div>
  </div>

  <div class="main-event-block__content">
    <h3>{{$event->getText()}}</h3>

    <div class="main-event-block__content-lists">
      <div class="main-event-block__content-left">
        <ul>
          @foreach($event->getLeftList() as $item)
            <li>{{$item['text']}}</li>
          @endforeach
        </ul>
      </div>
      <div class="main-event-block__content-right">
        <h4>{{$event->getRightText()}}</h4>
        <ul>
          @foreach($event->getRightList() as $item)
            <li><div class="circle"></div>{{$item['text']}}</li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endif
</section>
