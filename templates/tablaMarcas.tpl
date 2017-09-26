<div class="col-md-6 col-md-offset-4">
 <h1>Muestra tabla BD marcas</h1>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-3">
  <table class="table table-hover">
    <tr class="success">
      <td>Nombre</td>
      <td>Descripcion</td>
    </tr>
    {foreach from=$marcas item=marca}
    <tr class="warning">
      <td>{$marca['nombre']}</td>
      <td>{$marca['descripcion']}</td>
    </tr>
    {/foreach}
  </table>
</div>
</div>
