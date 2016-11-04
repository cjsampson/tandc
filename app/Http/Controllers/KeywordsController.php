<?php

namespace App\Http\Controllers;

use App\Models\Keyword;
use App\Services\KeywordService;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Requests\KeywordCreateRequest;
use App\Http\Requests\KeywordUpdateRequest;
use League\Flysystem\Exception;


class KeywordsController extends Controller
{
    /**
     * @var KeywordService
     */
    private $keywordsService;

    /**
     * KeywordsController constructor.
     * @param KeywordService $keywordService
     */
    public function __construct( KeywordService $keywordService )
    {
        $this->keywordsService = $keywordService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( Request $request )
    {
        if ( $request->ajax() ) {
            return $this->keywordsService->dataTables();
        }

        return view('sections.dashboard.keywords.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('sections.dashboard.keywords.create');
    }

    /**
     * @param KeywordCreateRequest $request
     */
    public function store( KeywordCreateRequest $request )
    {
        try {
            $this->keywordsService->create($request->all());
            return redirect()->route('dashboard_keywords_index');
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }
    }

    /**
     * @param Keyword $keyword
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit( $id )
    {
        $keyword = $this->keywordsService->find($id);

        return view('sections.dashboard.keywords.edit', compact('keyword'));
    }

    /**
     * @param $id
     * @param KeywordUpdateRequest $request
     */
    public function update( $id, KeywordUpdateRequest $request )
    {
        try {
            $this->keywordsService->update($request->all(), $id);
            return redirect()->route('dashboard_keywords_index');
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }
    }
}
