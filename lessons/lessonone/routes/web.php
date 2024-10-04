<?php

use App\Http\Controllers\StaffsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\MembersController;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Save Myanmar";
});

Route::get('/lin', function () {
    return "How are you lin?";
});

Route::get('/chan', function () {
    return "How are you chan?";
});

Route::view('/about', "aboutme");
Route::view('/about/company', "aboutcompany");

Route::redirect('/contact', '/about/company');


Route::get('/about/office/{staff}', function($staff) {
    return "Hello $staff";
});

Route::get('/about/company/{staff}',function($staff){
    return view("aboutcompanystaff",["person"=>$staff]);
});

Route::get('/about/company/{staff}/{city}', function($staff, $city) {
    return view('aboutcompanystaffbycity', ['person' => $staff, 'location' => $city]);
});


Route::get('/profiles',function(){
    return view("myprofile");
})->name("prof");


// Route::get('/students', [\App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
// Route::get('/students/show', [\App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');
// Route::get('/students/edit', [\App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');

// Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
// Route::get('/students/show', [StudentsController::class, 'show'])->name('students.show');
// Route::get('/students/edit', [StudentsController::class, 'edit'])->name('students.edit');


// Route::group(['prefix'=>'students'],function(){
//     Route::get('/', [\App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
//     Route::get('/show', [\App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');
//     Route::get('/edit', [\App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
// });

// Route::group(['prefix'=>'students'],function(){
//     Route::get('/', [StudentsController::class, 'index'])->name('students.index');
//     Route::get('/show', [StudentsController::class, 'show'])->name('students.show');
//     Route::get('/edit', [StudentsController::class, 'edit'])->name('students.edit');
// });


// Route::name('students.')->group(function(){
//     Route::get('/students', [StudentsController::class, 'index'])->name('index');
//     Route::get('/students/show', [StudentsController::class, 'show'])->name('show');
//     Route::get('/students/edit', [StudentsController::class, 'edit'])->name('edit');
// });


