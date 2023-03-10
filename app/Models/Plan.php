<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    // Not needed as the AppServiceProvider boot() method was updated
    // protected $fillable = ['fall', 'winter', 'spring', 'summer', 'token'];

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

    // Relationship to user
    // The plan belings to the user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
