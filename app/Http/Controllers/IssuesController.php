<?php

namespace App\Http\Controllers;

use App\Http\Requests\IssuesStoreRequest;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $issues = Issue::all();

        return view('issues.index', compact('issues'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('issues.create');
    }

    /**
     * @param \App\Http\Requests\IssuesStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IssuesStoreRequest $request)
    {
        $issue = Issue::create($request->validated());

        return redirect()->route('issues.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Issue $issue)
    {
        $issue = Issue::find($id);

        return view('issues.show', compact('issue'));
    }
}
