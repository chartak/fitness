<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'teams';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'team_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function teamUsers()
    {
        return $this->hasMany(User::class, 'team_id', 'id');
    }

    public function teamContactCompanies()
    {
        return $this->hasMany(ContactCompany::class, 'team_id', 'id');
    }

    public function teamContactContacts()
    {
        return $this->hasMany(ContactContact::class, 'team_id', 'id');
    }

    public function teamClubCarts()
    {
        return $this->hasMany(ClubCart::class, 'team_id', 'id');
    }

    public function teamTreainers()
    {
        return $this->hasMany(Treainer::class, 'team_id', 'id');
    }

    public function teamTypeOfTrainers()
    {
        return $this->hasMany(TypeOfTrainer::class, 'team_id', 'id');
    }

    public function teamServices()
    {
        return $this->hasMany(Service::class, 'team_id', 'id');
    }

    public function teamStocks()
    {
        return $this->hasMany(Stock::class, 'team_id', 'id');
    }

    public function teamPermissions()
    {
        return $this->hasMany(Permission::class, 'team_id', 'id');
    }

    public function teamRoles()
    {
        return $this->hasMany(Role::class, 'team_id', 'id');
    }

    public function teamTeams()
    {
        return $this->hasMany(Team::class, 'team_id', 'id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
