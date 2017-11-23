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
        $permiso = new Permission();
        $permiso->name = 'configuracion_ver_configuracion';
        $permiso->display_name = 'Ver configuración';
        $permiso->description = 'Permite ver el menú de configuración';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_permisos_ver_permisos';
        $permiso->display_name = 'Ver permisos';
        $permiso->description = 'Permite ver el menú de permisos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_perfiles_ver_perfiles';
        $permiso->display_name = 'Ver perfiles';
        $permiso->description = 'Permite ver el menú de perfiles';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_perfiles_agregar_perfil';
        $permiso->display_name = 'Agregar perfil';
        $permiso->description = 'Permite agregar un perfil de usuario';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_perfiles_modificar_perfil';
        $permiso->display_name = 'Modificar perfil';
        $permiso->description = 'Permite modificar un perfil de usuario';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_perfiles_eliminar_perfil';
        $permiso->display_name = 'Eliminar perfil';
        $permiso->description = 'Permite eliminar un perfil de usuario';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_usuarios_ver_usuarios';
        $permiso->display_name = 'Ver usuarios';
        $permiso->description = 'Permite ver el menú de usuarios';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_usuarios_agregar_usuario';
        $permiso->display_name = 'Agregar usuario';
        $permiso->description = 'Permite agregar un usuarios';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_usuarios_modificar_usuario';
        $permiso->display_name = 'Modificar usuario';
        $permiso->description = 'Permite modificar un usuario';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_usuarios_eliminar_usuario';
        $permiso->display_name = 'Eliminar usuario';
        $permiso->description = 'Permite eliminar un usuario';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_universidad_ver_datos';
        $permiso->display_name = 'Ver datos de la universidad';
        $permiso->description = 'Permite ver los datos de la universidad';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'configuracion_universidad_modificar_datos';
        $permiso->display_name = 'Modificar datos de la universidad';
        $permiso->description = 'Permite modeificar los datos de la universidad';
        $permiso->save();

        // Alumnos
        $permiso = new Permission();
        $permiso->name = 'ver_alumnos';
        $permiso->display_name = 'Ver alumnos';
        $permiso->description = 'Permite ver el menu de alumnos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_alumnos';
        $permiso->display_name = 'Agregar alumnos';
        $permiso->description = 'Permite agregar alumnos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_alumnos';
        $permiso->display_name = 'Modificar alumnos';
        $permiso->description = 'Permite modificar alumnos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_alumnos';
        $permiso->display_name = 'Eliminar alumnos';
        $permiso->description = 'Permite eliminar alumnos';
        $permiso->save();

        // Asesores academicos
        $permiso = new Permission();
        $permiso->name = 'ver_asesores_academicos';
        $permiso->display_name = 'Ver asesores academicos';
        $permiso->description = 'Permite ver el menu de asesores academicos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_asesores_academicos';
        $permiso->display_name = 'Agregar asesores academicos';
        $permiso->description = 'Permite agregar asesores academicos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_asesores_academicos';
        $permiso->display_name = 'Modificar asesores academicos';
        $permiso->description = 'Permite modificar asesores academicos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_asesores_academicos';
        $permiso->display_name = 'Eliminar asesores academicos';
        $permiso->description = 'Permite eliminar asesores academicos';
        $permiso->save();

        // Asesores empresariales
        $permiso = new Permission();
        $permiso->name = 'ver_asesores_empresariales';
        $permiso->display_name = 'Ver asesores empresariales';
        $permiso->description = 'Permite ver el menu de asesores empresariales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_asesores_empresariales';
        $permiso->display_name = 'Agregar asesores empresariales';
        $permiso->description = 'Permite agregar asesores empresariales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_asesores_empresariales';
        $permiso->display_name = 'Modificar asesores empresariales';
        $permiso->description = 'Permite modificar asesores empresariales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_asesores_empresariales';
        $permiso->display_name = 'Eliminar asesores empresariales';
        $permiso->description = 'Permite eliminar asesores empresariales';
        $permiso->save();

        // Carreras
        $permiso = new Permission();
        $permiso->name = 'ver_carreras';
        $permiso->display_name = 'Ver carreras';
        $permiso->description = 'Permite ver el menu de carreras';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_carreras';
        $permiso->display_name = 'Agregar carreras';
        $permiso->description = 'Permite agregar carreras';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_carreras';
        $permiso->display_name = 'Modificar carreras';
        $permiso->description = 'Permite modificar carreras';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_carreras';
        $permiso->display_name = 'Eliminar carreras';
        $permiso->description = 'Permite eliminar carreras';
        $permiso->save();

        // Cartas de presentación
        $permiso = new Permission();
        $permiso->name = 'ver_cartas_de_presentacion';
        $permiso->display_name = 'Ver cartas de presentacion';
        $permiso->description = 'Permite ver el menu de cartas de presentacion';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_cartas_de_presentacion';
        $permiso->display_name = 'Agregar cartas de presentacion';
        $permiso->description = 'Permite agregar cartas de presentacion';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_cartas_de_presentacion';
        $permiso->display_name = 'Modificar cartas de presentacion';
        $permiso->description = 'Permite modificar cartas de presentacion';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_cartas_de_presentacion';
        $permiso->display_name = 'Eliminar cartas de presentacion';
        $permiso->description = 'Permite eliminar cartas de presentacion';
        $permiso->save();

        // Empresas
        $permiso = new Permission();
        $permiso->name = 'ver_empresas';
        $permiso->display_name = 'Ver empresas';
        $permiso->description = 'Permite ver el menu de empresas';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_empresas';
        $permiso->display_name = 'Agregar empresas';
        $permiso->description = 'Permite agregar empresas';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_empresas';
        $permiso->display_name = 'Modificar empresas';
        $permiso->description = 'Permite modificar empresas';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_empresas';
        $permiso->display_name = 'Eliminar empresas';
        $permiso->description = 'Permite eliminar empresas';
        $permiso->save();

        // Estancias
        $permiso = new Permission();
        $permiso->name = 'ver_estancias';
        $permiso->display_name = 'Ver estancias';
        $permiso->description = 'Permite ver el menu de estancias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_estancias';
        $permiso->display_name = 'Agregar estancias';
        $permiso->description = 'Permite agregar estancias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_estancias';
        $permiso->display_name = 'Modificar estancias';
        $permiso->description = 'Permite modificar estancias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_estancias';
        $permiso->display_name = 'Eliminar estancias';
        $permiso->description = 'Permite eliminar estancias';
        $permiso->save();

        // Estadias
        $permiso = new Permission();
        $permiso->name = 'ver_estadias';
        $permiso->display_name = 'Ver estadias';
        $permiso->description = 'Permite ver el menu de estadias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_estadias';
        $permiso->display_name = 'Agregar estadias';
        $permiso->description = 'Permite agregar estadias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_estadias';
        $permiso->display_name = 'Modificar estadias';
        $permiso->description = 'Permite modificar estadias';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_estadias';
        $permiso->display_name = 'Eliminar estadias';
        $permiso->description = 'Permite eliminar estadias';
        $permiso->save();

        // Etapas de proyectos
        $permiso = new Permission();
        $permiso->name = 'ver_etapas_de_proyectos';
        $permiso->display_name = 'Ver etapas de proyectos';
        $permiso->description = 'Permite ver el menu de etapas de proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_etapas_de_proyectos';
        $permiso->display_name = 'Agregar etapas de proyectos';
        $permiso->description = 'Permite agregar etapas de proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_etapas_de_proyectos';
        $permiso->display_name = 'Modificar etapas de proyectos';
        $permiso->description = 'Permite modificar etapas de proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_etapas_de_proyectos';
        $permiso->display_name = 'Eliminar etapas de proyectos';
        $permiso->description = 'Permite eliminar etapas de proyectos';
        $permiso->save();

        // Periodos escolares
        $permiso = new Permission();
        $permiso->name = 'ver_periodos_escolares';
        $permiso->display_name = 'Ver periodos escolares';
        $permiso->description = 'Permite ver el menu de periodos escolares';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_periodos_escolares';
        $permiso->display_name = 'Agregar periodos escolares';
        $permiso->description = 'Permite agregar periodos escolares';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_periodos_escolares';
        $permiso->display_name = 'Modificar periodos escolares';
        $permiso->description = 'Permite modificar periodos escolares';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_periodos_escolares';
        $permiso->display_name = 'Eliminar periodos escolares';
        $permiso->description = 'Permite eliminar periodos escolares';
        $permiso->save();

        // Proyectos
        $permiso = new Permission();
        $permiso->name = 'ver_proyectos';
        $permiso->display_name = 'Ver proyectos';
        $permiso->description = 'Permite ver el menu de proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_proyectos';
        $permiso->display_name = 'Agregar proyectos';
        $permiso->description = 'Permite agregar proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_proyectos';
        $permiso->display_name = 'Modificar proyectos';
        $permiso->description = 'Permite modificar proyectos';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_proyectos';
        $permiso->display_name = 'Eliminar proyectos';
        $permiso->description = 'Permite eliminar proyectos';
        $permiso->save();

        // Credenciales
        $permiso = new Permission();
        $permiso->name = 'ver_credenciales';
        $permiso->display_name = 'Ver credenciales';
        $permiso->description = 'Permite ver el menu de credenciales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'agregar_credenciales';
        $permiso->display_name = 'Agregar credenciales';
        $permiso->description = 'Permite agregar credenciales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'modificar_credenciales';
        $permiso->display_name = 'Modificar credenciales';
        $permiso->description = 'Permite modificar credenciales';
        $permiso->save();

        $permiso = new Permission();
        $permiso->name = 'eliminar_credenciales';
        $permiso->display_name = 'Eliminar credenciales';
        $permiso->description = 'Permite eliminar credenciales';
        $permiso->save();
    }
}
