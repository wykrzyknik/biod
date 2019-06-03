
{extends file="../baseTemplate.html.tpl"}
{if $currentUser != false}
{block name=title}Szczegółowe informacje o tym schowku{/block}
{block name=body}
<div class="row">
  <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
    <div class="thumbnail">
      <div class="caption">
        <h4><span style="color:red">Id</span> {$data['id']} </br> </br> <span style="color:blue">Login</span> {$data['login']} </br> </br> <span style="color:blue">Hasło</span> {$data['password']} </br></br> <span style="color:red">Strona Internetowa</span> {$data['stronawww']} </br></h3>
        <p class="text-right">
          <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}schowek/usun/{$data['id']}" type="button" class="btn btn-danger btn-sm delete-button"
              data-toggle="tooltip" data-placement="top" title="Usuń">
              <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Usuń schowek
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
{/block}
{else if $currentUser == false}

{block name=body}
<h4><span style="color:red">Błąd podczas wejścia na podaną strone:  </span></h4></br>
<h5><span style="color:green">Nie jesteś zalogowany/a na strone. Musisz być zalogowany ,aby uzyskać dostęp do tej strony  </span></h5></br></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania/" type="button">Zaloguj się</a></br>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji/" type="button">Rejestracja</a></br>
	{/block}
{/if}

{block name=footer prepend}
{include file='../modals/deleteConfirmBlock.html.tpl'}
{/block}
