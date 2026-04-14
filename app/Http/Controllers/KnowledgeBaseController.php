<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KnowledgeBase;

class KnowledgeBaseController extends Controller
{
    // Publik: Tampil di halaman panduan
    public function indexPublic()
    {
        $knowledges = KnowledgeBase::all();
        return view('panduan', compact('knowledges'));
    }

    public function showPublic(KnowledgeBase $knowledgeBase)
    {
        return view('panduan-detail', compact('knowledgeBase'));
    }

    // Admin: List
    public function index()
    {
        $knowledges = KnowledgeBase::all();
        return view('knowledge_base.index', compact('knowledges'));
    }

    public function create()
    {
        return view('knowledge_base.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        KnowledgeBase::create($validated);
        return redirect()->route('knowledge-base.index')->with('success', 'Pengetahuan berhasil ditambahkan.');
    }

    public function edit(KnowledgeBase $knowledgeBase)
    {
        return view('knowledge_base.edit', compact('knowledgeBase'));
    }

    public function update(Request $request, KnowledgeBase $knowledgeBase)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
        ]);

        $knowledgeBase->update($validated);
        return redirect()->route('knowledge-base.index')->with('success', 'Pengetahuan berhasil diperbarui.');
    }

    public function destroy(KnowledgeBase $knowledgeBase)
    {
        $knowledgeBase->delete();
        return redirect()->route('knowledge-base.index')->with('success', 'Pengetahuan berhasil dihapus.');
    }
}
