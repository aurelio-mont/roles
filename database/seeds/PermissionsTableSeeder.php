<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'LVer en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de usuario del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'eliminar cualquier dato de usuario del sistema',
        ]);
        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de rol',
            'slug'          => 'roles.show',
            'description'   => 'LVer en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion rol',
            'slug'          => 'roles.create',
            'description'   => 'Editar cualquier dato de rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion rol',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de rol del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar rol',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier dato de rol del sistema',
        ]);
        //Productos
        Permission::create([
            'name'          => 'Navegar prductos',
            'slug'          => 'prductos.index',
            'description'   => 'Lista y navega todos los prductos del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de producto',
            'slug'          => 'productos.show',
            'description'   => 'LVer en detalle cada producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Creacion producto',
            'slug'          => 'productos.create',
            'description'   => 'Editar cualquier dato de producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Edicion producto',
            'slug'          => 'productos.edit',
            'description'   => 'Editar cualquier dato de producto del sistema',
        ]);
        Permission::create([
            'name'          => 'Eliminar producto',
            'slug'          => 'productos.destroy',
            'description'   => 'Eliminar cualquier dato de producto del sistema',
        ]);
    }
}
