<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class TestController
{
    public function __construct(
        private readonly Member $member
    )
    {
    }

    public function index()
    {
        return 'Hello World';
    }

    public function validationTest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:3',
            'nickname' => 'required',
        ]);
//        return redirect()->route('test.validation');
    }

    public function sessionTest()
    {
        $user = $this->member->find(3);

        // session insert
//        foreach ($user->toArray() as $key => $value) {
//            session(['user.' . $key => $value]);
//        }

        // session  전체 조회
        $all = session()->all();

        // has
        $has = session()->has('user');

        // exists
        $exists = session()->exists('user');

        // missing
        $missing = session()->missing('user');

        // push
        session(['user.add' => 'add']);
        $push = session()->only(['user']);

        // pull
        $pull = session()->pull('user.add');

        // forget
        session()->forget('user.deleted_at');
        $forget = session()->only(['user']);

        // flash
//        session()->flush();
        $flush = session()->only(['user']);

        //now
//        session()->now('user.now', 'now');
        $now = session()->only(['user']);

        $viewData = [
            'all' => $all,
            'has' => $has,
            'exists' => $exists,
            'missing' => $missing,
            'push' => $push,
            'pull' => $pull,
            'forget' => $forget,
            'flush' => $flush,
            'now' => $now,
        ];

        return view('test.session', $viewData);
    }

}
