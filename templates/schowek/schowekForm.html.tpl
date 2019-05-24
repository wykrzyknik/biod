<div class="form-group has-feedback">
  <label for="NazwaJezyka">Login</label>
  <input class="form-control" id="login" name="login" value="{if isset($data['login'])}{$data['login']}{/if}"
    type="text"
    data-minlength="2"
    maxlength="16"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="password">Hasło</label>
  <input class="form-control" id="password" name="password" value="{if isset($data['password'])}{$data['password']}{/if}"
    type="text"
    data-minlength="8"
    maxlength="30"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 8 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="stronawww">Strona Internetowa</label>
  <input class="form-control" id="stronawww" name="stronawww" value="{if isset($data['stronawww'])}{$data['stronawww']}{/if}"
    type="text"
    data-minlength="4"
    maxlength="100"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 4 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
