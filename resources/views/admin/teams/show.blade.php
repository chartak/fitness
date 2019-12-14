@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.team.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.team.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $team->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.team.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $team->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.team.fields.team') }}
                                    </th>
                                    <td>
                                        {{ $team->team->name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.relatedData') }}
                </div>
                <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                    <li role="presentation">
                        <a href="#team_users" aria-controls="team_users" role="tab" data-toggle="tab">
                            {{ trans('cruds.user.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_contact_companies" aria-controls="team_contact_companies" role="tab" data-toggle="tab">
                            {{ trans('cruds.contactCompany.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_contact_contacts" aria-controls="team_contact_contacts" role="tab" data-toggle="tab">
                            {{ trans('cruds.contactContact.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_club_carts" aria-controls="team_club_carts" role="tab" data-toggle="tab">
                            {{ trans('cruds.clubCart.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_treainers" aria-controls="team_treainers" role="tab" data-toggle="tab">
                            {{ trans('cruds.treainer.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_type_of_trainers" aria-controls="team_type_of_trainers" role="tab" data-toggle="tab">
                            {{ trans('cruds.typeOfTrainer.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_services" aria-controls="team_services" role="tab" data-toggle="tab">
                            {{ trans('cruds.service.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_stocks" aria-controls="team_stocks" role="tab" data-toggle="tab">
                            {{ trans('cruds.stock.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_permissions" aria-controls="team_permissions" role="tab" data-toggle="tab">
                            {{ trans('cruds.permission.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_roles" aria-controls="team_roles" role="tab" data-toggle="tab">
                            {{ trans('cruds.role.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#team_teams" aria-controls="team_teams" role="tab" data-toggle="tab">
                            {{ trans('cruds.team.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="team_users">
                        @includeIf('admin.teams.relationships.teamUsers', ['users' => $team->teamUsers])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_contact_companies">
                        @includeIf('admin.teams.relationships.teamContactCompanies', ['contactCompanies' => $team->teamContactCompanies])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_contact_contacts">
                        @includeIf('admin.teams.relationships.teamContactContacts', ['contactContacts' => $team->teamContactContacts])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_club_carts">
                        @includeIf('admin.teams.relationships.teamClubCarts', ['clubCarts' => $team->teamClubCarts])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_treainers">
                        @includeIf('admin.teams.relationships.teamTreainers', ['treainers' => $team->teamTreainers])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_type_of_trainers">
                        @includeIf('admin.teams.relationships.teamTypeOfTrainers', ['typeOfTrainers' => $team->teamTypeOfTrainers])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_services">
                        @includeIf('admin.teams.relationships.teamServices', ['services' => $team->teamServices])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_stocks">
                        @includeIf('admin.teams.relationships.teamStocks', ['stocks' => $team->teamStocks])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_permissions">
                        @includeIf('admin.teams.relationships.teamPermissions', ['permissions' => $team->teamPermissions])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_roles">
                        @includeIf('admin.teams.relationships.teamRoles', ['roles' => $team->teamRoles])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="team_teams">
                        @includeIf('admin.teams.relationships.teamTeams', ['teams' => $team->teamTeams])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection