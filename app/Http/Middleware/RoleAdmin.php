namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleAdmin
{
public function handle(Request $request, Closure $next)
{
if (auth()->check() && auth()->user()->role === 'admin') {
return $next($request);
}

abort(403, 'Unauthorized');
}
}