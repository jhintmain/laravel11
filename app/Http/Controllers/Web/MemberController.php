<?php

namespace App\Http\Controllers\Web;

use App\Models\Member;
use Carbon\Carbon;

class MemberController
{
    public function __construct(
        private readonly Member $member
    )
    {
    }

    public function list()
    {
        $members = $this->member->withTrashed()->paginate(10);

        $viewData = [
            'members' => $members
        ];
        return view('member.list', $viewData);

    }


}
