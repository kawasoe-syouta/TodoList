@extends('layouts.app')

@section('content')
  <h2 class="brand-header">日報一覧</h2>
  <div class="main-wrap">
    <div class="btn-wrapper daily-report">
      {{--  TODO 日報検索機能  --}}
      {!! Form::open(['route' => 'report.index', 'method' => 'GET']) !!}
        {!! Form::month('reporting_time', null, ['class' => 'form-control']) !!}
        {!! Form::button('<i class="fa fa-search"></i>', ['class' => 'btn btn-icon', 'type' => 'submit']) !!}
      {!! Form::close() !!}
      {!! Form::open(['route' => 'report.index', 'method' => 'GET']) !!}
        {!! Form::button('<i class="fa fa-plus"></i>', ['class' => 'btn btn-icon', 'type' => 'submit']) !!}
      {!! Form::close() !!}
    </div>
    <div class="content-wrapper table-responsive">
      <table class="table table-striped">
        <thead>
          <tr class="row">
            <th class="col-xs-2">Date</th>
            <th class="col-xs-3">Title</th>
            <th class="col-xs-5">Content</th>
            <th class="col-xs-2"></th>
          </tr>
        </thead>
        <tbody>
          <tr class="row">
            <td class="col-xs-2"></td>
            <td class="col-xs-3"></td>
            <td class="col-xs-5"></td>
            <td class="col-xs-2"></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center">
      </div>
    </div>
  </div>
@endsection
