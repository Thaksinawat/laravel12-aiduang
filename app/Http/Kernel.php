protected $routeMiddleware = [
'role.admin' => \App\Http\Middleware\RoleAdmin::class,
'auth' => \App\Http\Middleware\Authenticate::class,
'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
'is_admin' => \App\Http\Middleware\IsAdmin::class, // ✅ เพิ่มบรรทัดนี้
];