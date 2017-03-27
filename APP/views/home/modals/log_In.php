<!-- Modal Log In-->
<div id="log_In" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Iniciar Sesion</h4>
      </div>
      <div class="" id="response"></div>
      <div class="modal-body">
      <form class="" id="frmLog_In" action="#" method="post">

        <div class="form-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="user" type="text" class="form-control" name="user" placeholder="Usuario" required>

        </div>

        <div class="form-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="pass" type="password" class="form-control" name="pass" placeholder="Contraseña" required>
        </div>

          <label for="checkbox"><input type="checkbox" name="" value=""> Recordar</label>
          <button type="submit" class="btn btn-success" onclick = "log_In()" name="button">Iniciar Sesion</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
