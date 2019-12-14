@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contentTag.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.content-tags.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentTag.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contentTag->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentTag.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $contentTag->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentTag.fields.slug') }}
                                    </th>
                                    <td>
                                        {{ $contentTag->slug }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentTag.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ $contentTag->branch->branch_name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.content-tags.index') }}">
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
                        <a href="#tag_content_pages" aria-controls="tag_content_pages" role="tab" data-toggle="tab">
                            {{ trans('cruds.contentPage.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="tag_content_pages">
                        @includeIf('admin.contentTags.relationships.tagContentPages', ['contentPages' => $contentTag->tagContentPages])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection