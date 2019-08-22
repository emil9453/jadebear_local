<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Faq
 *
 * @package App
 * @property string $caption
 * @property text $text
*/
class Faq extends Model
{
    use SoftDeletes;

    protected $fillable = ['caption', 'text'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Faq::observe(new \App\Observers\UserActionsObserver);
    }
    
}
