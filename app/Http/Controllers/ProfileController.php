<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $login = $request->input('email');
        $password = $request->input('password');
        if ($login == "admin") {
            $admin = User::where('login', $login)->first();

            if ($admin && $password == $admin->password) {
                // Аутентификация прошла успешно, перенаправляем на дашборд
                Auth::login($admin);
                return redirect()->intended('admin');
            }
        }
        // Ищем пользователя в базе данных
        $profile = User::where('email', $login)
            ->first();

        // Проверяем, существует ли пользователь и верен ли пароль
        if ($profile && Hash::check($password, $profile->password)) {
            // Аутентификация прошла успешно, перенаправляем на дашборд
            Auth::login($profile);
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'login' => 'Неверные учетные данные.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard', compact('users'));
    }
    public function userSurveyFirst($user_id)
    {
        $user = User::find($user_id);
        $survey = $user->firstSurveys()->first();
        if (isset($survey)) {
            // Преобразовать строку JSON в объект PHP
            $selectedValues = json_decode($survey->selectedValues);

            // Преобразовать объект PHP обратно в строку JSON без экранированных кавычек
            $survey->selectedValues = json_encode($selectedValues);

            return view('admin.index', compact('user', 'survey'));
        } else {
            abort(404);
        }
    }
    public function userSurveySecond($user_id)
    {
        $user = User::find($user_id);

        $survey = $user->secondSurveys()->first();
        if (isset($survey)) {
            // Преобразовать строку JSON в объект PHP
            $selectedValues = json_decode($survey->selectedValues);

            // Преобразовать объект PHP обратно в строку JSON без экранированных кавычек
            $survey->selectedValues = json_encode($selectedValues);

            return view('admin.index-two', compact('user', 'survey'));
        } else {
            abort(404);
        }
    }
    public function userSurveyThird($user_id)
    {
        $user = User::find($user_id);
        $survey = $user->thirdSurveys()->first();
        if (isset($survey)) {
            // Преобразовать строку JSON в объект PHP
            $selectedValues = json_decode($survey->selectedValues);

            // Преобразовать объект PHP обратно в строку JSON без экранированных кавычек
            $survey->selectedValues = json_encode($selectedValues);

            return view('admin.index-three', compact('user', 'survey'));
        } else {
            abort(404);
        }
    }
    public function userSurveyFirstOne($user_id)
    {
        $user = User::find($user_id);
        $survey = $user->firstSurveys()->first();
        if (isset($survey)) {
            // Преобразовать строку JSON в объект PHP
            $selectedValues = json_decode($survey->selectedValues);

            // Преобразовать объект PHP обратно в строку JSON без экранированных кавычек
            $survey->selectedValues = json_encode($selectedValues);

            return view('admin.index-first-one', compact('user', 'survey'));
        } else {
            abort(404);
        }
    }
    public function userSurveyFirstTwo($user_id)
    {
        $user = User::find($user_id);
        $survey = $user->firstSurveys()->first();
        if (isset($survey)) {
            // Преобразовать строку JSON в объект PHP
            $selectedValues = json_decode($survey->selectedValuesAfter);

            // Преобразовать объект PHP обратно в строку JSON без экранированных кавычек
            $survey->selectedValuesAfter = json_encode($selectedValues);

            return view('admin.index-first-two', compact('user', 'survey'));
        } else {
            abort(404);
        }
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $users = User::where('patient', 'like', '%' . $searchTerm . '%')->paginate(10);

        return view('dashboard', compact('users', 'searchTerm'));
    }
}
