<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $role_admin = Role::create(['name' => 'admin' ]);
        $role_empleado = Role::create(['name' => 'empleado']);

        $permission_create_tarea = Permission::create(['name' => 'crear tarea']);
        $permission_delete_tarea = Permission::create(['name' => 'eliminar tarea']);
        $permission_edit_tarea = Permission::create(['name' => 'editar tarea']);
        $permission_trigger_reports = Permission::create(['name' => 'generar reportes']);
        $permission_modify_status_tarea = Permission::create(['name' => 'modificar estado tarea']);
        $permission_create_empleado = Permission::create(['name' => 'registrar usuario']);


        $permission_view_tarea = Permission::create(['name' => 'ver tarea']);
        $permission_comments_tarea = Permission::create(['name' => 'comentar tarea']);
        $permission_attach_file = Permission::create(['name' => 'adjuntar archivo']);
        $permission_status_tarea = Permission::create(['name' => 'estado tarea']);

        $permissions_admin = [
            $permission_create_tarea,
            $permission_delete_tarea,
            $permission_edit_tarea,
            $permission_trigger_reports,
            $permission_modify_status_tarea,
            $permission_create_empleado
        ];

        $permissions_empleado = [
            $permission_view_tarea,
            $permission_comments_tarea,
            $permission_attach_file,
            $permission_modify_status_tarea
        ];

        $role_empleado -> syncPermissions($permissions_empleado);
        $role_admin -> syncPermissions($permissions_admin);
    
    }
}
