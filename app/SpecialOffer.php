<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SpecialOffer
 *
 * @package App
 * @property string $photo
 * @property string $photo_name
 * @property string $caption1
 * @property text $text1
 * @property string $caption2
 * @property text $tetxt2
*/
class SpecialOffer extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'photo_name', 'caption1', 'text1', 'caption2', 'tetxt2'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        SpecialOffer::observe(new \App\Observers\UserActionsObserver);
    }
    
}
