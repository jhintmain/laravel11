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

        throw_if(! request()->hasValidSignature(), InvalidSignatureException::class);

        $viewData = [
            'members' => $members,
            'signedUrl' => URL::temporarySignedRoute('member.list', Carbon::now()->addMinutes(1)),
        ];
        return view('member.list', $viewData);

    }


}
