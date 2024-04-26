<?php

namespace App\Http\Controllers\Web;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
use Illuminate\Support\Facades\URL;

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
            'members' => $members,
        ];
        return view('member.list', $viewData);

    }

    public function authMake()
    {
        return URL::temporarySignedRoute('test.auth.access', Carbon::now()->addMinutes(1));
    }

    public function authAccess()
    {
        throw_if(!request()->hasValidSignature(), InvalidSignatureException::class);
        return '인증 성공';
    }

}
