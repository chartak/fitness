@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.treainer.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.treainers.update", [$treainer->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('fullname') ? 'has-error' : '' }}">
                            <label class="required" for="fullname">{{ trans('cruds.treainer.fields.fullname') }}</label>
                            <input class="form-control" type="text" name="fullname" id="fullname" value="{{ old('fullname', $treainer->fullname) }}" required>
                            @if($errors->has('fullname'))
                                <span class="help-block" role="alert">{{ $errors->first('fullname') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.treainer.fields.fullname_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="description">{{ trans('cruds.treainer.fields.description') }}</label>
                            <textarea class="form-control ckeditor" name="description" id="description">{!! old('description', $treainer->description) !!}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.treainer.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            <label class="required" for="photo">{{ trans('cruds.treainer.fields.photo') }}</label>
                            <div class="needsclick dropzone" id="photo-dropzone">
                            </div>
                            @if($errors->has('photo'))
                                <span class="help-block" role="alert">{{ $errors->first('photo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.treainer.fields.photo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('types') ? 'has-error' : '' }}">
                            <label class="required" for="types">{{ trans('cruds.treainer.fields.type') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="types[]" id="types" multiple required>
                                @foreach($types as $id => $type)
                                    <option value="{{ $id }}" {{ (in_array($id, old('types', [])) || $treainer->types->contains($id)) ? 'selected' : '' }}>{{ $type }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('types'))
                                <span class="help-block" role="alert">{{ $errors->first('types') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.treainer.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('branches') ? 'has-error' : '' }}">
                            <label class="required" for="branches">{{ trans('cruds.treainer.fields.branch') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="branches[]" id="branches" multiple required>
                                @foreach($branches as $id => $branch)
                                    <option value="{{ $id }}" {{ (in_array($id, old('branches', [])) || $treainer->branches->contains($id)) ? 'selected' : '' }}>{{ $branch }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('branches'))
                                <span class="help-block" role="alert">{{ $errors->first('branches') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.treainer.fields.branch_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.treainers.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($treainer) && $treainer->photo)
      var file = {!! json_encode($treainer->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, '{{ $treainer->photo->getUrl('thumb') }}')
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection