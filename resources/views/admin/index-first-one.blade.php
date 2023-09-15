<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>TKARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="img/favicon.png">
</head>

<body style="background-image: url({{ asset('img/background.jpg') }});">
    <div class="container">
        <h1 class="title-one">АНКЕТА ДЛЯ ОЦЕНКИ КАЧЕСТВА ЖИЗНИ И ЗДОРОВЬЯ</h1>
        <p class="subtitle">(заполняется пациентом в начале и в конце СКЛ)</p>
        <section class="card-patient">
            <form class="card-patient__form" method="POST" action="{{ route('answers-first') }}" id="form">
                @csrf

                <div class="card-patient__first-column">
                    <label for="fio">Ф.И.О. пациента*</label>
                    <input class="width-input" type="text" id="fio" placeholder="Ф.И.О. пациента" required
                        value="{{ $user->patient }}" name="patient">
                    <div class="card-patient__row">
                        <div class="card-patient__item">
                            <label for="gender">Пол*</label>
                            <select id="gender" name="gender" required>
                                <option class="placeholder-select" disabled>Пол</option>
                                <option value="man" {{ $user->gender == 'man' ? 'selected' : '' }}>Мужской</option>
                                <option value="woman" {{ $user->gender == 'woman' ? 'selected' : '' }}>Женский</option>
                            </select>
                        </div>
                        <div class="card-patient__item">
                            <label for="date">Дата рождения*</label>
                            <input type="date" name="date" id="date" required value="{{ $user->date }}">
                        </div>
                    </div>
                    <label for="fio">Диагноз*</label>
                    <input class="width-input" type="text" name="diagnosis" id="diagnosis" placeholder="Диагноз"
                        value="{{ $user->diagnosis }}" required>
                </div>
                <div class="card-patient__second-column">
                    <label for="tel">Тел.*</label>
                    <input class="width-input" type="tel" id="tel" placeholder="Тел." name="tel" required
                        value="{{ $user->tel }}">
                    <label for="medid">№ мед.карты пациента получающего сан-кур лечение*</label>
                    <input class="width-input" type="text" id="medid" placeholder="№ мед.карты " name="medid"
                        value="{{ $user->medid }}" required>
                    <label for="codeMKB">Код МКБ*</label>
                    <input class="width-input" type="text" id="codeMKB" placeholder="Код МКБ" name="codeMKB"
                        value="{{ $user->codeMKB }}" required>
                </div>

            </form>
        </section>
        <div class="paper">
            <p class="text">
                Опросник содержит вопросы, касающиеся Ваших взглядов на свое здоровье. Ответьте на каждый вопрос,
                помечая выбранный вами ответ. Если Вы не уверены в том, как ответить на вопрос, пожалуйста, выберите
                такой ответ, который точнее всего отражает Ваше мнение о состоянии здоровья.
            </p>
        </div>
        <section class="survey-section">
            <p class="text">1. В целом как Вы оцениваете состояние своего здоровья:</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        Отличное
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Очень хорошее
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Хорошее
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Посредственное
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Плохое
                    </div>
                </div>
                <div class="survey-second-row survey__row">
                    <div class="survey-second-row__item survey__element">
                        До лечения
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">2. В настоящее время ограничивает ли Вас состояние Вашего здоровья в выполнении
                физических нагрузок (выберите один вариант в каждой строке)</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element numbers">
                        №
                    </div>
                    <div class="survey-first-row__item survey__element spectre">
                        Показатель
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Да, значительно ограничивает
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Да, немного ограничивает
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Нет, совсем не ограничивает
                    </div>
                </div>
                <div class="survey-second-row survey__row">
                    <div class="survey-second-row__item survey__element numbers invisble">

                    </div>
                    <div class="survey-second-row__item survey__element invisble spectre">

                    </div>
                    <div class="survey-second-row__item survey__element">
                        До лечения
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        1
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Легкие физические нагрузки
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before2_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before2_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before2_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        2
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Умеренные физические нагрузки
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before2_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before2_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before2_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        3
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Значительные физические нагрузки
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before2_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before2_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before2_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">3. Ваше самочувствие и настроение в течение последних 2-3 недель до санаторно-курортного
                лечения (или в конце курортной терапии). На каждый вопрос дается один ответ, который наиболее
                соответствует Вашим ощущениям (выберите одну цифру в каждой строке)</p>
            <div class="survey spectre-small">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element numbers">
                        №
                    </div>
                    <div class="survey-first-row__item survey__element spectre">
                        Самочувствие
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Всё время
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Большую часть времени
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Часто
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Иногда
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Редко
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Ни разу
                    </div>
                </div>
                <div class="survey-second-row survey__row mini-text">
                    <div class="survey-second-row__item survey__element numbers invisble">

                    </div>
                    <div class="survey-second-row__item survey__element invisble spectre">

                    </div>
                    <div class="survey-second-row__item survey__element">
                        До лечения
                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        1
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы чувствовали себя бодрым (ой), полным (ой) сил и энергии?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>


                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        2
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы чувствовали себя спокойным (ой) и умиротворенным (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        3
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы сильно нервничали?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        4
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы чувствовали себя подавленным (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        5
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы чувствовали себя измученным (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>



                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        6
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Вы чувствовали себя уставшим (ей)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>


                    </div>

                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section big-spectre">
            <p class="text">4. Ваши ощущения по состоянию Вашего здоровья (выберите одну цифру в каждой строке)</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element numbers">
                        №
                    </div>
                    <div class="survey-first-row__item survey__element spectre">
                        Оценка здоровья
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Определенно <br> верно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        В основном <br>
                        верно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Не знаю
                    </div>
                    <div class="survey-first-row__item survey__element">
                        В основном <br>
                        не верно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Определенно <br>
                        не верно
                    </div>
                </div>
                <div class="survey-second-row survey__row mini-text">
                    <div class="survey-second-row__item survey__element numbers invisble">

                    </div>
                    <div class="survey-second-row__item survey__element invisble spectre">

                    </div>
                    <div class="survey-second-row__item survey__element">
                        До лечения
                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        1
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Мне кажется, что я более склонен (на) к болезням, чем другие
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before4_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before4_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before4_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before4_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before4_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        2
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Мое здоровье не хуже, чем у большинства моих знакомых
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before4_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before4_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before4_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before4_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before4_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        3
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        Я ожидаю, что мое здоровье ухудшится
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before4_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before4_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before4_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before4_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before4_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers background-gray">
                        4
                    </div>
                    <div class="survey-three-row__item survey__element spectre background-gray">
                        У меня отличное здоровье
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before4_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before4_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before4_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before4_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before4_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>

                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <div style="display: flex;
        justify-content: end;
        margin-top: 40px;">
            Итого: @php
                $survey1 = json_decode($survey->selectedValues);
                $data = json_decode($survey1, true);
                
                $sum = 0;
                
                foreach ($data as $key => $value) {
                    if (is_array($value)) {
                        $sum += array_sum($value);
                    } else {
                        $sum += $value;
                    }
                }
                
                echo $sum; // Выведет "38"
                
            @endphp
        </div>
        {{-- <div class="end-button">
            <button class="end-button__button" type="submit" id="submitButton">Отправить ответы</button>
        </div> --}}
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    let jsonString =
        {!! $survey->selectedValues !!}

    let selectedValues = JSON.parse(jsonString);

    const radioButtons = document.querySelectorAll('.survey-custom-row .survey__element');

    function processRadioButtons(radioButtons, selectedValue) {
        // Перебираем все радио-кнопки и проверяем их текстовое содержимое
        for (let i = 0; i < radioButtons.length; i++) {
            const radioLabel = radioButtons[i].parentNode.textContent.trim();

            // Сравниваем текстовое содержимое с нужным значением
            if (radioLabel === selectedValue) {
                // Устанавливаем атрибут "checked" для соответствующей радио-кнопки
                radioButtons[i].setAttribute('checked', 'checked');
                break;
            }
        }
    }
    const groups = [{
            name: 'before1',
            radios: document.querySelectorAll("input[name='before1']"),
        },
        {
            name: 'after1',
            radios: document.querySelectorAll("input[name='after1']"),
        },

    ];
    groups.forEach((group) => {
        const selectedValue = selectedValues[group.name];
        processRadioButtons(group.radios, selectedValue);
    });


    function selectRadios(radios, values) {
        for (let i = 1; i <= values.length; i++) {
            let radios_i = document.querySelectorAll(radios[i - 1]);

            for (let j = 0; j < radios_i.length; j++) {
                let value = radios_i[j].parentNode.textContent.trim();
                radios_i[j].checked = (value === values[i - 1]);
            }
        }
    }
    let before2Radios = [
        "input[name='before2_1']",
        "input[name='before2_2']",
        "input[name='before2_3']"
    ];
    let selectedRadios2 = selectedValues.before2;
    selectRadios(before2Radios, selectedRadios2);

    // let after2Radios = [
    //     "input[name='after2_1']",
    //     "input[name='after2_2']",
    //     "input[name='after2_3']"
    // ];
    // let selectedRadiosAfter2 = selectedValues.after2;
    // selectRadios(after2Radios, selectedRadiosAfter2);

    let before3Radios = [
        "input[name='before3_1']",
        "input[name='before3_2']",
        "input[name='before3_3']",
        "input[name='before3_4']",
        "input[name='before3_5']",
        "input[name='before3_6']"
    ];
    let selectedRadios3 = selectedValues.before3;
    selectRadios(before3Radios, selectedRadios3);

    // let after3Radios = [
    //     "input[name='after3_1']",
    //     "input[name='after3_2']",
    //     "input[name='after3_3']",
    //     "input[name='after3_4']",
    //     "input[name='after3_5']",
    //     "input[name='after3_6']"
    // ];
    // let selectedRadiosAfter3 = selectedValues.after3;
    // selectRadios(after3Radios, selectedRadiosAfter3);

    let before4Radios = [
        "input[name='before4_1']",
        "input[name='before4_2']",
        "input[name='before4_3']",
        "input[name='before4_4']"
    ];
    let selectedRadios4 = selectedValues.before4;
    selectRadios(before4Radios, selectedRadios4);

    // let after4Radios = [
    //     "input[name='after4_1']",
    //     "input[name='after4_2']",
    //     "input[name='after4_3']",
    //     "input[name='after4_4']"
    // ];
    // let selectedRadiosAfter4 = selectedValues.after4;
    // selectRadios(after4Radios, selectedRadiosAfter4);
</script>

</html>
