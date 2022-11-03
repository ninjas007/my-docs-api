<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *     path="/profile",
     *     tags={"About Me"},
     *     summary="Get profile",
     *     description="Desctiption about me",
     *     operationId="profile",
     *     @OA\Response(
     *         response="200",
     *         description="successful operation"
     *     )
     * )
     */
    public function profile(Request $request)
    {
        return response()->json([
            'nama' => 'Tilis Tiadi',
            'email' => 'tiliztiadi@gmail.com',
            'contact_number' => '6282325576616'
        ]);
    }
}
