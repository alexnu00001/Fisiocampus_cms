<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validar cuenta</title>
</head>
<body>
    <div class="container mt-2 background-validate">
        <div class="row">
            <div class="col-md-12">
                <div class="cmtk_group">
                    <div class="mt-5 text-center">
                        <h2 class="align-middle">Gracias Por registrarte!</h2>
                        <p>
                            Esta es tu contraseña: {{ $passw }}
                        </p>
                        <p class="thnk_des"> <a href="{{  env('APP_URL_LMS') }}">Ingresar a su cuenta.</a></p>


                      Gracias por registrarte en Fisiocampu.
                      Actualmente tu acceso es:
                      Nombre de usuario: [user:name]
                      contraseña: [user:password]
                      Ahora puedes iniciar sesión pulsando este enlace o copiándolo y pegándole en tu navegador:
                      [user:one-time-login-url]
                      Este enlace es para un único inicio de sesión y te llevará a una página donde podrás establecer tu contraseña.
                      Aviso legal de [site:name]
                      [site:url]aviso-legal-y-politica-de-privacidad
                      -- El equipo de [site:name]
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
