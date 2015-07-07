<?php

namespace DraperStudio\Inviteable\Traits;

use DraperStudio\Inviteable\Models\Invite;

/**
 * Class HasInvite.
 */
trait HasInvite
{
    /**
     * @return mixed
     */
    public function invite()
    {
        return $this->morphOne(Invite::class, 'claimer');
    }
}