Route::get('/staffs',[StaffsController::class,'home'])->name('staffs.home');
Route::get('/staffsparty',[StaffsController::class,'party'])->name('staffs.party');
Route::get('/staffsparty/{total}',[StaffsController::class,'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}',[StaffsController::class,'partytotalconfirm'])->name('staffs.totalconfirm');


Route::get('/employees',[EmployeesController::class,'index'])->name('employees.index');
Route::get('/employees/passingdataone',[EmployeesController::class,'passingdataone'])->name('employees.passingdataone');
Route::get('/employees/passingdatatwo',[EmployeesController::class,'passingdatatwo'])->name('employees.passingdatatwo');
Route::get('/employees/passingdatathree',[EmployeesController::class,'passingdatathree'])->name('employees.passingdatathree');
Route::get('/employees/show',[EmployeesController::class,'show'])->name('employees.show');
Route::get('/employees/edit',[EmployeesController::class,'edit'])->name('employees.edit');
Route::get('/employees/update',[EmployeesController::class,'update'])->name('employees.update');



Route::get('/dashboards',[DashbordController::class,'index'])->name('dashboards.index');
Route::get('/members',[MembersController::class,'index'])->name('members.index');


//i. Raw SQL Queries


Route::get('students/insert', function() {
    DB::insert('INSERT INTO students(name, phone) VALUES (?, ?)', ['Zaw Htet', '093909567']);
    return "Data Inserted";
});


Route::get('students/reads', function() {
    $results = DB::select('SELECT * FROM students');
    
    // return $results;
    // return var_dump($results);

    foreach($results as $result){
        echo $result->name. "<br/>";
    }

});


Route::get('students/singleread',function(){
    $results = DB::select('SELECT * FROM students WHERE id=?',[2]);
    return $results;
});

Route::get('students/update',function(){
    // $results = DB::update('UPDATE students SET name="Zaw Zaw" WHERE id=?',[2]);
    $results = DB::update('UPDATE students SET name=?, phone=? WHERE id=?', ['Su Su', '0988765', 3]);
    return "Updated Success";
});

Route::get('students/delete',function(){
    $results = DB::delete('DELETE FROM students WHERE id=?',[4]);
    return "Deleted Success";
});


//Query Builder

Route::get('staffs/insert', function() {

    DB::table('staffs')->insert([
        [
            'name' => 'Zaw Zaw',
            'age' => 21
        ],
        [
            'name' => 'Aye Aye',
            'age' => 30
        ]
    ]);

    return "Inserted";
});



Route::get('staffs/read',function(){

    $staffs = DB::table('staffs')->get();
    // return $staffs;
    // return var_dump($staffs);

    // foreach($staffs as $staff){
    //     echo $staff->name."<br/>";
    // }

    // $staffs = DB::table('staffs')->select('name','id')->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->where('age','>','18')->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->limit(2)->orderBy('id','desc')->get();
    // return $staffs;

    // $staffs = DB::table('staffs')->count();
    // return $staffs;

    // $staffs = DB::table('staffs')->where('name','U Lin')->exists();
    // return $staffs;

    // $staffs = DB::table('staffs')->pluck('name');        //array
    $staffs = DB::table('staffs')->pluck('name','id');      //object
    return $staffs;
    
});


Route::get('staffs/singleread',function(){

    $staffs = DB::table('staffs')->where('id',1)->first();
    // return $staffs;
    echo $staffs->name;
    echo $staffs->age;
    
});

Route::get('staffs/update',function(){

    // $staffs = DB::table('staffs')->where('id',3)->update(['name'=>'U Lin']);
    // return "Updated";

    // $staffs = DB::table('staffs')->where('id',2)->update(['name'=>'Nandar','age'=>40]);
    // return "Updated";

    $staffs = DB::table('staffs')->where('age',30)->update(['name'=>'Ma Aye']);
    return "Updated";
    
});


Route::get('staffs/delete',function(){

    // $staffs = DB::table('staffs')->where('id',4)->delete();
    // return "Deleted";
    
    // $staffs = DB::table('staffs')->where('name','mg zaw')->delete();
    // return "Deleted";
    
});

//iii. Laravel Method

Route::get('articles/create', function () {

    //Method 1
    // $article = new Article();
    // $article->title = "This is new article 10";
    // $article->description = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, eos. Reprehenderit, voluptates! Architecto, eum ab.";
    // $article->user_id = 10;
    // $article->rating = 1;
    // $article->save();


    //Method 2
    Article::create([

        "title" => "This is new article 13",
        "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, eos. Reprehenderit, voluptates! Architecto, eum ab.",
        "user_id" => 1,
        "rating" => 2

    ]);

    return "Inserted successfully";
});


Route::get('articles/read', function () {

    // $articles = Article::all();
    // // // return articles;

    // foreach($articles as $article){
    //     echo "$article->id = $article->title <br/>";
    // }

    $article = Article::find(1);
    // $article = Article::findOrFail(6);

    // return $article;
    echo "$article->id = $article->title <br/>";

});


Route::get('articles/update', function () {

    $article = Article::findOrFail(4);
    $article->title = "This is old article 4";
    $article->description = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia, eos. Reprehenderit, voluptates! Architecto, eum ab.";
    $article->user_id = 2;
    $article->rating = 2;
    $article->save();

    return "Updated Successfully";
});


Route::get('articles/delete', function () {

    $article = Article::findOrFail(15);
    $article->delete();

    return "Deleted Successfully";
});


Route::get('articles/aggregates', function () {

    $datas = [
        ['price'=>1000],
        ['price'=>2000],
        ['price'=>3000],
        ['price'=>4000],
        ['price'=>5000]
    ];

    // var_dump($datas);
    // var_dump(collect($datas));

    // dd($datas);
    dd($datas,collect($datas));

    // return collect($datas)->count();    //5

    // return collect($datas)->max();    //{"price":5000}
    // return collect($datas)->max(function($num){
    //     return $num['price'];       //5000
    // });


    // return collect($datas)->min();    //{"price":1000}
    // return collect($datas)->min(function($num){  c
    //     return $num['price'];       //1000
    // });

    // return collect($datas)->sum(function($num){
    //     return $num['price'];       //15000
    // });

    // return collect($datas)->average();    //error
    // return collect($datas)->average(function($num){
    //     return $num['price'];       //3000
    // });
    // return collect($datas)->avg(function($num){
    //     return $num['price'];       //3000
    // });


    $articles = Article::all()->count();
    // return $articles;       //9

    // $articles = Article::where('user_id',2)->count();
    // return $articles;       //2

    // $articles = Article::where('user_id',1)->max('rating');
    // return $articles;       //5

    // $articles = Article::where('user_id',2)->max('rating');
    // return $articles;       //3

    // $articles = Article::where('user_id',2)->min('rating');
    // return $articles;       //2

    // $articles = Article::where('user_id',2)->average('rating');
    // return $articles;       //2.5

    // $articles = Article::where('user_id',2)->avg('rating');
    // return $articles;       //2.5

    // $articles = Article::where('user_id',2)->sum('rating');
    // return $articles;       //5

});


// whereColumn(,)
// whereColumn(,,)

Route::get('articles/wherecolumn', function () {
    // $articles = Article::whereColumn('id', 'user_id')->get();
    // return $articles;

    // $articles = Article::whereColumn('created_at','updated_at')->orderByDesc('id')->get();
    // return $articles;

    // $articles = Article::whereColumn('created_at', '<','updated_at')->get();
    // return $articles;

});


// join(,)
// join(,,)

Route::get('articles/join', function () {
    //=>innerjoin
    // $articles = Article::join('users', 'articles.user_id', '=','users.id')->select('articles.title','users.name')->get();
    // // return $articles;
    // foreach($articles as $article){
    //     echo "$article->title = $article->name <hr/>";
    // }

    // $articles = DB::table('articles')->join('users', 'articles.user_id', '=','users.id')->select('articles.title','users.name as owner')->get();
    // // return $articles;
    // foreach($articles as $article){
    //     echo "$article->title = $article->owner <hr/>";
    // }

    //=>leftjoin
    // $articles = Article::leftJoin('users', 'articles.user_id', '=','users.id')->select('articles.title as caption','users.name as owner')->get();
    // // return $articles;
    // foreach($articles as $article){
    //     echo "$article->caption = $article->owner <hr/>";
    // }

    //=>rightjoin
    // $articles = Article::rightJoin('users', 'articles.user_id', '=','users.id')->select('articles.title as caption','users.name as owner')->get();
    // // return $articles;
    // foreach($articles as $article){
    //     echo "$article->owner = $article->caption <hr/>";
    // }

});
