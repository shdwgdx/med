<?php

namespace App\Http\Controllers;

use App\Models\SurveyFirst;
use App\Models\SurveySecond;
use App\Models\SurveyThird;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function indexOne()
    {
        return view('index-first-one');
    }
    public function indexTwo()
    {
        $user = auth()->user();
        return view('index-first-two', compact('user'));
    }
    public function second()
    {
        return view('index-two');
    }
    public function third()
    {
        return view('index-three');
    }
    public function answersFirst(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'patient' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'diagnosis' => 'required',
            'tel' => 'required',
            'medid' => 'required',
            'codeMKB' => 'required',
            'selectedValues' => 'required',
        ]);
        // Если валидация не пройдена, вернуть ошибку
        if ($validator->fails()) {
            return response()->json(['error' => 'Не все поля заполнены'], 400);
        }

        // Проверка значений в selectedValues
        $selectedValues = $request->input('selectedValues');
        $selectedValuesArray = json_decode($selectedValues, true);
        // Проверка для before4
        if (!isset($selectedValuesArray['before4']) || count($selectedValuesArray['before4']) !== 4) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        if (!isset($selectedValuesArray['after4']) || count($selectedValuesArray['after4']) !== 4) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        // Проверка для before3
        if (!isset($selectedValuesArray['before3']) || count($selectedValuesArray['before3']) !== 6) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        if (!isset($selectedValuesArray['after3']) || count($selectedValuesArray['after3']) !== 6) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        // Проверка для before2
        if (!isset($selectedValuesArray['before2']) || count($selectedValuesArray['before2']) !== 3) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        if (!isset($selectedValuesArray['after2']) || count($selectedValuesArray['after2']) !== 3) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        foreach ($selectedValuesArray as $key => $value) {
            if (is_array($value) && count($value) === 0) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
            if (empty($value)) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
        }
        $uuidLogin = $request->tel;
        $randomPassword = Str::random(10);
        $user = User::create([
            'patient' => $request->input('patient'),
            'gender' => $request->input('gender'),
            'date' => $request->input('date'),
            'diagnosis' => $request->input('diagnosis'),
            'tel' => $request->input('tel'),
            'medid' => $request->input('medid'),
            'codeMKB' => $request->input('codeMKB'),
            'login' => $uuidLogin,
            'password' => Hash::make($randomPassword)
        ]);
        $surveyFirst = SurveyFirst::create([
            'user_id' => $user->id,
            'selectedValues' => json_encode($request->input('selectedValues')),
            // добавьте другие поля, если необходимо
        ]);

        // Если все значения заполнены, продолжите с нужными действиями с данными

        return response()->json([
            'message' => 'Вы успешно прошли опрос',
            'login' => "$uuidLogin или $request->medid",
            'password' => $randomPassword
        ]);
    }
    public function answersFirstOne(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'patient' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'diagnosis' => 'required',
            'tel' => 'required',
            'medid' => 'required',
            'codeMKB' => 'required',
            'email' => 'required| unique:users',
            'selectedValues' => 'required',
        ]);
        // Если валидация не пройдена, вернуть ошибку
        if ($validator->fails()) {
            return response()->json(['error' => 'Не все поля заполнены'], 400);
        }

        // Проверка значений в selectedValues
        $selectedValues = $request->input('selectedValues');
        $selectedValuesArray = json_decode($selectedValues, true);
        // Проверка для before4
        if (!isset($selectedValuesArray['before4']) || count($selectedValuesArray['before4']) !== 4) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }


        // Проверка для before3
        if (!isset($selectedValuesArray['before3']) || count($selectedValuesArray['before3']) !== 6) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }


        // Проверка для before2
        if (!isset($selectedValuesArray['before2']) || count($selectedValuesArray['before2']) !== 3) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        foreach ($selectedValuesArray as $key => $value) {
            if (is_array($value) && count($value) === 0) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
            if (empty($value)) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
        }

        $user = User::create([
            'patient' => $request->input('patient'),
            'gender' => $request->input('gender'),
            'date' => $request->input('date'),
            'diagnosis' => $request->input('diagnosis'),
            'tel' => $request->input('tel'),
            'medid' => $request->input('medid'),
            'codeMKB' => $request->input('codeMKB'),
            'login' => $request->input('tel'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $surveyFirst = SurveyFirst::create([
            'user_id' => $user->id,
            'selectedValues' => json_encode($request->input('selectedValues')),
            // добавьте другие поля, если необходимо
        ]);

        // Если все значения заполнены, продолжите с нужными действиями с данными

        return response()->json([
            'message' => 'Вы успешно прошли опрос',
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
    }
    public function answersFirstTwo(Request $request)
    {

        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'patient' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'diagnosis' => 'required',
            'tel' => 'required',
            'medid' => 'required',
            'codeMKB' => 'required',
            'selectedValuesAfter' => 'required',
        ]);
        // Если валидация не пройдена, вернуть ошибку
        if ($validator->fails()) {
            return response()->json(['error' => 'Не все поля заполнены'], 400);
        }

        // Проверка значений в selectedValues
        $selectedValues = $request->input('selectedValuesAfter');
        $selectedValuesArray = json_decode($selectedValues, true);
        // Проверка для before4

        if (!isset($selectedValuesArray['after4']) || count($selectedValuesArray['after4']) !== 4) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        // Проверка для before3

        if (!isset($selectedValuesArray['after3']) || count($selectedValuesArray['after3']) !== 6) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        // Проверка для before2

        if (!isset($selectedValuesArray['after2']) || count($selectedValuesArray['after2']) !== 3) {
            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        foreach ($selectedValuesArray as $key => $value) {
            if (is_array($value) && count($value) === 0) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
            if (empty($value)) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
        }

        $data = [
            'selectedValuesAfter' => json_encode($request->input('selectedValuesAfter')),
        ];
        $survey = SurveyFirst::where('user_id', auth()->id())->update($data);
        // Если все значения заполнены, продолжите с нужными действиями с данными

        return response()->json([
            'message' => 'Вы успешно прошли опрос',

        ]);
    }
    public function answersSecond(Request $request)
    {


        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'diagnosis' => 'required',
            'address' => 'required',
            'selectedValues' => 'required',
            'hidden_date_completion' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Не все поля заполнены'], 400);
        }
        $data = [
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'diagnosis2' => $request->input('diagnosis'),
            'location' => $request->input('address'),
        ];
        $user = User::where('id', auth()->id())->update($data);
        // Проверка значений в selectedValues
        $selectedValues = $request->input('selectedValues');
        $selectedValuesArray = json_decode($selectedValues, true);


        foreach ($selectedValuesArray as $key => $value) {
            if (is_array($value) && count($value) === 0) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
            if (empty($value)) {
                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
        }
        $surveySecond = SurveySecond::create([
            'user_id' => auth()->id(),
            'date_completion' => $request->input('hidden_date_completion'),
            'selectedValues' => json_encode($request->input('selectedValues')),
            // добавьте другие поля, если необходимо
        ]);
        return response()->json([
            'message' => 'Вы успешно прошли опрос',
        ]);
    }
    public function answersThird(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'selectedValues' => 'required',
            'hidden_date_completion' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Не все поля заполнены'], 400);
        }
        // Проверка значений в selectedValues
        $selectedValues = $request->input('selectedValues');
        $selectedValuesArray = json_decode($selectedValues, true);
        // Проверка для before4
        if (!isset($selectedValuesArray['before4']) || count($selectedValuesArray['before4']) !== 4) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }

        // Проверка для before3
        if (!isset($selectedValuesArray['before3']) || count($selectedValuesArray['before3']) !== 10) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        // Проверка для before5
        if (!isset($selectedValuesArray['before5']) || count($selectedValuesArray['before5']) !== 3) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        // Проверка для before9
        if (!isset($selectedValuesArray['before9']) || count($selectedValuesArray['before9']) !== 9) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        // Проверка для before11
        if (!isset($selectedValuesArray['before11']) || count($selectedValuesArray['before11']) !== 5) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }
        // Проверка для before12
        if (!isset($selectedValuesArray['before12']) || count($selectedValuesArray['before12']) !== 8) {

            return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
        }


        foreach ($selectedValuesArray as $key => $value) {

            if (is_array($value) && count($value) === 0) {

                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
            if (empty($value)) {

                return response()->json(['error' => 'Не на все вопросы дан ответ'], 400);
            }
        }
        $surveySecond = SurveyThird::create([
            'user_id' => auth()->id(),
            'date_completion' => $request->input('hidden_date_completion'),
            'selectedValues' => json_encode($request->input('selectedValues')),
            // добавьте другие поля, если необходимо
        ]);
        return response()->json([
            'message' => 'Вы успешно прошли опрос',
        ]);
    }
}
