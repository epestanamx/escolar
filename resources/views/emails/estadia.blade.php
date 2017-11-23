Hola {{ $estadia->alumno->nombres . ' ' . $estadia->alumno->apellidos}}

Se ha registrado una solicitud de estadia en el sistema de estadias y estadías.

Ponemos a tu disposición los siguientes documentos:

Cedula de registro:
{{ route('formatos.registro', $estadia->id)}}

Definición de proyecto:
{{ route('formatos.definicion', $estadia->id)}}
