@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading heading">اطلاعات کاربر</div>

            <div class="panel-body">
                <ul class="user-info">
                    <li>نام: <strong>
                        @if (isset(Auth::user()->first_name))
                            {{ Auth::user()->first_name }}
                        @else
                            ...
                        @endif
                        </strong>
                    </li>
                    
                    <li>نام خانوادگی: <strong>
                        @if (isset(Auth::user()->last_name))
                            {{ Auth::user()->last_name }}
                        @else
                            ...
                        @endif
                        </strong>
                    </li>
                    
                    <li>نام کابربری: <strong>{{ Auth::user()->username }}</strong></li>
                    <li>ایمیل: <strong>{{ Auth::user()->email }}</strong></li>
                </ul>
                <a class="btn btn-success" href="#">ویرایش</a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading heading">آخرین تراکنش ها</div>

            <div class="panel-body">
                <ul class="transactions">
                    <li><a href="#">تراکنش ۱۰</a></li>
                    <li><a href="#">تراکنش ۹</a></li>
                    <li><a href="#">تراکنش ۸</a></li>
                    <li><a href="#">تراکنش ۷</a></li>
                    <li><a href="#">تراکنش ۶</a></li>
                    <li><a href="#">تراکنش ۵</a></li>
                    <li><a href="#">تراکنش ۴</a></li>
                    <li><a href="#">تراکنش ۳</a></li>
                    <li><a href="#">تراکنش ۲</a></li>
                    <li><a href="#">تراکنش ۱</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading heading">مدیریت کیف ها</div>

            <div class="panel-body">
                <ul class="total-transactions">
                    <li><a href="#">کیف ۱</a></li>
                    <li><a href="#">کیف ۲</a></li>
                    <li><a href="#">کیف ۳</a></li>
                    <li><a href="#">کیف ۴</a></li>
                    <li><a href="#">کیف ۵</a></li>
                    <li><a href="#">کیف ۶</a></li>
                    <li><a href="#">کیف ۷</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading heading">تعداد کل</div>

            <div class="panel-body">
                <ul class="total-transactions">
                    <li>کل مخارج: <strong>۱۱۲</strong></li>
                    <li>کل دریافتی ها: <strong>۸۵</strong></li>
                    <li>کل کیف ها: <strong>۷</strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection
