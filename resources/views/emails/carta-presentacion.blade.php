Hola {{ $carta->alumno->nombres . ' ' . $carta->alumno->apellidos}}

Se ha registrado una nueva carta de presentación en el sistema de estancias y estadías, puedes descargar el documento en el siguiente enlace:

{{ route('formatos.presentacion', $carta->id)}}
