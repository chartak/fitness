@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.clubCart.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.club-carts.update", [$clubCart->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.clubCart.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $clubCart->name) }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('timefrom') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.clubCart.fields.timefrom') }}</label>
                            <select class="form-control" name="timefrom" id="timefrom" required>
                                <option value disabled {{ old('timefrom', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\ClubCart::TIMEFROM_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('timefrom', $clubCart->timefrom) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('timefrom'))
                                <span class="help-block" role="alert">{{ $errors->first('timefrom') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.timefrom_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('timeto') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.clubCart.fields.timeto') }}</label>
                            <select class="form-control" name="timeto" id="timeto">
                                <option value disabled {{ old('timeto', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\ClubCart::TIMETO_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('timeto', $clubCart->timeto) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('timeto'))
                                <span class="help-block" role="alert">{{ $errors->first('timeto') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.timeto_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('year_from') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.clubCart.fields.year_from') }}</label>
                            <select class="form-control" name="year_from" id="year_from">
                                <option value disabled {{ old('year_from', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\ClubCart::YEAR_FROM_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('year_from', $clubCart->year_from) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('year_from'))
                                <span class="help-block" role="alert">{{ $errors->first('year_from') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.year_from_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('year_to') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.clubCart.fields.year_to') }}</label>
                            <select class="form-control" name="year_to" id="year_to">
                                <option value disabled {{ old('year_to', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\ClubCart::YEAR_TO_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('year_to', $clubCart->year_to) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('year_to'))
                                <span class="help-block" role="alert">{{ $errors->first('year_to') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.year_to_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('duration') ? 'has-error' : '' }}">
                            <label class="required" for="duration">{{ trans('cruds.clubCart.fields.duration') }}</label>
                            <input class="form-control" type="number" name="duration" id="duration" value="{{ old('duration', $clubCart->duration) }}" step="1" required>
                            @if($errors->has('duration'))
                                <span class="help-block" role="alert">{{ $errors->first('duration') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.duration_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <div>
                                <input type="hidden" name="status" value="0">
                                <input type="checkbox" name="status" id="status" value="1" {{ $clubCart->status || old('status', 0) === 1 ? 'checked' : '' }}>
                                <label for="status" style="font-weight: 400">{{ trans('cruds.clubCart.fields.status') }}</label>
                            </div>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : '' }}">
                            <label class="required" for="branch_id">{{ trans('cruds.clubCart.fields.branch') }}</label>
                            <select class="form-control select2" name="branch_id" id="branch_id" required>
                                @foreach($branches as $id => $branch)
                                    <option value="{{ $id }}" {{ ($clubCart->branch ? $clubCart->branch->id : old('branch_id')) == $id ? 'selected' : '' }}>{{ $branch }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('branch_id'))
                                <span class="help-block" role="alert">{{ $errors->first('branch_id') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.clubCart.fields.branch_helper') }}</span>
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