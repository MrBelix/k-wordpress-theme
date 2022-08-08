
  <div id="partners-modal" class="partners-modal">
    <h2>{{$sellModal['title']??''}}</h2>
    <div class="partners-modal__main">
      <div>
        {!! $sellModal['leftContent']??'' !!}
      </div>
      <div>
        {!! $sellModal['rightContent']??'' !!}
      </div>
    </div>
    <div class="partners-modal__footer">
      <div>
        {{__('Детальна інформація за телефоном: ', 'sage')}}
      </div>
      <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_23_2408)">
          <circle cx="29.5" cy="29.5" r="9.5" transform="rotate(-180 29.5 29.5)" fill="#FFC60A"/>
        </g>
        <path d="M31.7071 29.7071C32.0976 29.3166 32.0976 28.6834 31.7071 28.2929L25.3431 21.9289C24.9526 21.5384 24.3195 21.5384 23.9289 21.9289C23.5384 22.3195 23.5384 22.9526 23.9289 23.3431L29.5858 29L23.9289 34.6569C23.5384 35.0474 23.5384 35.6805 23.9289 36.0711C24.3195 36.4616 24.9526 36.4616 25.3431 36.0711L31.7071 29.7071ZM2 30L31 30L31 28L2 28L2 30Z" fill="white"/>
        <defs>
          <filter id="filter0_f_23_2408" x="0" y="0" width="59" height="59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_23_2408"/>
          </filter>
        </defs>
      </svg>
      <div>
        <div class="wp-block-button">
          <a href="{{$sellModal['phoneLink']??''}}" class="wp-block-button__link">{{$sellModal['phone']??''}}</a>
        </div>
      </div>
      <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_23_2408)">
          <circle cx="29.5" cy="29.5" r="9.5" transform="rotate(-180 29.5 29.5)" fill="#FFC60A"/>
        </g>
        <path d="M31.7071 29.7071C32.0976 29.3166 32.0976 28.6834 31.7071 28.2929L25.3431 21.9289C24.9526 21.5384 24.3195 21.5384 23.9289 21.9289C23.5384 22.3195 23.5384 22.9526 23.9289 23.3431L29.5858 29L23.9289 34.6569C23.5384 35.0474 23.5384 35.6805 23.9289 36.0711C24.3195 36.4616 24.9526 36.4616 25.3431 36.0711L31.7071 29.7071ZM2 30L31 30L31 28L2 28L2 30Z" fill="white"/>
        <defs>
          <filter id="filter0_f_23_2408" x="0" y="0" width="59" height="59" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_23_2408"/>
          </filter>
        </defs>
      </svg>
      <div>
        <h3>{!! $sellModal['person']??'' !!}</h3>
        <h4>({!! $sellModal['department']??'' !!})</h4>
      </div>
    </div>
  </div>
