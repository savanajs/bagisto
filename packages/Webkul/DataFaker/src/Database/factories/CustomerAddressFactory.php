<?php

use Faker\Generator as Faker;

$factory->define(\Webkul\Customer\Models\CustomerAddress::Class, function (Faker $faker) {

    $fakeData = app('Webkul\DataFaker\Repositories\CustomerAddressRepository')->customerAddressDummyData($faker);

    return $fakeData;
});