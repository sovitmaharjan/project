<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeHolidayAssignmentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            new EmployeeResource($this)
        ];
    }
}
