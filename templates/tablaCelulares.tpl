<div class="col-md-6 col-md-offset-4">
 <h1>Muestra tabla BD celulares</h1>
</div>
<div class="row">
<div class="col-md-5 col-md-offset-3">
  <table class="table table-hover">
    <tr class="success">
      <td>Nombre</td>
      <td>Descripcion</td>
    </tr>
    {foreach from=$celulares item=celular}
    <tr class="warning">
      <td>{$celular['nombre']}</td>
      <td>{$celular['descripcion']}</td>
    </tr>
    {/foreach}
  </table>
</div>
</div>
