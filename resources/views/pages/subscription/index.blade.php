@extends('layouts.default')

@section('scripts')
    {{ Html::script(mix('assets/js/subscription.js')) }}
@endsection

@section('styles')
    {{ Html::style(mix('assets/css/subscription.css')) }}
@endsection

@section('content')
    @if($errors->has('common'))
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        {{ $errors->first('common') }}
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6 col-xs-12">
                @include('pages.subscription.panels.setup', ['setup' => $setup, 'errors' => $errors , 'validation' => $validation])
            </div>
            @if(!$histories->isEmpty())
                <div class="col-md-6 col-xs-12">
                    @include('pages.subscription.panels.history', ['histories' => $histories->sortByDesc('date')])
                </div>
            @endif
        </div>
        {{--Log Table--}}
        @if(!$logs->isEmpty())
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    @include('panels.log.panel',['log' => $logs])
                </div>
            </div>
        @endif
    </div>
@endsection
