<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request; // ✅ ใช้ตัวนี้แทน
use Illuminate\Support\Facades\Storage;
use App\Models\Product; // ✅ ต้อง import มาด้วย

// หน้าแรก
Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// dashboard (auth + verified)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

// ตัวอย่าง route ธรรมดา
Route::get("/homepage", fn() => "<h1>This is home page</h1>");
Route::get("/blog/{id}", fn($id) => "<h1>This is blog page : {$id}</h1>");
Route::get("/blog/{id}/edit", fn($id) => "<h1>This is blog page : {$id} for edit</h1>");

// hello view
Route::get("/hello", fn() => view("hello"));

// greeting
Route::get('/greeting', function () {
    $name = 'Mark';
    $last_name = 'Suckerberge';
    return view('greeting', compact('name', 'last_name'));
});

// quiz 1 gallery
Route::get("/gallery", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://blog.richersounds.com/wp-content/uploads/2019/07/spider-man-768x384.jpg";
    return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
});

// quiz 2 gallery detail
Route::get("/gallery/ant", fn() => view("test/ant", [
    "ant" => "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg"
]));

Route::get("/gallery/bird", fn() => view("test/bird", [
    "bird" => "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"
]));

Route::get("/gallery/cat", fn() => view("test/cat", [
    "cat" => "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg"
]));

// ตัวอย่าง view ธรรมดา
Route::get("/teacher", fn() => view("teacher"));
Route::get("/student", fn() => view("student"));
Route::get("/theme", fn() => view("theme"));

// active theme routes
Route::prefix('active')->group(function () {
    Route::get('/index', fn() => view('active/index'))->name('index');
    Route::get('/about', fn() => view('active/about'))->name('about');
    Route::get('/services', fn() => view('active/services'))->name('services');
    Route::get('/portfolio', fn() => view('active/portfolio'))->name('portfolio');
    Route::get('/team', fn() => view('active/team'))->name('team');
    Route::get('/blog', fn() => view('active/blog'))->name('blog');
    Route::get('/contact', fn() => view('active/contact'))->name('contact');
});

// coronavirus
Route::get('/coronavirus', function () {
    $reports = [
        (object) ["country" => "Thailand", "date" => "2020-04-19", "total" => "2765", "active" => "790", "death" => "47", "recovered" => "1928"],
        (object) ["country" => "Thailand", "date" => "2020-04-18", "total" => "2733", "active" => "899", "death" => "47", "recovered" => "1787"],
        (object) ["country" => "Thailand", "date" => "2020-04-17", "total" => "2700", "active" => "964", "death" => "47", "recovered" => "1689"],
        (object) ["country" => "Thailand", "date" => "2020-04-16", "total" => "2672", "active" => "1033", "death" => "46", "recovered" => "1593"],
        (object) ["country" => "Thailand", "date" => "2020-04-15", "total" => "2643", "active" => "1103", "death" => "43", "recovered" => "1497"],
    ];
    return view("coronavirus", compact("reports"));
})->name('coronavirus');

// product index
Route::get('product-index', function () {
    $products = Product::all();
    return view('query-test', compact('products'));
})->name("product.index");

// chart
Route::get('barchart', fn() => view('barchart'))->name('barchart');

// news routes
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// product submit
Route::post('/product-submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
        $url = Storage::url($imagePath);
        $data["image"] = $url;
    }

    Product::create($data);

    return redirect()->route('product.index')->with('success', 'เพิ่มสินค้าแล้ว!');
})->name('product.submit');
