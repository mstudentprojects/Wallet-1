@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-2 col-sm-2"></div>

    <div class="col-md-8 col-sm-8 col-xs-12">
        @foreach ($wallets as $wallet)
            <div class="well">
                <div><a href="{{ route('wallets.show', $wallet->id) }}">{{ $wallet->name }}</a></div>
                <small>ایجاد شده در تاریخ {{ $wallet->created_at }} آخرین دسترسی ...</small>
             </div>
        @endforeach
    </div>
        
    <div class="col-md-2 col-sm-2"></div>

</div>

<div class="row">

    <div class="col-md-2 col-sm-2"></div>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <hr>
        <a class="btn btn-info pull-right" href="{{ route('wallets.create') }}">ایجاد کیف جدید</a
    </div>
        
    <div class="col-md-2 col-sm-2"></div>

</div>
@endsection