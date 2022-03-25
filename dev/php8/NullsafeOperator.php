<?php
class address {
    public ?string $country;
}

class user {
    public ?address $address;
}

function getCountry (?User $user): ?string {
    // php7
    //     if ($user != null) {
    //     if ($user->address != null) {
    //         return $user->address->country;
    //     }
    // }

    return $user?->address?->country;

}

echo getCountry(null) .PHP_EOL;
