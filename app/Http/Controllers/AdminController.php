<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {

        $news = Post::where('rubric', 'news')->get();

        return view('admin/news', compact('news'));

    }

    public function upload(Request $request)


    {
        $data = \request()->validate([
            'text' => '',
            'url' => 'nullable',
        ]);

        $file = $data['url'];
        $data['url'] =  Storage::disk('public')->put('/documents', $file);

        File::create($data);
        $files = File::all();

        return view('admin/docs' , compact('files'));
    }

    public function editBus(Request $request)
    {
        $data = $request->validate([
            'text' => '',
        ]);

        $data['rubric'] = 'bus';

        // Найдем запись для редактирования
        $bus = Post::where('rubric', 'bus')->first();

        // Если запись найдена, обновим её
        if ($bus) {
            $bus->update($data);
            return redirect()->back()->with('success', 'Сохранено');
        }

        // Если запись не найдена, выполним необходимые действия
        //  возврат к предыдущей странице с сообщением об ошибке
        return redirect()->back()->with('error', 'Запись не найдена');
    }

    public function bus()
    {
        $bus = Post::where('rubric', 'bus')->first();
        $busText = $bus->text;
        return view('admin.bus' , compact('busText'));
    }

    public function editWater(Request $request)
    {
        $data = $request->validate([
            'text' => '',
        ]);

        $data['rubric'] = 'water';

        // Найдем запись для редактирования
        $water = Post::where('rubric', 'water')->first();

        // Если запись найдена, обновим её
        if ($water) {
            $water->update($data);
            return redirect()->back()->with('success', 'Сохранено');
        }

        // Если запись не найдена, выполним необходимые действия
        //  возврат к предыдущей странице с сообщением об ошибке
        return redirect()->back()->with('error', 'Запись не найдена');
    }

    public function water()
    {
        $water = Post::where('rubric', 'water')->first();
        $waterText = $water->text;
        return view('admin.water' , compact('waterText'));
    }

    public function docs()
    {
        $files = File::all();

        return view('admin/docs' , compact('files'));
    }


}
