<!-- Modal Sign In-->
<div id="sign_In" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Registrate</h3>
      </div>
      <div class="modal-body">

        <div class="" id="responseR"></div>

        <form class="" action="#" id="frmSign_In" method="post">

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="user" type="text" class="form-control" name="user" placeholder="Usuario" required>
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="pass" type="password" class="form-control" name="pass" placeholder="Contraseña" required>
          </div>

          <div class="form-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
            <input id="pass2" type="password" class="form-control" name="pass2" placeholder="Repite-Contraseña" required>
          </div>

          <button type="submit" onclick="sign_In()" class="btn btn-success" name="button">Registrarse</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
