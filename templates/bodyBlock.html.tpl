<div class="container">
  <div class="page-header">
    <h1>{block name=title}Strona{/block}</h1>
  </div>
  {include file='./flashMessage.html.tpl'}
  {block name=body}
  {/block}
</div>
{include file='./modals/base.html.tpl'}
