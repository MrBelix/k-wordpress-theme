<div class="single-project__content">
  <h2>{{$title}}</h2>
  <h3>{{$distinct}}</h3>
  <div class="single-project__info">
    @foreach($info as $key => $info)
      <div class="single-project__info-row">
        <div class="single-project__info-title">
          {{$info['label']}}
        </div>
        <div class="single-project__info-value">
          @switch($info['type'])
            @case('bool')
              <svg width="47" height="41" viewBox="0 0 47 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_541_1877)">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8435 18.7475L10.0001 20.591L16.7927 27.3835L16.7926 27.3836L18.636 29.2271L35.2271 12.636L33.3837 10.7926L18.6361 25.5401L11.8435 18.7475Z" fill="#FFC60A"/>
                  <rect x="35.5913" y="12.8632" width="1.31667" height="23.4633" transform="rotate(45 35.5913 12.8632)" fill="white"/>
                </g>
                <defs>
                  <filter id="filter0_d_541_1877" x="0" y="0.792603" width="46.5225" height="39.5927" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset/>
                    <feGaussianBlur stdDeviation="5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.776471 0 0 0 0 0.0392157 0 0 0 1 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_541_1877"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_541_1877" result="shape"/>
                  </filter>
                </defs>
              </svg>
              @break
            @default
              {{$info['value']}}
          @endswitch
        </div>
      </div>
    @endforeach
  </div>
</div>
