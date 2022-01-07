<?php

namespace App\Http\Controllers;

use App\Http\Requests\IssueStoreRequest;
use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
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
     * @param \App\Http\Requests\IssueStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(IssueStoreRequest $request)
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
