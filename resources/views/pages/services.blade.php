@extends('layouts.default')

@section("title")
Услуги
@endsection

@section("content")
<section class="services">
    <div class="container">
        <div class="services__top">
            <div class="services__title-box">
                <div class="services__title">
                    Наши Услуги
                </div>
                <div class="services__text">
                    Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех судебных
                    инстанциях.
                </div>
            </div>
            <div class="services__btn">
                <a href="#">
                    Показать все услуги
                </a>
            </div>
        </div>
        <div class="services__items">
            @foreach($payback as $item)
                <div class="services__item">
                    <img src="/frontend/img/about-{{$item->id}}.png" alt="">
                    <div class="services__item-title">
                       {{$item->title}}
                    </div>
                    <div class="services__item-text">
                        {{$item->text}}
                    </div>
                    <div class="services__item-btn">
                        <a class="services__item-link" href="#">Подробнее</a>
                        <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
                            Заказать
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
