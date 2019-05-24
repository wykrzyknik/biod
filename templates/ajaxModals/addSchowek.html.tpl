{extends file="../modals/formBlock.html.tpl"}
{block name=action}schowek/dodaj/{/block}
{block name=title}Nowy schowek{/block}
{block name=body}{include file="../schowek/schowekForm.html.tpl"}{/block}
{block name=acceptButton}<button type="submit" class="btn btn-success">Dodaj</button>{/block}
