@extends('layouts.app')

@section('breadcrumbs')
   <nav class="breadcrumb">
      <a href="/jobs" class="breadcrumb__link {{ Request::is('jobs') ? 'breadcrumb__link--active' : ''}}">Overview</a>
      <a href="/jobs/create" class="breadcrumb__link {{ Request::is('jobs/create') ? 'breadcrumb__link--active' : ''}}">Create Job</a>
      <a href="/imports" class="breadcrumb__link {{ Request::is('imports') ? 'breadcrumb__link--active' : ''}}">Import Data</a>
   </nav>
@endsection