<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Ad extends Model
{

        use HasFactory;
        protected $fillable = [
        'title','price','description','category_id','user_id'
    ];


    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }


    public static function toBeRevisedCount()
    {
        return Ad::where('is_accepted',null)->count();

    }


}
