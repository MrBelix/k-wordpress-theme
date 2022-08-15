<section class="events-list-block {{$hide_desktop?'mobile': ''}}">
  <h2 class="events-list-block__title">
    <span class="mobile">{{pll__('Події') . ' ' }}</span>
    {{$title}}
  </h2>

  <div class="events-list-block__container">
    @foreach($events as $event)
      <a class="events-list-block__block" href="{{get_post_permalink($event['event'])}}">
        <div class="events-list-block__block-thumb">
          <img src="{{get_the_post_thumbnail_url($event['event'])}}" alt="{{$event['event']->post_title}}">
        </div>
        <div class="events-list-block__block-tools">
          <h3>{{pll__('Детальніше про події')}}</h3>
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_521_3249)">
              <circle cx="24.872" cy="25.2052" r="9.58974" fill="#FFC60A"/>
            </g>
            <path d="M24.707 25.0406C25.0975 24.6501 25.0975 24.0169 24.707 23.6264L18.343 17.2624C17.9525 16.8719 17.3193 16.8719 16.9288 17.2624C16.5383 17.653 16.5383 18.2861 16.9288 18.6766L22.5857 24.3335L16.9288 29.9904C16.5383 30.3809 16.5383 31.014 16.9288 31.4046C17.3193 31.7951 17.9525 31.7951 18.343 31.4046L24.707 25.0406ZM20.5127 25.3335L23.9999 25.3335L23.9999 23.3335L20.5127 23.3335L20.5127 25.3335Z" fill="white"/>
            <defs>
              <filter id="filter0_f_521_3249" x="0.282227" y="0.615479" width="49.1797" height="49.1794" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="7.5" result="effect1_foregroundBlur_521_3249"/>
              </filter>
            </defs>
          </svg>
        </div>
      </a>
    @endforeach
  </div>

  <hr>
</section>
