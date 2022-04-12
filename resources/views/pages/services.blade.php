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
            <div class="services__item">
                <img src="/frontend/img/about-1.png" alt="">
                <div class="services__item-title">
                    Банкротство и ликвидация
                </div>
                <div class="services__item-text">
                    Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности
                </div>
                <div class="services__item-btn">
                    <a class="services__item-link" href="#">Подробнее</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
                        Заказать
                    </a>
                </div>
            </div>
            <div class="services__item">
                <img src="/frontend/img/about-2.png" alt="">
                <div class="services__item-title">
                    Адвокатское сопровождение
                </div>
                <div class="services__item-text">
                    Мы гарантируем полное профессиональное обслуживание клиентов в заявленных сферах деятельности и соблюдение
                    конфиденциальности.
                </div>
                <div class="services__item-btn">
                    <a class="services__item-link" href="#">Подробнее</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
                        Заказать
                    </a>
                </div>
            </div>
            <div class="services__item">
                <img src="/frontend/img/about-3.png" alt="">
                <div class="services__item-title">
                    Налоговый аудит
                </div>
                <div class="services__item-text">
                    Налоговый аудит проводят перед проведением налоговых проверок; при оценке возможных налоговых рисков; при
                    оптимизации налогообложения.
                </div>
                <div class="services__item-btn">
                    <a class="services__item-link" href="#">Подробнее</a>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
