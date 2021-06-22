<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contactDetails;

class contactDetailsController extends Controller
{
    public function get() {
        return response(contactDetails::all()->first());
    }

    public function update(Request $request) {
        $request->validate([
            'phone_number' => 'sometimes|string',
            'email' => 'sometimes|string',
            'street' => 'sometimes|string',
            'postcode' => 'sometimes|string',
            'city' => 'sometimes|string',
        ]);

        $contactDetails = contactDetails::all()->first();

        $contactDetails->update($request->toArray());
        return $contactDetails;
    }
}
