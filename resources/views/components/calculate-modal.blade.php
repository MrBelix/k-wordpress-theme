
  <form id="calculate-modal" class="calculate-modal">
    <div>
      <div class="input-group">
        <label for="name">{{__('ПІБ')}}</label>
        <input id="name" type="text" name="name">
        <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
      </div>
      <div class="input-group">
        <label for="phone">{{__('Номер телефону')}}</label>
        <input id="phone" type="text" name="phone">
        <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
      </div>
      <div class="input-group select search">
        <label for="district">{{__('Область')}}</label>
        <select id="district" name="district" data-search="true">
          @foreach($districts as $key => $district)
            <option value="{{$key}}">{{$district}}</option>
          @endforeach
        </select>
        <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
      </div>
      <div class="input-group">
        <label for="company">{{__('Назва підприємства')}}</label>
        <input id="company" type="text" name="company">
        <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
      </div>
      <div class="input-group select">
        <label for="type">{{__('Що будуємо?')}}</label>
        <select name="type" id="type">
          @foreach($types as $key => $type)
            <option value="{{$key}}">{{$type}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div>
      <div class="input-group file">
        <label for="file">{{__('Додати файл')}}</label>
        <label class="input" for="file">
          <svg viewBox="0 0 42 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5016 34V24.2857H28.502L21.0015 14.5714L13.501 24.2857H19.5014V34H12.0009V33.919C11.7488 33.9352 11.5088 34 11.2508 34C8.2669 34 5.40522 32.7207 3.29528 30.4434C1.18535 28.1662 0 25.0776 0 21.8571C0 15.627 4.36531 10.5497 9.96671 9.85352C10.4578 7.08266 11.8282 4.5831 13.8421 2.78476C15.856 0.986419 18.3876 0.00170976 21.0015 0C23.6157 0.0015791 26.1477 0.986171 28.1622 2.78447C30.1766 4.58277 31.5476 7.0824 32.0393 9.85352C37.6407 10.5497 42 15.627 42 21.8571C42 25.0776 40.8147 28.1662 38.7047 30.4434C36.5948 32.7207 33.7331 34 30.7492 34C30.4972 34 30.2542 33.9352 29.9991 33.919V34H22.5016Z" fill="#FFC60A"/>
          </svg>
          <svg class="file-svg" width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.7997 5.01562C14.9276 5.14955 15 5.33036 15 5.52009V19.2857C15 19.6808 14.6953 20 14.3182 20H0.681818C0.304688 20 0 19.6808 0 19.2857V0.714286C0 0.319196 0.304688 0 0.681818 0H9.73082C9.91193 0 10.0866 0.0758929 10.2145 0.209821L14.7997 5.01562ZM13.4276 5.84821L9.41761 1.64732V5.84821H13.4276Z" fill="#FFC60A"/>
          </svg>
          <span class="filename">

          </span>
        </label>
        <input id="file" type="file" name="file">
      </div>
      <div class="calculate-modal__inner-group">
        <div class="input-group">
          <label for="width">{{__('Ширина:')}}</label>
          <input id="width" type="text" name="width">
          <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
        </div>
        <div class="input-group">
          <label for="length">{{__('Довжина:')}}</label>
          <input id="length" type="text" name="length">
          <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
        </div>
        <div class="input-group select">
          <label for="wall">{{__('Підпірна стіна:')}}</label>
          <select name="wall" id="wall">
            @foreach($wall as $key => $type)
              <option value="{{$key}}">{{$type}}</option>
            @endforeach
          </select>
          <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
        </div>
        <div class="input-group">
          <label for="height">{{__('Висота')}}</label>
          <input id="height" type="text" name="height">
          <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
        </div>
      </div>
      <div class="input-group textarea">
        <label for="comment">{{__('Коментар:')}}</label>
        <textarea id="comment" name="comment"></textarea>
        <span class="error">{{__('Введіть дані для розрахунку!', 'sage')}}</span>
      </div>
    </div>
    <div class="wp-block-button">
      <button type="submit" class="wp-block-button__link">{{__('Отримати розрахунок')}}</button>
    </div>
  </form>
  <div class="form-complete">
    <div>
      <h2>{{__('Успішно!', 'sage')}}</h2>
      <h3>{{__('Чекайте на дзвінок.', 'sage')}}</h3>
    </div>
    <div class="form-complete__checkmark">
      <svg width="64" height="45" viewBox="0 0 64 45" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M63.716 6.42825L57.631 0.343262L25.1778 32.7965L6.92288 14.5415L0.837891 20.6265L19.0928 38.8815L19.0928 38.8815L25.1778 44.9665L25.1778 44.9665L31.2628 38.8815L63.716 6.42825Z" fill="#15232B"/>
      </svg>
    </div>
  </div>
