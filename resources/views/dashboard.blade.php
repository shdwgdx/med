@extends('layouts.profile')

@section('content-header')
@endsection
@php
    function calculateSurveySum($survey)
    {
        $data = json_decode($survey, true);
        $sum = 0;
    
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $sum += array_sum($value);
            } else {
                $sum += $value;
            }
        }
    
        return $sum;
    }
@endphp
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0 text-dark">Пользователи прошедшие опрос</h1>
        <form action="{{ route('search') }}" method="get" role="search" class="my-3 mr-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Поиск по фамилии">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        @if (!empty($searchTerm))
            <a href="{{ route('dashboard') }}" class="btn btn-secondary ">Сбросить результаты поиска</a>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Фамилия Имя Отчество</th>
                <th>Опрос 1 (до лечения)</th>
                <th>Опрос 1 (после лечения)</th>
                <th>Опрос 2</th>
                <th>Опрос 3</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @php
                    if (isset($user->firstSurveys()->first()->selectedValues)) {
                        $survey1one = json_decode($user->firstSurveys()->first()->selectedValues, true);
                        $sumsurvey1one = calculateSurveySum($survey1one);
                    }
                    if (isset($user->firstSurveys()->first()->selectedValuesAfter)) {
                        $survey1two = json_decode($user->firstSurveys()->first()->selectedValuesAfter, true);
                        $sumsurvey1two = calculateSurveySum($survey1two);
                    }
                    if (isset($user->secondSurveys()->first()->selectedValues)) {
                        $survey2 = json_decode($user->secondSurveys()->first()->selectedValues, true);
                    }
                    if (isset($user->thirdSurveys()->first()->selectedValues)) {
                        $survey3 = json_decode($user->thirdSurveys()->first()->selectedValues, true);
                    }
                @endphp
                @if ($user->login == 'admin')
                    @continue
                @endif
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->patient }}</td>
                    <td>
                        <a href="{{ route('user-survey-first-one', ['user_id' => $user->id]) }}" class="btn btn-primary">
                            <i class="fas fa-poll"></i> До лечения
                        </a> {{ $sumsurvey1one }}
                    </td>
                    @if (isset($user->firstSurveys()->first()->selectedValuesAfter))
                        <td>
                            <a href="{{ route('user-survey-first-two', ['user_id' => $user->id]) }}"
                                class="btn btn-primary">
                                <i class="fas fa-poll"></i> После лечения
                            </a> {{ $sumsurvey1two }}
                        </td>
                    @else
                        <td></td>
                    @endif

                    @if (count($user->secondSurveys))
                        <td>
                            <a href="{{ route('user-survey-second', ['user_id' => $user->id]) }}" class="btn btn-primary">
                                <i class="fas fa-poll"></i> Второй опрос
                            </a> @php
                                $data = json_decode($survey2, true);
                                $sum = 0;
                                
                                foreach ($data as $key => $value) {
                                    if (in_array($key, ['before4', 'after4', 'before5', 'after5', 'before6_cases', 'before6_days', 'after6_cases', 'after6_days', 'before7_cases', 'before7_days', 'after7_cases', 'after7_days', 'before10_1_1', 'after10_1_1', 'before10_1_2', 'after10_1_2', 'before10_2_1', 'after10_2_1', 'before10_2_2', 'after10_2_2', 'before10_3_1', 'after10_3_1', 'before10_3_2', 'after10_3_2', 'before10_3_3', 'after10_3_3', 'before10_3_4', 'after10_3_4', 'before10_4_1', 'after10_4_1', 'before10_4_2', 'after10_4_2', 'before10_4_3', 'after10_4_3', 'before10_4_4', 'after10_4_4'])) {
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
                        </td>
                    @else
                        <td></td>
                    @endif
                    @if (count($user->thirdSurveys))
                        <td>
                            <a href="{{ route('user-survey-third', ['user_id' => $user->id]) }}" class="btn btn-primary">
                                <i class="fas fa-poll"></i> Третий опрос
                            </a>@php
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
                        </td>
                    @else
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        @isset($users)
            {{ $users->links() }}
        @endisset
    </div>
    <div class="d-flex justify-content-center">
        @isset($searchTerm)
            {{ $users->appends(['search' => $searchTerm])->links() }}
        @endisset
    </div>
@endsection
