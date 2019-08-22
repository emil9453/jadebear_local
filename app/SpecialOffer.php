<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SpecialOffer
 *
 * @package App
 * @property string $photo
 * @property string $caption1
 * @property string $caption2
*/
class SpecialOffer extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'caption1', 'caption2'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        SpecialOffer::observe(new \App\Observers\UserActionsObserver);
    }
    
}
