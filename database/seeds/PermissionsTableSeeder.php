<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menu de configuración
        $configuracion_ver_configuracion = new Permission();
        $configuracion_ver_configuracion->name = 'configuracion_ver_configuracion';
        $configuracion_ver_configuracion->display_name = 'Ver configuración';
        $configuracion_ver_configuracion->description = 'Permite ver el menú de configuración';
        $configuracion_ver_configuracion->save();

        $configuracion_permisos_ver_permisos = new Permission();
        $configuracion_permisos_ver_permisos->name = 'configuracion_permisos_ver_permisos';
        $configuracion_permisos_ver_permisos->display_name = 'Ver permisos';
        $configuracion_permisos_ver_permisos->description = 'Permite ver el menú de permisos';
        $configuracion_permisos_ver_permisos->save();

        $configuracion_perfiles_ver_perfiles = new Permission();
        $configuracion_perfiles_ver_perfiles->name = 'configuracion_perfiles_ver_perfiles';
        $configuracion_perfiles_ver_perfiles->display_name = 'Ver perfiles';
        $configuracion_perfiles_ver_perfiles->description = 'Permite ver el menú de perfiles';
        $configuracion_perfiles_ver_perfiles->save();

        $configuracion_perfiles_agregar_perfil = new Permission();
        $configuracion_perfiles_agregar_perfil->name = 'configuracion_perfiles_agregar_perfil';
        $configuracion_perfiles_agregar_perfil->display_name = 'Agregar perfil';
        $configuracion_perfiles_agregar_perfil->description = 'Permite agregar un perfil de usuario';
        $configuracion_perfiles_agregar_perfil->save();

        $configuracion_perfiles_modificar_perfil = new Permission();
        $configuracion_perfiles_modificar_perfil->name = 'configuracion_perfiles_modificar_perfil';
        $configuracion_perfiles_modificar_perfil->display_name = 'Modificar perfil';
        $configuracion_perfiles_modificar_perfil->description = 'Permite modificar un perfil de usuario';
        $configuracion_perfiles_modificar_perfil->save();

        $configuracion_perfiles_eliminar_perfil = new Permission();
        $configuracion_perfiles_eliminar_perfil->name = 'configuracion_perfiles_eliminar_perfil';
        $configuracion_perfiles_eliminar_perfil->display_name = 'Eliminar perfil';
        $configuracion_perfiles_eliminar_perfil->description = 'Permite eliminar un perfil de usuario';
        $configuracion_perfiles_eliminar_perfil->save();

        $configuracion_usuarios_ver_usuarios = new Permission();
        $configuracion_usuarios_ver_usuarios->name = 'configuracion_usuarios_ver_usuarios';
        $configuracion_usuarios_ver_usuarios->display_name = 'Ver usuarios';
        $configuracion_usuarios_ver_usuarios->description = 'Permite ver el menú de usuarios';
        $configuracion_usuarios_ver_usuarios->save();

        $configuracion_usuarios_agregar_usuarios = new Permission();
        $configuracion_usuarios_agregar_usuarios->name = 'configuracion_usuarios_agregar_usuario';
        $configuracion_usuarios_agregar_usuarios->display_name = 'Agregar usuario';
        $configuracion_usuarios_agregar_usuarios->description = 'Permite agregar un usuarios';
        $configuracion_usuarios_agregar_usuarios->save();

        $configuracion_usuarios_modificar_usuarios = new Permission();
        $configuracion_usuarios_modificar_usuarios->name = 'configuracion_usuarios_modificar_usuario';
        $configuracion_usuarios_modificar_usuarios->display_name = 'Modificar usuario';
        $configuracion_usuarios_modificar_usuarios->description = 'Permite modificar un usuario';
        $configuracion_usuarios_modificar_usuarios->save();

        $configuracion_usuarios_eliminar_usuarios = new Permission();
        $configuracion_usuarios_eliminar_usuarios->name = 'configuracion_usuarios_eliminar_usuario';
        $configuracion_usuarios_eliminar_usuarios->display_name = 'Eliminar usuario';
        $configuracion_usuarios_eliminar_usuarios->description = 'Permite eliminar un usuario';
        $configuracion_usuarios_eliminar_usuarios->save();

        $configuracion_universidad_ver_datos = new Permission();
        $configuracion_universidad_ver_datos->name = 'configuracion_universidad_ver_datos';
        $configuracion_universidad_ver_datos->display_name = 'Ver datos de la universidad';
        $configuracion_universidad_ver_datos->description = 'Permite ver los datos de la universidad';
        $configuracion_universidad_ver_datos->save();

        $configuracion_universidad_modificar_datos = new Permission();
        $configuracion_universidad_modificar_datos->name = 'configuracion_universidad_modificar_datos';
        $configuracion_universidad_modificar_datos->display_name = 'Modificar datos de la universidad';
        $configuracion_universidad_modificar_datos->description = 'Permite modeificar los datos de la universidad';
        $configuracion_universidad_modificar_datos->save();
    }
}
