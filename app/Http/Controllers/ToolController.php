<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as IlluminateValidationRule;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tool = new Tool();
        return view('tools.create', compact('tool'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tool $tool)
    {
        return view('tools.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        $request->validate([
            'name' => ['required', 'string', IlluminateValidationRule::unique('tools')->ignore($tool->id)],
            'img_url' => 'nullable|url',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'release_year' => 'nullable|numeric|min:1950|max:3000',
            'latest_version' => 'nullable|numeric|min:1|max:9',
            'download_link' => 'nullable|url',
            'supported_os' => 'nullable|array',
            'vote' => 'nullable|numeric|min:1|max:5'
        ]);
        $data = $request->all();
        $tool->fill($data);
        $tool->save();

        return to_route('tools.show', $tool->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Show trashed elements
     */
    public function trash()
    {
        //
    }

    public function restore()
    {
        //
    }

    public function definitiveDelete()
    {
        //
    }
}
