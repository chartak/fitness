<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClubCart extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'club_carts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TIMETO_SELECT = [
        '06:00' => '06:00',
        '07:00' => '07:00',
        '08:00' => '08:00',
        '09:00' => '09:00',
        '10:00' => '10:00',
    ];

    protected $fillable = [
        'name',
        'timeto',
        'status',
        'year_to',
        'team_id',
        'timefrom',
        'duration',
        'year_from',
        'branch_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TIMEFROM_SELECT = [
        '06:00' => '06:00',
        '07:00' => '07:00',
        '08:00' => '08:00',
        '09:00' => '09:00',
        '10:00' => '10:00',
        '11:00' => '11:00',
        '12:00' => '12:00',
    ];

    const YEAR_FROM_SELECT = [
        '3'  => '3',
        '4'  => '4',
        '5'  => '5',
        '6'  => '6',
        '7'  => '7',
        '8'  => '8',
        '9'  => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
    ];

    const YEAR_TO_SELECT = [
        '3'  => '3',
        '4'  => '4',
        '5'  => '5',
        '6'  => '6',
        '7'  => '7',
        '8'  => '8',
        '9'  => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
    ];

    public function branch()
    {
        return $this->belongsTo(ContactContact::class, 'branch_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
