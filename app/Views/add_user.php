<!DOCTYPE html>
<html>

<head>
  <title>Agregar usuario con validación en lo campos</title>
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
    <h3>Llene los siguientes datos para darse de alta.</h3>
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submit-form') ?>">
      <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre de usuario">
      </div>

      <div class="form-group">
        <label>Correo eléctronico</label>
        <input type="text" name="email" class="form-control" placeholder="Ingrese el correo eléctronico del usuario">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Guardar información</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
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