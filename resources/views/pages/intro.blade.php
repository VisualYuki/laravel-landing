@extends('layouts.default')

@section("title")
Интро
@endsection

@section("content")
<section class="slider">
    <div class="container">
        <div class="slider__inner">
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider__text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Оставить заявку
                    </a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider__text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Оставить заявку
                    </a>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        КОМПЛЕКСНОЕ ЗАКРЫТИЕ ПРЕДПРИЯТИЯ
                    </div>
                    <div class="slider__text">
                        Полное прекращение существования юридического лица с сохранением легальности всей предыдущей деятельности.
                    </div>
                    <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn default-btn">
                        Оставить заявку
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@if ($payload)
<section>
    <div class="container" style="padding: 10px 0;">
        Параметры, переданные через Route::get() - '{{$payload}}'
    </div>
</section>
@endif
@endsection
