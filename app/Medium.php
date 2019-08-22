<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medium
 *
 * @package App
 * @property string $photo
 * @property string $caption
 * @property string $text
*/
class Medium extends Model
{
    use SoftDeletes;

    protected $fillable = ['photo', 'caption', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Medium::observe(new \App\Observers\UserActionsObserver);
    }
    
}
