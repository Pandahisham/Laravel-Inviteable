# Laravel Inviteable

Use At Your Own Risk - Not Maintained!

-----

## Installation

First, pull in the package through Composer.

```js
"require": {
    "draperstudio/laravel-inviteable": "~1.0"
}
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    DraperStudio\Inviteable\InviteableServiceProvider::class
];
```

At last you need to publish and run the migration.

```
php artisan vendor:publish && php artisan migrate
```

## Setup a Model

```php
<?php

namespace App;

use DraperStudio\Inviteable\Traits\HasInvite;
use DraperStudio\Inviteable\Traits\HasInviteInterface;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements HasInviteInterface
{
    use HasInvite;
}
```

## Examples

#### Generate a new invitation code
```php
Invite::getNewCode([
    'email' => 'test@test.io',
]);
```

#### Find an invitation by code
```php
Invite::getInviteByCode($invite->code);
```

#### Find a valid invitation by code
```php
Invite::getValidInviteByCode($invite->code);
```

#### Claim an invitation
```php
$invite->claim($user);
```

#### Check if an invitiation has already been claimed
```php
if ($invite->claimed()) {
    dd('This invite has already been claimed.');
}
```

#### Access the model that claimed the invite
```php
dump($invite->claimer);
```

#### Access the invite that has been claimed by a model
```php
dump($user->invite);
```
