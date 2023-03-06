<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;


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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tool $tool)
    {
        $tool->delete();
        return to_route('tools.index')
            ->with('message', "$tool->name è stato eliminato")
            ->with('type', 'success');
    }

    /**
     * Show trashed elements
     */
    public function trash()
    {
        $tools = Tool::onlyTrashed()->get();
        return view('tools.trash.index', compact('tools'));
    }

    public function restore(int $id)
    {
        $tool = Tool::onlyTrashed()->findOrFail($id);
        $tool->restore();
        return to_route('tools.trash.index');
    }

    public function definitiveDelete(int $id)
    {
        $tool = Tool::onlyTrashed()->findOrFail($id);
        $tool->forceDelete();
        return to_route('tools.trash.index');
    }
}
