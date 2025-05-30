<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\FixedLesson;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function create()
    {
        $fixedLessons = FixedLesson::all();
        return view('admin.students.create', compact('fixedLessons'));
    }
    public function store(Request $request)
    {
        // バリデーションルールを定義
        $request->validate([
            'id' => 'required|unique:students,id',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'fixed_lesson_id' => 'required|exists:fixed_lessons,id',
        ]);

        // 生徒の登録処理
        Student::create([
            'id' => $request->id,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'fixed_lesson_id' => $request->fixed_lesson_id,
        ]);

        // 一覧ページにリダイレクトして、セッションメッセージを渡す
        return redirect()->route('admin.students.index')->with('success', '生徒を登録しました。');
    }

    public function index()
    {
        // fixedLesson をあらかじめ読み込むことでパフォーマンス向上
        $students = Student::with('fixedLesson')->get();
        return view('admin.students.index', compact('students'));
    }

    public function edit(Student $student)
    {
        $fixedLessons = FixedLesson::all();
        return view('admin.students.edit', compact('student', 'fixedLessons'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'id' => 'required|unique:students,id,' . $student->id . ',id',
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $student->id = $request->id;
        $student->name = $request->name;

        if ($request->filled('password')) {
            $student->password = Hash::make($request->password);
        }

        $student->save();

        return redirect()->route('admin.students.index')->with('success', '生徒情報を更新しました。');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', '生徒を削除しました。');
    }
}
