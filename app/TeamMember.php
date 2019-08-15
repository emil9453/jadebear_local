<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TeamMember
 *
 * @package App
 * @property string $position
 * @property string $name
 * @property string $surname
 * @property text $about
 * @property string $photo
*/
class TeamMember extends Model
{
    use SoftDeletes;

    protected $fillable = ['position', 'name', 'surname', 'about', 'photo'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        TeamMember::observe(new \App\Observers\UserActionsObserver);
    }
    
}
