=>Create Table (app > Models)

=>Method 1 (Model / Table)
php artisan make:model Student -m
OR
php artisan make:model Student --migration

=>Method 2 ( Table)
(i) php artisan make:migration create_students_table
(ii) php artisan make:migration create_workers_table --create="workers"


---------------------------------------------------------------------------

database connect > create model > create migration > Mess Assignments > migrate

---------------------------------------------------------------------------

.env 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lesson1
DB_USERNAME=root
DB_PASSWORD=

---------------------------------------------------------------------------


=>Available Column's Data type  (database > migration)

$table->id();
$table->increments('id');
$table->bigIncrements('id');

$table->integer('booktime');
$table->bigInteger('id');
$table->unsignedInteger('id');
$table->unsignedBigInteger('id');

$table-tinyInteger('status');
$table-smallInteger('voting');

$table->binary('photo');
$table->boolean('confirmed');

$table->char('name',30);
$table->string('name');
$table->string('name',100);
$table->text('description');
$table->tinytext('notes');
$table->mediumtext('contents');
$table->longtext('article');

$table->time('booktime');
$table->date('create_at');
$table->year('birthyear');

$table->timestamp();  //system auto created_at,updated_at
$table->timestamp('action');   //custom

$table->decimal('amount',precision=10, scale=2);
$table->float('measure',8,2);

$table->enum('payment',['visa','mpu','cod','kpay']);
$table->set('flovours',['orange','vanilla','chocolate']);


$table->json('multiphones');

$table->ipAddress('visitor'); //192.168.0.0
$table->macAddress('device');

---------------------------------------------------------------------------

=>Check Migrate status
php artisan migrate:status

=>Migrate table to database
php artisan migrate 

=>Check before migrate by pretend
php artisan migrate --pretend

=>Undo Migration
php artisan migrate:rollback

=>Check before rollback by pretend
php artisan migrate:rollback --pretend

=>Undo Migration by step rollback the last two migration
php artisan migrate:rollback  --step=2

=>Delete all tables (auto rollback)
php artisan migrate:reset

=>Delete all datas (auto rollback / auto migrate)
php artisan migrate:refresh

=>Delete all datas (auto rollback / auto migrate) by step the last three migration
php artisan migrate:refresh --step=3

---------------------------------------------------------------------------

=>Add New Columns
php artisan make:migration add_city_to_shoppers_table --table=shoppers


=>Sort Columns
$table->string('city')->after('phone');

=>down (for rollback)
$table->dropColumn('city');

=>Drop Columns
php artisan make:migration remove_age_to_students_table --table=students
=>up()
$table->dropColumn('age');
=>down()
$table->int('age');

=>Rename Column  renameColumn(from,to)
php artisan make:migration rename_students_column --table=students
=>up()
$table->renameColumn('phonenumber','phone');
$table->renameColumn('city','address');
=>down()
$table->renameColumn('phone','phonenumber');
$table->renameColumn('address','city');


=>Rename Table  rename(from,to)

php artisan make:migration rename_cu_to_customers_table --table=cu
=>up()
Schema::rename('cu','customers');
=>down()
Schema::rename('customers','cu');

---------------------------------------------------------------------------

=>Default Value

php artisan make:migration create_books_table  --create="books"

=>up()
Schema::create('books',function(){
    $table->id;
    $table->string('title');
    $table->tinyInteger('status')->default('1');
    $table->enum('copyright',['0','1'])->default('0');
    $table->enum('download',array('pdf','txt','.html'))->default('pdf');

    $table->timestamp('created_time')->default(DB::raw('NOW()'));
    $table->timestamp('updated_time')->default(DB::raw('NOW() ON UPDATE NOW()'));

    $table->timestamp('created_time')->useCurrent();
    $table->timestamp('updated_time')->useCurrentOnUpdate();
});


---------------------------------------------------------------------------

Mess Assignments ( Model > Book )

php artisan make:model Book

protected $table = "books"
protected $primary = "id";

=>Customize Timestamps
const CREATED_AT = 'created_date';
const UPDATED_AT = 'updated_date';


=>method 1

protected $fillable = [
    'title',
    'status',
    'copyright',
    'download',
    'created_time',
    'updated_time'
 ];


 =>method 2

protected $guarded = [];

---------------------------------------------------------------------------

=>DB:: CRUD

DB::raw();

DB::select();
DB::insert();
DB::update();
DB::delete();

DB::table()->select()->get();
\DB::table()->selectRaw()->get();

---------------------------------------------------------------------------

=>Trigger

php artisan make:migration create_triggertablename_trigger

public function up():void
{
    \DB::unprepared(
        "
            CREATE TRIGGER triggername_bfc
            BEFORE INSERT ON tablename FOR EACH ROW
            BEGIN
                Condition...
            END
        "
    );
}

public function down():void
{
    \DB::unprepared("DROP TRIGGER IF EXISTS triggername_bfc");
}

---------------------------------------------------------------------------

=> Foregin Key Constraints

Method 1

$table->foreginID('author_id');

//u can also specify a different column if the primary key is not id
$table->foreginID('author_id')->constrained('authors','authorid');

$table->foreginID('author_id')->constrained()->onDelete('cascade');
$table->foreginID('author_id')->constrained()->onUpdate('cascade');     //Automatically assumes the table as authors
$table->foreginID('author_id')->constrained('authors')->onUpdate('cascade')->onDelete('cascade');

Method 2

$table->foreign('author_id')->references('id')->on('authors')->onUpdate('cascade')->onDelete('cascade');


Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
});

Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
});

Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('description');
            $table->year('year');

            $table->foreignId('author_id')->constrained('authors')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('type_id');
            $table->foeign('type_id')->references('id')->on('types')->onUpdate('cascade')->onDelete('restrict');

            $table->timestamps();

});