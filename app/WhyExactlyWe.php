<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WhyExactlyWe
 *
 * @package App
 * @property string $caption
 * @property text $text
*/
class WhyExactlyWe extends Model
{
    use SoftDeletes;

    protected $fillable = ['caption', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        WhyExactlyWe::observe(new \App\Observers\UserActionsObserver);
    }
    
}
