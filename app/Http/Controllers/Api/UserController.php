<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Faker\Provider\Uuid;

class UserController extends Controller
{
    public function __construct(
        private readonly Member $member
    )
    {
    }

    public function get(int $id)
    {
        try{
//            $res = $this->member->findOrFail($id);
//            $res = $this->member
//                ->where('name','John Doe-ff119d84-6b4b-3a70-ab6e-70e93c4e3c80')
//                ->firstOrFail();
            echo '<hr>';
            $res1 = $this->member->get();
            foreach ($res1 as $res){
                echo $res->name.'<br>';
            }
            echo '<hr>';
            $this->member->chunk(100, function ($users) {
                foreach ($users as $res){
                    echo $res->name.'<br>';
                }
            });
            echo '<hr>';
            $res2 = $this->member->lazy();
            foreach ($res2 as $res){
                echo $res->name.'<br>';
            }
            echo '<hr>';
            $res3 = $this->member->cursor();
            foreach ($res3 as $res){
                echo $res->name.'<br>';
            }

        }catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }

        return response()->json(['message' => 'get-success']);
    }

    public function create()
    {
        $this->member->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
        ]);
        return response()->json(['message' => 'success']);
    }

}
