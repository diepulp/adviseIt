<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['fall', 'winter', 'spring', 'summer', 'token'];

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
        // dd($filters['winter']);
        if ($filters['token'] ?? false) {
            $query->where('token', "like", '%' . request('token') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('token', 'like', '%' . request('search') . '%');
        }
    }
}
