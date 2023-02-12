<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    // public static function find($id)
    // {
    //     $plans = self::all();

    //     foreach ($plans as $plan) {
    //         if ($plan->id == $id) {
    //             return $plan;
    //         } else {
    //             return "No plans found";
    //         }
    //     }
    // }

    public function scopeFilter($query, array $filters)
    {
        // dd($filters['search']);
        if ($filters['winter'] ?? false) {
            $query->where('id', "like", '%' . request('search') . '%');
        }
    }
}
