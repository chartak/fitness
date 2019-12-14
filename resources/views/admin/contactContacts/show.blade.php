@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contactContact.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.contact-contacts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.company') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->company->company_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.branch_name') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->branch_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_city') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_address') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_email') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_skype') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_skype }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_fb') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_fb }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_ins') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_ins }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_tw') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_tw }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_vk') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_vk }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($contactContact->logo)
                                            <a href="{{ $contactContact->logo->getUrl() }}" target="_blank">
                                                <img src="{{ $contactContact->logo->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.favicon') }}
                                    </th>
                                    <td>
                                        @if($contactContact->favicon)
                                            <a href="{{ $contactContact->favicon->getUrl() }}" target="_blank">
                                                <img src="{{ $contactContact->favicon->getUrl('thumb') }}" width="50px" height="50px">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.open_hour') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->open_hour }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.close_hour') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->close_hour }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.latitude') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->latitude }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.longitude') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->longitude }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->description }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.contact-contacts.index') }}">
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
                        <a href="#branch_services" aria-controls="branch_services" role="tab" data-toggle="tab">
                            {{ trans('cruds.service.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#branch_club_carts" aria-controls="branch_club_carts" role="tab" data-toggle="tab">
                            {{ trans('cruds.clubCart.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#branch_stocks" aria-controls="branch_stocks" role="tab" data-toggle="tab">
                            {{ trans('cruds.stock.title') }}
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#branch_treainers" aria-controls="branch_treainers" role="tab" data-toggle="tab">
                            {{ trans('cruds.treainer.title') }}
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" role="tabpanel" id="branch_services">
                        @includeIf('admin.contactContacts.relationships.branchServices', ['services' => $contactContact->branchServices])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="branch_club_carts">
                        @includeIf('admin.contactContacts.relationships.branchClubCarts', ['clubCarts' => $contactContact->branchClubCarts])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="branch_stocks">
                        @includeIf('admin.contactContacts.relationships.branchStocks', ['stocks' => $contactContact->branchStocks])
                    </div>
                    <div class="tab-pane" role="tabpanel" id="branch_treainers">
                        @includeIf('admin.contactContacts.relationships.branchTreainers', ['treainers' => $contactContact->branchTreainers])
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection