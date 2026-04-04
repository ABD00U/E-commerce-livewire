<?php

namespace App\Http\Middleware;

use App\Models\ProductModel;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $productId = $request->route('id');
        $product = ProductModel::find($productId);

        if ($product && Auth::check() && Auth::id() == $product->user_id) {
            return $next($request);
        }

        return abort(403, 'Unauthorized action. You do not own this product.');
    }
}
