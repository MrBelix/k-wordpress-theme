
  <form id="calculate-modal" class="calculate-modal">
    <div>
      <div class="input-group">
        <label for="name">{{pll__('ПІБ')}}</label>
        <input id="name" type="text" name="name">
      </div>
      <div class="input-group">
        <label for="phone">{{pll__('Номер телефону')}}</label>
        <input id="phone" type="text" name="phone">
      </div>
      <div class="input-group select search">
        <label for="district">{{pll__('Область')}}</label>
        <select id="district" name="district" data-search="true">
          @foreach($districts as $key => $district)
            <option value="{{$key}}">{{$district}}</option>
          @endforeach
        </select>
      </div>
      <div class="input-group">
        <label for="company">{{pll__('Назва підприємства')}}</label>
        <input id="company" type="text" name="company">
      </div>
    </div>
    <div>
      <div class="input-group select">
        <label for="type">{{pll__('Що будуємо?')}}</label>
        <select name="type" id="type">
          @foreach($types as $key => $type)
            <option value="{{$key}}">{{$type}}</option>
          @endforeach
        </select>
      </div>

      <div class="calculate-modal__inner-group">
        <div class="input-group">
          <label for="width">{{pll__('Ширина:')}}</label>
          <input id="width" type="text" name="width">
        </div>
        <div class="input-group">
          <label for="length">{{pll__('Довжина:')}}</label>
          <input id="length" type="text" name="length">
        </div>
        <div class="input-group select">
          <label for="wall">{{pll__('Підпірна стінка:')}}</label>
          <select name="wall" id="wall">
            @foreach($wall as $key => $type)
              <option value="{{$key}}">{{$type}}</option>
            @endforeach
          </select>
        </div>
        <div class="input-group">
          <label for="height">{{pll__('Висота')}}</label>
          <input id="height" type="text" name="height">
        </div>
      </div>
    </div>
    <div class="wp-block-button">
      <button type="submit" class="wp-block-button__link">{{pll__('Отримати розрахунок')}}</button>
    </div>
  </form>
