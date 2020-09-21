<!DOCTYPE html>
<html>

<head>
  <title>Editar usuario</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h3>Llene los campos que desea actualizar.</h3>
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">

      <div class="form-group">
          <label>Nombre completo</label>
        <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>" placeholder="Ingrese el nombre de usuario">
      </div>

      <div class="form-group">
          <label>Correo eléctronico</label>
        <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>" placeholder="Ingrese el correo eléctronico del usuario">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Guardar cambios</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Nombre es requerido.",
          },
          email: {
            required: "Email es requerido.",
            email: "No parece ser un correo electrónico válido.",
            maxlength: "El correo electrónico debe tener 60 caracteres o más.",
          },
        },
      })
    }
  </script>
</body>

</html>