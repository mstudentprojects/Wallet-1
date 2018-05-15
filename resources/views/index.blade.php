@extends('layouts.app')

@section('content')
    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-sm-12">
            <h3>کیف پول چیست؟</h3>
            <hr>
        </div>

        <div class="col-md-7 col-sm-7 col-sm-12">
            <p style="font-size: 18px;">
                با کیف پول شما می توانید دخل و خرج خود را کنترل کنید. بعد از ثبت نام در سایت از
                <a href="{{ route('register') }}">اینجا</a>
                شما با ارسال مقادیر خرج شده و همچین دریافتی خود آنها را به شکال یک نمودار درآورید. این سایت این قابلیت را به شما می دهد که بازه های زمانی مورد نظر را وارد کرده و همه مبالغ مربوط به آن بازه ی زمانی نمایش داده می شود.
            </p>
        </div>

        <!-- <div class="col-md-1 col-sm-1"></div> -->

        <div class="col-md-5 col-sm-5 col-sm-12">
            <img class="thumbnail img-responsive " src="{{ asset("images/wallet.jpg") }}">
        </div>
    </div>
@endsection