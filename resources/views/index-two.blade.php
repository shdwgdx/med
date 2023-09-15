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
        <h1 class="title-two">АНКЕТА ДЛЯ ОЦЕНКИ КАЧЕСТВА ЖИЗНИ И ЗДОРОВЬЯ</h1>
        <div class="main-info">
            <p>Вы прошли курс лечения в санатории «Заполярье». Нас интересует, как изменилось состояние Вашего здоровья
                в течении года после пребывания в санатории. В связи с этим, убедительно просим Вас ответить на вопросы,
                поставленные в опроснике.</p>
        </div>
        <section class="survey-section">
            <p class="text">1. Как повлияло санаторно-курортное лечение на Ваше основное заболевание? (выберите одно
                значение во второй строке)</p>
            <div class="survey custom">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        Оказало существенное влияние на улучшение состояния здоровья
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Улучшило состояние здоровья, но не существенно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Состояние здоровья не изменилось
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Состояние здоровья несколько ухудшилось
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Наступило значительное ухудшение здоровья
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        1
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        2
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        3
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        4
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        5
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">2. Как бы Вы в целом оценили свое здоровье сейчас по сравнению с тем, что было год назад.
                (выберите одну цифру)</p>
            <div class="survey custom">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        Значительно лучше, чем год назад
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Несколько лучше, чем год назад
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Примерно так же, как год назад
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Несколько хуже, чем год назад
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Гораздо хуже, чем год назад
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        1
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        2
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        3
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        4
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        5
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">3. В течении какого времени сохранялся эффект от санаторно-курортного лечения? (выберите
                одну цифру)</p>
            <div class="survey custom">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        До 1 мес.
                    </div>
                    <div class="survey-first-row__item survey__element">
                        До 3-х мес.
                    </div>
                    <div class="survey-first-row__item survey__element">
                        До 6 мес.
                    </div>
                    <div class="survey-first-row__item survey__element">
                        До 9 мес.
                    </div>
                    <div class="survey-first-row__item survey__element">
                        До 12 мес.
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Нет улучшения
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Ухудшение
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        1
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        2
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        3
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        4
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        5
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        6
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        7
                        <input class="hidden-radio" name="before3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">4. Число обострения основного заболевания (выберите цифры в строках)</p>
            <div class="survey">
                <div class="survey-three-row survey__row">
                    <div class="survey__element element-title">
                        До лечения
                    </div>
                    <div class="survey-three-row__item survey__element">
                        Нет
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        1-2
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3-4
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5-6
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        7-8
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        9-10
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        10 и более
                        <input class="hidden-radio" name="before4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey__element element-title">
                        После лечения
                    </div>
                    <div class="survey-three-row__item survey__element">
                        Нет
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        1-2
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3-4
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5-6
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        7-8
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        9-10
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        10 и более
                        <input class="hidden-radio" name="after4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">5. Число обращений в поликлинику (медсанчасть) за медицинской помощью по всем
                заболеваниям (выберите цифры в строках)</p>
            <div class="survey">
                <div class="survey-three-row survey__row">
                    <div class="survey__element element-title">
                        До лечения
                    </div>
                    <div class="survey-three-row__item survey__element">
                        Нет
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        1-2
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3-4
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5-6
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        7-8
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        9-10
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        10 и более
                        <input class="hidden-radio" name="before5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey__element element-title">
                        После лечения
                    </div>
                    <div class="survey-three-row__item survey__element">
                        Нет
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        1-2
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3-4
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5-6
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        7-8
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        9-10
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        10 и более
                        <input class="hidden-radio" name="after5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">6. Число случаев и дней временной нетрудоспособности (больничные листы) по всем
                заболеваниям (впишите соответствующие цифры в строках)</p>
            <div class="survey custom black-border">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        До лечения в санатории
                    </div>
                    <div class="survey-first-row__item survey__element">
                        После лечения в санатории
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        Число случаев

                    </div>
                    <div class="survey__element">
                        Число дней пребывания на <br> б/л

                    </div>
                    <div class="survey__element">
                        Число случаев

                    </div>
                    <div class="survey__element">
                        Число дней пребывания на <br> б/л

                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        <input type="text" name="before6_cases">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="before6_days">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="after6_cases">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="after6_days">

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">7. Госпитализация в медицинские учреждения (указать число случаев госпитализации и дней
                пребывания в стационаре)</p>
            <div class="survey custom black-border">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        До лечения в санатории
                    </div>
                    <div class="survey-first-row__item survey__element">
                        После лечения в санатории
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        Число случаев

                    </div>
                    <div class="survey__element">
                        Число дней пребывания

                    </div>
                    <div class="survey__element">
                        Число случаев

                    </div>
                    <div class="survey__element">
                        Число дней пребывания

                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        <input type="text" name="before7_cases">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="before7_days">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="after7_cases">

                    </div>
                    <div class="survey__element">
                        <input type="text" name="after7_days">

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">8. По Вашему мнению, влияет ли получаемое санаторно-курортное лечение на возможность
                продолжения трудовой деятельности? (выберите цифру)</p>
            <div class="survey custom black-border">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element">
                        Оказывает существенное влияние
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Оказывает частичное влияние
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Не оказывает влияние
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Затрудняюсь ответить
                    </div>
                </div>
                <div class="survey-custom-row survey__row">
                    <div class="survey__element">
                        1
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        2
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        3
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        4
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">9. Сколько раз получали санаторно-курортное лечение за последние 10 лет? (выберите цифру)
            </p>
            <div class="survey custom black-border">
                <div class="survey-shkala-row survey__row">
                    <div class="survey__element">
                        1
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        2
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        3
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        4
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        5
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        6
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        7
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        8
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        9
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey__element">
                        10
                        <input class="hidden-radio" name="before9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        {{-- <div class="end-button">
            <button class="end-button__button">Отправить ответы</button>
        </div> --}}
        <h2>ИНФОРМАЦИОННАЯ КАРТА ПАЦИЕНТА, <br>
            ПРОШЕДШЕГО САНАТОРНО-КУРОРТНОЕ ЛЕЧЕНИЕ В ООО «САНАТОРИЙ «ЗАПОЛЯРЬЕ» </h2>
        <section class="card-patient">
            <form class="card-patient__form" action="{{ route('answers-second') }}" method="POST" id="form">
                @csrf
                <input type="hidden" name="hidden_date_completion" id="hidden_date_completion">
                <div class="card-patient__first-column-sec">
                    <label for="fio">Ф.И.О. пациента*</label>
                    <input class="width-input" type="text" id="fio" name="patient"
                        @auth readonly value="{{ auth()->user()->patient }}" @endauth placeholder="Ф.И.О. пациента">
                    <label for="adress">Место жительства*</label>
                    <input class="width-input" type="text" id="adress" name="address"
                        placeholder="Место жительства">
                    <label for="diagnosis">Диагноз*</label>
                    <input class="width-input" type="text" id="diagnosis" name="diagnosis"
                        placeholder="Диагноз">
                </div>
                <div class="card-patient__second-column-sec">
                    <p>Срок лечения в санатории:</p>
                    <label for="data-c">с</label>
                    <input type="date" name="from" id="data-c">
                    <label for="data-po">по</label>
                    <input type="date" name="to" id="data-po">
                </div>
            </form>
        </section>
        <div class="table">
            <div class="table__main-row">
                <div class="number element">
                    №
                </div>
                <div class="name-element element">
                    Показатели
                </div>
                <div class="element">
                    За год до лечения
                </div>
                <div class="element">
                    В течение года после лечения
                </div>
            </div>
            <div class="table__row">
                <div class="number element">
                    1
                </div>
                <div class="table__rows">
                    <div class="table__row">
                        <div class="element name-element">
                            Кратность посещения лечащего врача (по любому поводу, кроме травм и остр.хирург.патологии);
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_1_1">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_1_1">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            в т.ч. по основному заболеванию
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_1_2">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_1_2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__row">
                <div class="number element">
                    2
                </div>
                <div class="table__rows">
                    <div class="table__row">
                        <div class="element name-element">
                            Число случаев обострения основного заболевания
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_2_1">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_2_1">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            Общее число дней обострения основного заболевания
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_2_2">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_2_2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__row">
                <div class="number element">
                    3
                </div>
                <div class="table__rows">
                    <div class="table__row">
                        <div class="element name-element">
                            Общее число случаев временной нетрудоспособности, всего
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_3_1">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_3_1">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            в т.ч. по основному заболеванию
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_3_2">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_3_2">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            Общее число дней временной нетрудоспособности, всего
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_3_3">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_3_3">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            в т.ч. по основному заболеванию
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_3_4">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_3_4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table__row">
                <div class="number element">
                    4
                </div>
                <div class="table__rows">
                    <div class="table__row">
                        <div class="element name-element">
                            Число случаев госпитализации, всего
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_4_1">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_4_1">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            В т.ч. по основному заболеванию
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_4_2">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_4_2">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            Число дней госпитализации, всего
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_4_3">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_4_3">
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="element name-element">
                            в т.ч. по основному заболеванию
                        </div>
                        <div class="element input-element">
                            <input type="text" name="before10_4_4">
                        </div>
                        <div class="element input-element">
                            <input type="text" name="after10_4_4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        <div class="data-set">
            <span> Дата заполнения</span>
            <input type="date" name="date_completion" id="date_completion"
                onchange="updateHiddenField(this.value)">
        </div>
        <div class="end-button">
            <button class="end-button__button" id="submitButton">Отправить ответы</button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    function updateHiddenField(value) {
        document.getElementById('hidden_date_completion').value = value;
    }
    let selectedValues = {
        before1: "",
        before2: '',
        before3: '',
        before4: '',
        after4: '',
        before5: '',
        after5: '',
        before6_cases: '',
        before6_days: '',
        after6_cases: '',
        after6_days: '',
        before7_cases: '',
        before7_days: '',
        after7_cases: '',
        after7_days: '',
        before8: "",
        before9: "",
        before10_1_1: "",
        after10_1_1: "",
        before10_1_2: "",
        after10_1_2: "",
        before10_2_1: "",
        after10_2_1: "",
        before10_2_2: "",
        after10_2_2: "",
        before10_3_1: "",
        after10_3_1: "",
        before10_3_2: "",
        after10_3_2: "",
        before10_3_3: "",
        after10_3_3: "",
        before10_3_4: "",
        after10_3_4: "",
        before10_4_1: "",
        after10_4_1: "",
        before10_4_2: "",
        after10_4_2: "",
        before10_4_3: "",
        after10_4_3: "",
        before10_4_4: "",
        after10_4_4: "",

    };
    let before1Radios = document.querySelectorAll("input[name='before1']");
    let before2Radios = document.querySelectorAll("input[name='before2']");
    let before3Radios = document.querySelectorAll("input[name='before3']");
    let before4Radios = document.querySelectorAll("input[name='before4']");
    let after4Radios = document.querySelectorAll("input[name='after4']");
    let before5Radios = document.querySelectorAll("input[name='before5']");
    let after5Radios = document.querySelectorAll("input[name='after5']");
    let before8Radios = document.querySelectorAll("input[name='before8']");
    let before9Radios = document.querySelectorAll("input[name='before9']");
    document.getElementById('submitButton').addEventListener('click', function() {

        let form = document.getElementById('form');
        let formData = new FormData(form);
        for (let i = 0; i < before1Radios.length; i++) {
            if (before1Radios[i].checked) {
                selectedValues.before1 = before1Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before2Radios.length; i++) {
            if (before2Radios[i].checked) {
                selectedValues.before2 = before2Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before3Radios.length; i++) {
            if (before3Radios[i].checked) {
                selectedValues.before3 = before3Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before4Radios.length; i++) {
            if (before4Radios[i].checked) {
                selectedValues.before4 = before4Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < after4Radios.length; i++) {
            if (after4Radios[i].checked) {
                selectedValues.after4 = after4Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before5Radios.length; i++) {
            if (before5Radios[i].checked) {
                selectedValues.before5 = before5Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < after5Radios.length; i++) {
            if (after5Radios[i].checked) {
                selectedValues.after5 = after5Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before8Radios.length; i++) {
            if (before8Radios[i].checked) {
                selectedValues.before8 = before8Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        for (let i = 0; i < before9Radios.length; i++) {
            if (before9Radios[i].checked) {
                selectedValues.before9 = before9Radios[i].parentNode.textContent.trim();
                break;
            }
        }
        let inputs = document.querySelectorAll('.survey-custom-row input:not([type="radio"])');

        inputs.forEach((input) => {
            let name = input.getAttribute('name');
            let value = input.value;

            selectedValues[name] = value;
        });


        let tableInputs = document.querySelectorAll('.table .input-element input');

        tableInputs.forEach((input) => {
            let name = input.getAttribute('name');
            let value = input.value;

            selectedValues[name] = value;
        });

        // Добавляем значения selectedValues в FormData
        formData.append('selectedValues', JSON.stringify(selectedValues));

        // Отправляем форму с помощью fetch
        fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                // Обрабатываем результат ответа сервера
                if (response.ok) {
                    // Делаем что-то при успешной отправке формы
                    alert('Отправлено!');
                    // window.location.href = '/survey/3';
                    console.log('Форма успешно отправлена');
                } else {
                    // Делаем что-то при ошибке отправки формы
                    alert('Заполнены не все поля или даны не все ответы на вопросы');
                    console.log('Произошла ошибка при отправке формы');
                }
            })
            .catch(function(error) {
                // Делаем что-то при ошибке отправки запроса

                console.log('Произошла ошибка при отправке запроса:', error);
            });
    });
</script>

</html>
