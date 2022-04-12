@extends('layouts.default')

@section("title")
О компании
@endsection

@section("content")
<section class="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__title">
                О компании
            </div>
            <div class="about__text">
                Компания специализируется на оказании услуг в сфере корпоративного права, налогового консалтинга,
                представительства в судах, ликвидации и банкротства предприятий. На сегодняшний день, коллектив компании
                объединяет
                высокопрофессиональных экспертов имеющих
                специализации в отдельных областях права.
            </div>
            <a href="#" class="about__btn default-btn">
                Узнать больше
            </a>
        </div>
    </div>
</section>

@if (!isset($payload))
<section>
    <div class="container" style="padding: 10px 0;">
        Нет доп. параметра payload
    </div>
</section>
@endif

@endsection
