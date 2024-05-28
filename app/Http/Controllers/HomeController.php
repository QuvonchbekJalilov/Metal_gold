<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all();
        return view('home.index')->with('homes', $home);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create')->with([
            'homes' => Home::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('first_photo'))
        {
            $name = $request->file('first_photo')->getClientOriginalName();
            $path1 = $request->file('first_photo')->storeAs('post_photo', $name);

        }
        if ($request->hasFile('second_photo'))
        {
            $name = $request->file('second_photo')->getClientOriginalName();
            $path2 = $request->file('second_photo')->storeAs('post_photo', $name);

        }
        if ($request->hasFile('third_photo'))
        {
            $name = $request->file('third_photo')->getClientOriginalName();
            $path3 = $request->file('third_photo')->storeAs('post_photo', $name);

        }
        if ($request->hasFile('fourth_photo'))
        {
            $name = $request->file('fourth_photo')->getClientOriginalName();
            $path4 = $request->file('fourth_photo')->storeAs('post_photo', $name);

        }
        if ($request->hasFile('fifth_photo'))
        {
            $name = $request->file('fifth_photo')->getClientOriginalName();
            $path5 = $request->file('fifth_photo')->storeAs('post_photo', $name);

        }

        Home::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'first_photo' => $path1 ?? null,
            'second_photo' => $path2 ?? null,
            'third_photo' => $path3 ?? null,
            'fourth_photo' => $path4 ?? null,
            'fifth_photo' => $path5 ?? null,
        ]);

        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('home.show')->with([
            'home' => $home,
        ]);
    }

    public function edit(Home $home)
    {
        return view('home.edit')->with(['homes' => $home]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        if ($request->hasFile('first_photo'))
        {
            if (isset($category_of_product->first_photo))
            {
                Storage::delete($category_of_product->first_photo);
            }

            $name = $request->file('first_photo')->getClientOriginalName();
            $path = $request->file('first_photo')->storeAs('post_photo', $name);
        }
        if ($request->hasFile('second_photo'))
        {
            if (isset($category_of_product->second_photo))
            {
                Storage::delete($category_of_product->second_photo);
            }

            $name = $request->file('second_photo')->getClientOriginalName();
            $path = $request->file('second_photo')->storeAs('post_photo', $name);
        }
        if ($request->hasFile('third_photo'))
        {
            if (isset($category_of_product->third_photo))
            {
                Storage::delete($category_of_product->third_photo);
            }

            $name = $request->file('third_photo')->getClientOriginalName();
            $path = $request->file('third_photo')->storeAs('post_photo', $name);
        }
        if ($request->hasFile('fourth_photo'))
        {
            if (isset($category_of_product->fourth_photo))
            {
                Storage::delete($category_of_product->fourth_photo);
            }

            $name = $request->file('fourth_photo')->getClientOriginalName();
            $path = $request->file('fourth_photo')->storeAs('post_photo', $name);
        }
        if ($request->hasFile('fifth_photo'))
        {
            if (isset($category_of_product->fifth_photo))
            {
                Storage::delete($category_of_product->fifth_photo);
            }

            $name = $request->file('fifth_photo')->getClientOriginalName();
            $path = $request->file('fifth_photo')->storeAs('post_photo', $name);
        }

        $home->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'short_content_uz' => $request->short_content_uz,
            'short_content_ru' => $request->short_content_ru,
            'short_content_en' => $request->short_content_en,
            'first_photo' => $path ?? $category_of_product->first_photo,
            'second_photo' => $path ?? $category_of_product->second_photo,
            'third_photo' => $path ?? $category_of_product->third_photo,
            'fourth_photo' => $path ?? $category_of_product->fourth_photo,
            'fifth_photo' => $path ?? $category_of_product->fifth_photo,
        ]);

        return redirect()->route('home.index', ['homes' => $home->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        $home->delete();
        if (isset($category_of_product->first_photo))
        {
            Storage::delete($category_of_product->first_photo);
        }
        if (isset($category_of_product->second_photo))
        {
            Storage::delete($category_of_product->second_photo);
        }
        if (isset($category_of_product->third_photo))
        {
            Storage::delete($category_of_product->third_photo);
        }
        if (isset($category_of_product->fourth_photo))
        {
            Storage::delete($category_of_product->fourth_photo);
        }
        if (isset($category_of_product->fifth_photo))
        {
            Storage::delete($category_of_product->fifth_photo);
        }
        return redirect()->route('home.index');
    }
}
