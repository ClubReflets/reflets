@extends('layouts.admin')

@section('breadcrumbs')
    {{ Breadcrumbs::render('organization.index', $org) }}
@endsection

@section('content')
<h1>Orgs</h1>
@endsection
