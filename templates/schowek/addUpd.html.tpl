{extends file="../baseForm.html.tpl"}

{block name=title}Modyfikuj schowek{/block}

{block name=action}
schowek/aktualizuj/{$data['id']}
{/block}
{block name=formBody}
  {include file="./schowekForm.html.tpl"}
{/block}
