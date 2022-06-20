# COMANDOS DATABASE LARAVEL 

php artisan migrate -- migrar todas las tablas que no han sido previamente migradas -- "commit"

php artisan make:migration create_nameTable_table
    -- Con prefijo create_ y sufijo _table nos genera parte del codigo de creación de tabla
    -- crear migración (function up y down - Schema::create('tabla',function(Blueprint $tabla){}) o Schema::dropIfExists('tabla'))

php artisan migrate:rollback -- volver al "commit" anterior

php artisan migrate:fresh -- actualizar cambios  -- método destructivo, se eliminan los registros

php artisan make:migration add_avatar_to_users_table : _to_users_table 
    Con este sufijo nos añade código a up y a down especificando el nombre de la tabla.
    Creamos migración para realizar un update a la tabla users

composer require doctrine/dbal: 
    Permite realizar cambios en las propiedades de una columna
    Ejemplo: php artisan make:migration cambiar_propiedades_to_users_table
        método up: $table->string('name',150)->change(); -- Cambiamos a max 150 chars


# SEEDERS
php artisan make:seeder CursoSeeder

php artisan migrate:fresh --seed
    Ejecuta los seeders creados en el archivo DatabaseSeeder.php

$this->call(CursoSeeder::class);
    En DatabaseSeeder para que al hacer fresh --seed nos lea también el seeder de Curso

# FACTORIES
php artisan make:factory CursoFactory --model=Curso
    Adapta el código del factory al modelo curso

Dentro del seeder
    Curso::factory(50)->create(); 
    Se nos crearán 50 registros con las indicaciones que le dimos previamente en CursoFactory
