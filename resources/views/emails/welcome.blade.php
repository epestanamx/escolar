Hola {{ $alumno->nombres . ' ' . $alumno->apellidos}}

Para poder utilizar los servicios electronicos de la universidad es necesario que verifiques tu cuenta de correo electronico, por favor utiliza el siguiente enlace:

{{ route('verificar', $alumno->token)}}
