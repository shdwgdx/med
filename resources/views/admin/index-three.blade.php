<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>TKARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style-two.css') }}">
    <link rel="icon" href="img/favicon.png">
</head>

<body style="background-image: url({{ asset('img/background.jpg') }});">
    <form action="{{ route('answers-third') }}" method="POST" id="form">
        @csrf
        <input type="hidden" name="hidden_date_completion" id="hidden_date_completion">
    </form>
    <div class="container">
        <h1 class="title-three">МОДИФИЦИРОВАННЫЙ ОПРОСНИК MOS SF-36 <br>
            Medical Outcomes Study 36-Item Short Form Health Survey</h1>
        <p class="subtitle">(исследование медицинских результатов. Краткий опрос здоровья) </p>
        <div class="information">
            <p><span>Заполняется через 12 мес. после санаторно-курортного лечения!!!</span></p>
            <p>Вы прошли курс санаторно-курортного лечения в санатории «Заполярье». Нас интересует, как изменилось
                качество Вашей жизни в течении года после полученного лечения. В связи с этим, убедительно просим Вас
                ответить на вопросы, поставленные в опроснике. Откровенность и доброжелательность Ваших ответов помогут
                нам в улучшении качества медицинского обслуживания в нашей здравнице.</p>
            <p>Заранее благодарим Вас за помощь!</p>
        </div>
        <section class="survey-section">
            <p class="text">1. В целом Вы бы оценили состояние Вашего здоровья (выберите одну цифру)</p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Отличное
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Очень хорошее
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Хорошее
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Посредственное
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Плохое
                    </div>
                    <div class="survey-three-row__item survey__element">
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
                <br> (выберите одну цифру)
            </p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Значительно лучше, чем год назад
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Несколько лучше, чем год назад
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Примерно так же, как год назад
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Несколько хуже, чем год назад
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Гораздо хуже, чем год назад
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">3. Следующие вопросы касаются физических нагрузок, с которыми Вы, возможно, сталкиваетесь
                в течение своего обычного дня. Ограничивает ли Вас состояние Вашего здоровья в настоящее время в
                выполнении перечисленных ниже физических нагрузок? Если да, то в какой степени? (выберите одну цифру в
                каждой строке)</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element big-element">
                        Вопросы
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
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        A. Тяжелые физические нагрузки, такие как бег, поднятие тяжестей, занятие силовыми видами
                        спорта.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Б. Умеренные физические нагрузки, такие как передвинуть стол, поработать с пылесосом, собирать
                        грибы или ягоды.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        В. Поднять или нести сумку с продуктами.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Г. Подняться пешком по лестнице на несколько пролетов.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Д. Подняться пешком по лестнице на один пролет.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Е. Наклониться, встать на колени, присесть на корточки.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        Ж. Пройти расстояние более одного километра.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        З. Пройти расстояние в несколько кварталов.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        И. Пройти расстояние в один квартал.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-element">
                        К. Самостоятельно вымыться, одеться.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before3_10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before3_10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before3_10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">4. Бывало ли за последние 4 недели, что Ваше физическое состояние вызывало затруднения в
                Вашей работе или другой обычной повседневной деятельности, вследствие чего: (выберите одну цифру в
                каждой строке)</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element bigger-element">
                        Вопросы
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Да
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Нет
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        А. Пришлось сократить количество времени, затрачиваемое на работу или другие дела.
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
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Б. Выполнили меньше, чем хотели.
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
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        В. Вы были ограничены в выполнении какого-либо определенного вида работ или другой деятельности.
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
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Г. Были трудности при выполнении своей работы или других дел (например, они потребовали
                        дополнительных усилий).
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
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">5. Бывало ли за последние 4 недели, что Ваше эмоциональное состояние вызывало затруднения
                в Вашей работе или другой обычной повседневной деятельности, вследствие чего (выберите одну цифру в
                каждой строке)</p>
            <div class="survey">
                <div class="survey-first-row survey__row">
                    <div class="survey-first-row__item survey__element bigger-element">
                        Вопросы
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Да
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Нет
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        А. Пришлось сократить количество времени, затрачиваемое на работу или другие дела.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before5_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before5_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Б. Выполнили меньше, чем хотели.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before5_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before5_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        В. Выполняли свою работу или другие.
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before5_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before5_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">6. Насколько Ваше физическое и эмоциональное состояние в течение последних 4 недель
                мешало Вам проводить время с семьей, друзьями, соседями или в коллективе? (выберите одну цифру)</p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Совсем не мешало
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Немного
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Умеренно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Сильно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Очень сильно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">7. Насколько сильную физическую боль Вы испытывали за последние 4 недели? (выберите одну
                цифру)</p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Совсем не испытывал(а)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Очень слабую
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Слабую
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Умеренную
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Сильную
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Очень сильную
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">8. В какой степени боль в течение последних 4 недель мешала Вам заниматься Вашей
                нормальной работой (включая работу вне дома или по дому)? (выберите одну цифру)</p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Совсем не мешало
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Немного
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Умеренно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Сильно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Очень сильно
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">9. Следующие вопросы касаются того, как Вы себя чувствовали и каким было Ваше настроение
                в течение последних 4 недель. Пожалуйста, на каждый вопрос дайте один ответ, который наиболее
                соответствует Вашим ощущениям (выберите одну цифру)</p>
            <div class="survey">
                <div class="survey-first-row survey__row small-adaptive">
                    <div class="survey-first-row__item survey__element big-width">
                        Вопросы
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Все время
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
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        А. Вы чувствовали себя бодрым (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Б. Вы сильно нервничали?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        В. Вы чувствовали себя таким (ой) подавленным (ой) что ничто не могло Вас взбодрить?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Г. Вы чувствовали себя спокойным (ой) и умиротворенным (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Д. Вы чувствовали себя полным (ой) сил и энергии?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Е. Вы чувствовали себя упавшим (ой) духом и печальным (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_6" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Ж. Вы чувствовали себя измученным(ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_7" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        З. Вы чувствовали себя счастливым (ой)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        И. Вы чувствовали себя уставшим(ей)?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6
                        <input class="hidden-radio" name="before9_9" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">10. Как часто за последние 4 недели Ваше физическое или эмоциональное состояние мешало
                Вам активно общаться с людьми (навещать друзей, родственников и т. п.)? (выберите одну цифру)</p>
            <div class="survey small-padding">
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Все время
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Большую часть времени
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Иногда
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Редко
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element bigger-element">
                        Ни разу
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before10" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <section class="survey-section">
            <p class="text">11. Как часто за последние 4 недели Ваше физическое или эмоциональное состояние мешало
                Вам активно общаться с людьми (навещать друзей, родственников и т. п.)? (выберите одну цифру)</p>
            <div class="survey">
                <div class="survey-first-row survey__row small-adaptive">
                    <div class="survey-first-row__item survey__element big-width">
                        Вопросы
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Определенно верно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        В основном верно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Не знаю
                    </div>
                    <div class="survey-first-row__item survey__element">
                        В основном неверно
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Определенно неверно
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        а. Мне кажется, что я более склонен к болезням, чем другие
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before11_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before11_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before11_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before11_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before11_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        б. Мое здоровье не хуже, чем у большин¬ства моих знакомых
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before11_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before11_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before11_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before11_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before11_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        в. Я ожидаю, что мое здоровье ухудшится
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before11_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before11_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before11_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before11_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before11_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        г. У меня отличное здоровье
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before11_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before11_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before11_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before11_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before11_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element big-width">
                        Д. Вы чувствовали себя полным (ой) сил и энергии?
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1
                        <input class="hidden-radio" name="before11_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        2
                        <input class="hidden-radio" name="before11_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before11_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before11_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5
                        <input class="hidden-radio" name="before11_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                </div>

            </div>
            {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        </section>
        <div class="method">
            <p>
                Опросник имеет следующие шкалы: <br>
                1. Физическое функционирование (PF). <br>
                2. Ролевое (физическое) функционирование (RР). <br>
                3. Боль (P). <br>
                4. Общее здоровье (GH). <br>
                5. Жизнеспособность (VT). <br>
                6. Социальное функционирование (SF). <br>
                7. Эмоциональное функционирование (RE). <br>
                8. Психологическое здоровье (MH). <br>
                Все шкалы опросника объединены в 2 суммарных измерения – физический компонент здоровья (1 – 4 шкалы) и
                психический (5 – 8 шкалы).
            </p>
            <p class="method-name">
                Методика вычисления основных показателей по опроснику SF-36
            </p>
        </div>
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
                        Показатели
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Вопросы
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Минимальное и максимальное значения
                    </div>
                    <div class="survey-first-row__item survey__element">
                        Возможный диапазон значений
                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        1
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Физическое функционирование (PF).
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3а, 3б, 3в, 3г, 3д, 3е, 3ж, 3з, 3и, 3к.
                        <input class="hidden-radio" name="before12_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        10 – 30
                        <input class="hidden-radio" name="before12_1" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        20
                        <input class="hidden-radio" name="before12_1" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        2
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Ролевое (физическое) функционирование (RР).
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4а, 4б, 4в, 4г.
                        <input class="hidden-radio" name="before12_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        4 – 8
                        <input class="hidden-radio" name="before12_2" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        4
                        <input class="hidden-radio" name="before12_2" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        3
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Боль (P)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        7, 8.
                        <input class="hidden-radio" name="before12_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        2 – 12
                        <input class="hidden-radio" name="before12_3" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        10
                        <input class="hidden-radio" name="before12_3" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        4
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Общее здоровье (GH)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        1, 11а, 11б, 11в, 11г.
                        <input class="hidden-radio" name="before12_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5 – 25
                        <input class="hidden-radio" name="before12_4" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        20
                        <input class="hidden-radio" name="before12_4" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        5
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Жизнеспособность (VT)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        9а, 9д, 9ж, 9и.
                        <input class="hidden-radio" name="before12_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        4 – 24
                        <input class="hidden-radio" name="before12_5" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        20
                        <input class="hidden-radio" name="before12_5" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        6
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Социальное функционирование (SF)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        6, 10.
                        <input class="hidden-radio" name="before12_6" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        2 – 10
                        <input class="hidden-radio" name="before12_6" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        8
                        <input class="hidden-radio" name="before12_6" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        7
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Эмоциональное функционирование (RE)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        5а, 5б, 5в.
                        <input class="hidden-radio" name="before12_7" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        3 - 6
                        <input class="hidden-radio" name="before12_7" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        3
                        <input class="hidden-radio" name="before12_7" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
                <div class="survey-three-row survey__row">
                    <div class="survey-three-row__item survey__element numbers">
                        8
                    </div>
                    <div class="survey-three-row__item survey__element spectre">
                        Психологическое здоровье (MH)
                    </div>
                    <div class="survey-three-row__item survey__element">
                        9б, 9в, 9г, 9е, 9з.
                        <input class="hidden-radio" name="before12_8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                    <div class="survey-three-row__item survey__element">
                        5 – 30
                        <input class="hidden-radio" name="before12_8" type="radio">
                        <span class="radio-overlay"></span>
                    </div>
                    <div class="survey-three-row__item survey__element">
                        25
                        <input class="hidden-radio" name="before12_8" type="radio">
                        <span class="radio-overlay"></span>

                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="survey-section__button"><input class="button" type="submit" value="Отправить"></div> --}}
        <div class="data-set">
            <span> Дата заполнения</span>
            <input type="date" name="date_completion" id="date_completion"
                value="{{ $survey->date_completion }}" onchange="updateHiddenField(this.value)">
        </div>
        <div style="display: flex;
        justify-content: end;
        margin-top: 40px;">
            Итого: @php
                $survey3 = json_decode($survey->selectedValues);
                $data = json_decode($survey3, true);
                $sum = 0;
                
                foreach ($data as $key => $value) {
                    if (in_array($key, ['before12'])) {
                        continue; // Пропуск значений с ключами before12 и before8
                    }
                
                    if (is_array($value)) {
                        $sum += array_sum($value);
                    } elseif (is_numeric($value)) {
                        $sum += $value;
                    }
                }
                
                echo $sum;
                
            @endphp
        </div>

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
            radios: document.querySelectorAll("input[name='before1']")
        },
        {
            name: 'before2',
            radios: document.querySelectorAll("input[name='before2']")
        },
        {
            name: 'before6',
            radios: document.querySelectorAll("input[name='before6']")
        },
        {
            name: 'before7',
            radios: document.querySelectorAll("input[name='before7']")
        },
        {
            name: 'before8',
            radios: document.querySelectorAll("input[name='before8']")
        },
        {
            name: 'before10',
            radios: document.querySelectorAll("input[name='before10']")
        },

    ];
    groups.forEach((group) => {
        const selectedValue = selectedValues[group.name];
        processRadioButtons(group.radios, selectedValue);
    });
    // let selectedValues = {
    //     before3: [],
    //     before4: [],
    //     before5: [],
    //     before9: [],
    //     before11: [],
    //     before12: [],
    // };

    let before3Radios = document.querySelectorAll(
        "input[name='before3_1'], input[name='before3_2'], input[name='before3_3'], input[name='before3_4'], input[name='before3_5'], input[name='before3_6'],input[name='before3_7'],input[name='before3_8'],input[name='before3_9'],input[name='before3_10']"
    );
    let before6Radios = document.querySelectorAll("input[name='before6']");
    let before7Radios = document.querySelectorAll("input[name='before7']");
    let before8Radios = document.querySelectorAll("input[name='before8']");
    let before10Radios = document.querySelectorAll("input[name='before10']");
    let selectedRadios3 = selectedValues.before3; // Значение, с которым нужно сравнить
    for (let i = 1; i <= selectedRadios3.length; i++) {
        let before3_i = document.querySelectorAll(`input[name='before3_${i}']`);

        for (let j = 0; j < before3_i.length; j++) {
            let value = before3_i[j].parentNode.textContent.trim();
            before3_i[j].checked = (value === selectedRadios3[i - 1]);
        }
    }

    function selectRadios(radios, values) {
        for (let i = 1; i <= values.length; i++) {
            let radios_i = document.querySelectorAll(radios[i - 1]);

            for (let j = 0; j < radios_i.length; j++) {
                let value = radios_i[j].parentNode.textContent.trim();
                radios_i[j].checked = (value === values[i - 1]);
            }
        }
    }

    let before4Radios = [
        "input[name='before4_1']",
        "input[name='before4_2']",
        "input[name='before4_3']",
        "input[name='before4_4']"
    ];
    let selectedRadios4 = selectedValues.before4;
    selectRadios(before4Radios, selectedRadios4);

    let before5Radios = [
        "input[name='before5_1']",
        "input[name='before5_2']",
        "input[name='before5_3']"
    ];
    let selectedRadios5 = selectedValues.before5;
    selectRadios(before5Radios, selectedRadios5);
    let before9Radios = [
        "input[name='before9_1']",
        "input[name='before9_2']",
        "input[name='before9_3']",
        "input[name='before9_4']",
        "input[name='before9_5']",
        "input[name='before9_6']",
        "input[name='before9_7']",
        "input[name='before9_8']",
        "input[name='before9_9']"
    ];
    let selectedRadios9 = selectedValues.before9;
    selectRadios(before9Radios, selectedRadios9);
    let before11Radios = [
        "input[name='before11_1']",
        "input[name='before11_2']",
        "input[name='before11_3']",
        "input[name='before11_4']",
        "input[name='before11_5']"
    ];
    let selectedRadios11 = selectedValues.before11;
    selectRadios(before11Radios, selectedRadios11);
    let before12Radios = [
        "input[name='before12_1']",
        "input[name='before12_2']",
        "input[name='before12_3']",
        "input[name='before12_4']",
        "input[name='before12_5']",
        "input[name='before12_6']",
        "input[name='before12_7']",
        "input[name='before12_8']"
    ];
    let selectedRadios12 = selectedValues.before12;
    selectRadios(before12Radios, selectedRadios12);
</script>

</html>
