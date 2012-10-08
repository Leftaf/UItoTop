<table class="forum" cellpadding="0" cellspacing="{page:cellspacing}" style="width:{page:width}">
  <tr>
    <td class="headb">{lang:mod_name}</td>
  </tr>
  <tr>
    <td class="leftb">{lang:body_options}</td>
  </tr>
</table>
<br />
{lang:getmsg}
{if:error}
<table class="forum" cellpadding="0" cellspacing="{page:cellspacing}" style="width:{page:width}">
  <tr>
    <td class="leftb">{uitotop:error}</td>
  </tr>
</table>
<br />
{stop:error}
<form method="post" id="UItoTop" action="{action:form}" enctype="multipart/form-data">
  <table class="forum" cellpadding="0" cellspacing="{page:cellspacing}" style="width:{page:width}">
    <tr>
      <td class="leftc">{icon:images} {lang:current}</td>
      <td class="leftb">{uitotop:img}</td>
    </tr>
    <tr>
      <td class="leftc">{icon:download} {lang:upload}</td>
      <td class="leftb"><input type="file" name="picture" value="" />
        <br />
        <br />
        {uitotop:clip}</td>
    </tr>
    <tr>
      <td class="leftc">{icon:configure} {lang:more}</td>
      <td class="leftb"><input type="checkbox" name="delete" value="1" />
        {lang:remove}</td>
    </tr>
    <tr>
      <td class="leftc">{icon:ksysguard} {lang:options}</td>
      <td class="leftb"><input type="submit" name="submit" value="{lang:save}" />
      </td>
    </tr>
  </table>
</form>