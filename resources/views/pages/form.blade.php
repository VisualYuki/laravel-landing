@extends('layouts.default')

@section("title")
Обратная связь
@endsection

@section("content")
<section class="form">
    <div class="container">
        <div class="form__inner">
            <div class="form__content">
                <div class="form__title-box">
                    <div class="form__title">
                        Получить Консультацию
                    </div>
                    <div class="form__text">
                        Комплексный подход к вашему вопросу, своевременная правовую помощь, представление интересов во всех
                        судебных инстанциях.
                    </div>
                </div>
                <div class="form__box">
                    <form>
                        <div class="form__box-inner">
                            <div class="form__box-left">
                                <label>
                                    E-mail
                                    <input type="text">
                                </label>
                                <label>
                                    Контактный телефон
                                    <input type="text">
                                </label>
                                <label>
                                    ФИО
                                    <input type="text">
                                </label>
                                <!--<label>
                                    Тема вопроса
                                    <select>
                                        <option>-------------</option>
                                        <option>-------------</option>
                                        <option>-------------</option>
                                        <option>-------------</option>
                                    </select>
                                </label>-->
                            </div>
                            <div class="form__box-right">
                                <label>
                                    Сообщение
                                    <textarea></textarea>
                                </label>
                                <button class="default-btn" type="submit">Получить консультацию</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
