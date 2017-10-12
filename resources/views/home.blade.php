@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <span class="pull-left">Queue Reports</span>
                    <a href="{{ route('simulate') }}" class="btn btn-sm btn-primary pull-right">Simulate</a>
                </div>

                <div class="panel-body">
                    <jobs :jobs='@json($jobs)'></jobs></jobs>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
