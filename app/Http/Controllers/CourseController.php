<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Menampilkan daftar kursus
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Menampilkan form untuk membuat kursus baru
    public function create()
    {
        return view('courses.create');
    }

    // Menyimpan kursus baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index');
    }

    // Menampilkan form untuk mengedit kursus
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    // Mengupdate kursus
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    // Menghapus kursus
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index');
    }
}
