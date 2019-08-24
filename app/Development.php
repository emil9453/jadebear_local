<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Development
 *
 * @package App
 * @property string $caption
 * @property text $text
*/
class Development extends Model
{
    use SoftDeletes;

    protected $fillable = ['caption', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Development::observe(new \App\Observers\UserActionsObserver);
    }
    
}
