@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contentCategory.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.content-categories.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentCategory.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contentCategory->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentCategory.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $contentCategory->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentCategory.fields.slug') }}
                                    </th>
                                    <td>
                                        {{ $contentCategory->slug }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentCategory.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ $contentCategory->branch->branch_name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.content-categories.index') }}">
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
                        <a href="#category_content_pages" aria-controls="category_content_pages" role="tab" data-toggle="tab">
                            {{ trans('cruds.contentPage.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="category_content_pages">
                        @includeIf('admin.contentCategories.relationships.categoryContentPages', ['contentPages' => $contentCategory->categoryContentPages])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection