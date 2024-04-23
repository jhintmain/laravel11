<?php

namespace App\Observers;

use App\Models\Member;

class MemberObserver
{
    /**
     * Handle the Member "created" event.
     */
    public function created(Member $member): void
    {
        //
        \Log::info(print_r('create',true));
    }

    /**
     * Handle the Member "updated" event.
     */
    public function updated(Member $member): void
    {
        //
        \Log::info(print_r('updated',true));
    }

    /**
     * Handle the Member "deleted" event.
     */
    public function deleted(Member $member): void
    {
        //
        \Log::info(print_r('deleted',true));
    }

    /**
     * Handle the Member "restored" event.
     */
    public function restored(Member $member): void
    {
        //
    }

    /**
     * Handle the Member "force deleted" event.
     */
    public function forceDeleted(Member $member): void
    {
        //
    }
}
