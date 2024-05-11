<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,jpg|max:2048',
        ]);

        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $filePath = $request->document->store('documents', 'public');
            return back()->with('success', 'File uploaded successfully!')->with('filePath', $filePath);
        }

        return back()->with('error', 'Failed to upload the file.');
    }
}
