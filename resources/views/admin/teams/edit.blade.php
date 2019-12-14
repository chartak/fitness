@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.team.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.teams.update", [$team->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.team.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $team->name) }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.team.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('team') ? 'has-error' : '' }}">
                            <label for="team_id">{{ trans('cruds.team.fields.team') }}</label>
                            <select class="form-control select2" name="team_id" id="team_id">
                                @foreach($teams as $id => $team)
                                    <option value="{{ $id }}" {{ ($team->team ? $team->team->id : old('team_id')) == $id ? 'selected' : '' }}>{{ $team }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('team_id'))
                                <span class="help-block" role="alert">{{ $errors->first('team_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.team.fields.team_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection