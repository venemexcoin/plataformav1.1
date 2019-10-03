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
        // Users
        Permission::create([
            'name'         => 'Navegar usuarios',
            'slug'         => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del usuario',
            'slug'         => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',
        ]);


        Permission::create([
            'name'         => 'Edición de usuarios',
            'slug'         => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar usuario',
            'slug'         => 'users.destroy',
            'description'  => 'ELiminar cualquier usuario del sistema',
        ]);


        // Roles
        Permission::create([
            'name'         => 'Navegar roles',
            'slug'         => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del rol',
            'slug'         => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de roles',
            'slug'         => 'roles.create',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de roles',
            'slug'         => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar rol',
            'slug'         => 'roles.destroy',
            'description'  => 'ELiminar cualquier rol del sistema',
        ]);

        // Products
        Permission::create([
            'name'         => 'Navegar productos',
            'slug'         => 'products.index',
            'description'  => 'Lista y navega todos los productos del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles del producto',
            'slug'         => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de productos',
            'slug'         => 'products.create',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de productos',
            'slug'         => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar producto',
            'slug'         => 'products.destroy',
            'description'  => 'ELiminar cualquier producto del sistema',
        ]);

        // Administradores
        Permission::create([
            'name'         => 'Navegar Admin',
            'slug'         => 'admin.index',
            'description'  => 'Lista y navega por los Admin del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de los administradores',
            'slug'         => 'admin.show',
            'description'  => 'Ver en detalle cada administradores del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de Admin',
            'slug'         => 'admin.create',
            'description'  => 'Editar cualquier dato de un administradores del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de Admin',
            'slug'         => 'admin.edit',
            'description'  => 'Editar cualquier dato de un administradores del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar administradores',
            'slug'         => 'admin.destroy',
            'description'  => 'ELiminar cualquier administradores del sistema',
        ]);

        // Categorias del blog
        Permission::create([
            'name'         => 'Navegar categoria blog',
            'slug'         => 'categories.index',
            'description'  => 'Lista y navega el categoria blog del sistema',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de las categoria',
            'slug'         => 'categories.show',
            'description'  => 'Ver en detalle cada categoria del sistema',
        ]);


        Permission::create([
            'name'         => 'Creación de categoria blog',
            'slug'         => 'categories.create',
            'description'  => 'Editar cualquier dato de las categorias del sistema',
        ]);

        Permission::create([
            'name'         => 'Edición de categoria blog',
            'slug'         => 'categories.edit',
            'description'  => 'Editar cualquier dato de un categoria del sistema',
        ]);


        Permission::create([
            'name'         => 'Eliminar categorias del blog',
            'slug'         => 'categories.destroy',
            'description'  => 'ELiminar cualquier categoria del sistema',
        ]);

         // Etiqutas del blog
         Permission::create([
            'name'         => 'Navegar etiqueta blog',
            'slug'         => 'tags.index',
            'description'  => 'Lista y navega el etiqueta blog del blog',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de las etiqueta del blog',
            'slug'         => 'tags.show',
            'description'  => 'Ver en detalle cada etiqueta del blog',
        ]);


        Permission::create([
            'name'         => 'Creación de etiqueta blog',
            'slug'         => 'tags.create',
            'description'  => 'Editar cualquier dato de las etiquetas del blog',
        ]);

        Permission::create([
            'name'         => 'Edición de categorias blog',
            'slug'         => 'tags.edit',
            'description'  => 'Editar cualquier dato de un etiqueta del blog',
        ]);


        Permission::create([
            'name'         => 'Eliminar etiquetas del blog',
            'slug'         => 'tags.destroy',
            'description'  => 'ELiminar cualquier etiqueta del blog',
        ]);

        // post del blog
        Permission::create([
            'name'         => 'Navegar post blog',
            'slug'         => 'post.index',
            'description'  => 'Lista y navega el post del blog',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de las post del blog',
            'slug'         => 'post.show',
            'description'  => 'Ver en detalle cada post del blog',
        ]);


        Permission::create([
            'name'         => 'Creación de post blog',
            'slug'         => 'post.create',
            'description'  => 'Editar cualquier dato de las posts del blog',
        ]);

        Permission::create([
            'name'         => 'Edición de categorias blog',
            'slug'         => 'post.edit',
            'description'  => 'Editar cualquier dato de un post del blog',
        ]);


        Permission::create([
            'name'         => 'Eliminar posts del blog',
            'slug'         => 'post.destroy',
            'description'  => 'ELiminar cualquier post del blog',
        ]);

        // Archivos Zip
        Permission::create([
            'name'         => 'Navegar archivos zip',
            'slug'         => 'download.index',
            'description'  => 'Lista y navega el archivos zip del blog',
        ]);


        Permission::create([
            'name'         => 'Ver detalles de los archivos zip del blog',
            'slug'         => 'download.show',
            'description'  => 'Ver en detalle cada archivos zip del blog',
        ]);


        Permission::create([
            'name'         => 'Creación de archivos zip',
            'slug'         => 'download.create',
            'description'  => 'Editar cualquier dato de las archivos zip del blog',
        ]);

        Permission::create([
            'name'         => 'Edición de categorias blog',
            'slug'         => 'download.edit',
            'description'  => 'Editar cualquier dato de un archivos zip del blog',
        ]);


        Permission::create([
            'name'         => 'Eliminar archivos zip del blog',
            'slug'         => 'download.destroy',
            'description'  => 'ELiminar cualquier archivos zip del blog',
        ]);
    }
}
