<div class="content">
    @can('treainer_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.treainers.create") }}">
                    {{ trans('global.add') }} {{ trans('cruds.treainer.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.treainer.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Treainer">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.treainer.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.treainer.fields.fullname') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.treainer.fields.photo') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.treainer.fields.type') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($treainers as $key => $treainer)
                                    <tr data-entry-id="{{ $treainer->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $treainer->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $treainer->fullname ?? '' }}
                                        </td>
                                        <td>
                                            @if($treainer->photo)
                                                <a href="{{ $treainer->photo->getUrl() }}" target="_blank">
                                                    <img src="{{ $treainer->photo->getUrl('thumb') }}" width="50px" height="50px">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($treainer->types as $key => $item)
                                                <span class="label label-info label-many">{{ $item->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('treainer_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.treainers.show', $treainer->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('treainer_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.treainers.edit', $treainer->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('treainer_delete')
                                                <form action="{{ route('admin.treainers.destroy', $treainer->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('treainer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.treainers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Treainer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection