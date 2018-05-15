@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-2 col-sm-2"></div>

    <div class="col-md-8 col-sm-8 col-xs-12">
        @if ($wallet)
            {{ $wallet->name }}
        @else
            کیفی با این شماره پیدا نشد.
        @endif

        <hr>
        <a href="#" class="btn btn-default">نمایش نمودار</a>
    </div>
        
    <div class="col-md-2 col-sm-2"></div>
</div>

<div class="row">

    <div class="col-md-2 col-sm-2"></div>

    <div class="col-md-8 col-sm-8 col-xs-12">
        <hr>
        
        <a class="btn btn-warning btn-sm pull-right btn-indent" href="{{ route('wallets.edit', $wallet->id) }}">ویرایش</a>
        
        <form class="pull-right" method="post" action="{{ route('wallets.destroy', $wallet->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger btn-sm" onclick="return confirm('آیا از حذف کیف خود مطمئن هستید؟')">حذف</button>
        </form>

    </div>
        
    <div class="col-md-2 col-sm-2"></div>

</div>

@endsection