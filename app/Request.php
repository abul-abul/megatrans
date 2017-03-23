<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'request';

    protected $fillable = [
        'company',
        'contact_person',
        'tel',
        'email',
        'cargo_description',
        'code',
        'number_and_types_of_railcars',
        'cargo_gross_weight_in_one_railcar',
        'cargo_total_gross_weight',
        'dimensions',
        'un_number',
        'type_of_packaging',
        'special_features',
        'loading_date',
        'loading_region',
        'postal_code',
        'destination_region',
        'railcars_forwarding_route',
        'railway_and_dispatch_station',
        'railway_and_destination_station',
        'customs_clearance',
        'other_information',
        'active_view'
    ];
}
