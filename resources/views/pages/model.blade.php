@extends('layout.masterlayout')

@section('content')
    <h2>Migration</h2>
    <p>App folder contains Models folder</p>
    <p>When new table is created using migration command first its model is created using</p>
    <p>Make command.By default table name ends with s and model name without s </p>
    <p>ie if schema has table students and model name will be student</p>
    <p>If we want to change table name then in model's class we have to define</p>
    <p>table property and assign table name</p>
    <p>Similarly by default table has timestamp columns but if want to remove these</p>
    <p>columns then we have set timestamp property in model to none</p>
    <p>To make model with table use: php artisan make:model modelname -m</p>
    <p>In migration we have schema class which refers to database using it we can</p>
    <p>create table and then add columns</p>
    <p>in env page database information is stored. We can change db name, password etc</p>
    <p>In config folder database file exists. It has selection of database types and by default mysql is selected</p>
    <p>To create database with tables use php artisan migrate</p>
    <p>To check files status in migration folder use : php artisan migrate:status</p>
    <p>To undo last migration use: php migrate:rollback</p>
    <p>To delete all db table use command: php artisan migrate:reset</p>
    <p>To rollback all changes and run migration use(It is version control. We cannot make changes to migration files): php artisan migrate:refresh</p>
    <p>To delete all tables and create migration again use(we can make changes in migration files and delete them): php artisan migrate:fresh</p>
    <p>To update db table students use command: php artisan make:migration update_students_table --table = students</p>
    <p>In migration file schema has table method instead of create</p>
    <p>To add column in table we use table->datatype('columnname').</p>
    <p>To drop of column from table we use $table->dropColumn('columnNmae'). </p>
    <p>If we want to change properties of column then we use $table->datatype('columnname')->change()</p>
    <p>Then we run command: php artisan migrate </p>
    <p>When we create or update table using php artisan migrate command than in migration file we use up function</p>
    <p>If we want to rollback with php artisan migrate:rollback than we use down function in migration file</p>
    <p>To drop table use $table->dropifExist('tablename')</p>
    <p>To run mysql command use DB::statment().Blueprint class doesnot support check constraint</p>
    <p>To add foreign key to column in table use: make:migration update_tablename_table --table=tablename</p>
    <p>In up function add command $table->foreign(columnname)->refreneces(columnname)->on(tablename);</p>
    <p>To drop foreign key constraint use $table->dropforegin(columnname)</p>
    <h2>Seeding</h2>
    <p>To insert production website data we use seeder</p>
    <p>It is in database folder</p>
    <p>To create seeder file for table use: php artisan make:seeder TableNameSeeder</p>
    <p>Add model class of table to seeder file using: use App\Model\ModelName</p>
    <p>To insert data into table use modelname::create(['columnname'=>'value'])</p>
    <p>Create is part of Eloquent class that insert on record at a time</p>
    <p>It also require timestamp column in table. If there is no timestamp it will return error</p>
    <p>It also returns ID from database</p>
    <p>We can also add record using modelname::insert()</p>
    <p>insert is query command and we can add multiple rows in single command</p>
    <p>It doesnot require timestamp column and doenot return ID of inserted rows</p>
    <p>To run seeders we use DatabaseSeeder.Its run function will execute at command line</p>
    <p>We will add $this->call([seedername::class]) in run function</p>
    <p>In commandline enter: php artisan db:seed</p>
    <p>To fresh migration with seeding use: php artisan migrate:fresh --seed</p>
    <h2>Factory</h2>
    <p>To insert fake data laravel has provided Factory</p>
    <p>It is in database/factory folder</p>
    <p>We can add data to tables that have relationship using factory</p>
    <p>It uses Elequont class to add relational data</p>
    <p>To make model factory use: php artisan make:factory CityFactory</p>
    <p>Factory model file has function definition that return an array</p>
    <p>We define table column names thier values in array</p>
    <p>In DataBase seeders file we add model class of table whose factory file we created</p>
    <p>We donot use this in run function instead we use modelname::factory()->count->create()</p>
    <h2>Query Builder</h2>
    <p>To perform CRUD operations laraval provides two methods one is query builder used in</p>
    <p>controller and other is Eloquent ORM which is used in models</p>
    <p>in controller we add DB class</p>
    <p>Query builder protect from SQL injection as it uses PDO</p>
    <p>To select all data from table use db::table('tablename')->get()</p>
    <p>To select some columns from table use db::table()->select('columnNames')->get()</p>
    <p>To apply condition on column use where('columnname','condition','value')</p>
    <p>Mulitple where act as AND</p>
    <p>To apply OR condition use where()->orWhere()</p>
    <p>In php we use var_dump to get content datatype and value</p>
    <p>In laravel we use dd(variable)</p>
    <p>To check wether record exists in database before retrieving it use table()->where()->exits()</p>
    <p>To insert data into database such as single user we use DB class in controller</p>
    <p>DB class has method table() and then we use insert()</p>
    <p>If table columns have constriant such as uique then we use insertorignore</p>
    <p>It will not insert if conditions donot met</p>
@endsection