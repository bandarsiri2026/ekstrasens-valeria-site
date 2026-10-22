@extends('index')
@section('content')

<section class="contact_us text-center">
    <div class="fields">
        <div class="container">
            <i class="glyphicon glyphicon-envelope fa-5x"></i>
            <h1>СВЯЖИТЕСЬ СО МНОЙ ПРЯМО СЕЙЧАС</h1>
            <p class="lead">ОПИШИТЕ ПРОБЛЕМУ, КОТОРАЯ ВАС БЕСПОКОИТ И Я В БЛИЖАЙШЕЕ ВРЕМЯ СВЯЖУСЬ С ВАМИ И ПОМОГУ</p>

            <!-- start  contact form-->

            <form role=form method="post">
                {{csrf_field()}}
                <div class="col-md-6 wow bounceInLeft" data-wow-duration="4s"  data-wow-offset="250">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control input-lg inputName" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control input-lg inputEmail" placeholder="Электронная почта">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telephone" class="form-control input-lg inputTelephone" placeholder="Ваш телефон">
                    </div>
                </div>
                <div class="col-md-6 wow bounceInRight" data-wow-duration="4s" data-wow-offset="250">
                    <div class="form-group">
                        <textarea name="msg" class="form-control input-lg" placeholder="Описание проблемы"></textarea>

                    </div>
                    <button class="btn btn-primary btn-lg hvr-buzz submit " disabled>Отправить</button>
                </div>
            </form>


            <!-- end  contact form-->

        </div>

    </div>





</section>
@endsection