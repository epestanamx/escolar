Hola {{ $estancia->alumno->nombres . ' ' . $estancia->alumno->apellidos}}

Se ha registrado una solicitud de estancia en el sistema de estancias y estadías.

Ponemos a tu disposición los siguientes documentos:

Cedula de registro:
{{ route('formatos.registro', $estancia->id)}}

Definición de proyecto:
{{ route('formatos.definicion', $estancia->id)}}
