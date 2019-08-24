<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Review
 *
 * @package App
 * @property text $text
 * @property string $photo
 * @property string $name
 * @property string $company
*/
class Review extends Model
{
    use SoftDeletes;

    protected $fillable = ['text', 'photo', 'name', 'company'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Review::observe(new \App\Observers\UserActionsObserver);
    }
    
}
