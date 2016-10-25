<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\KeywordCreateRequest;
use App\Http\Requests\KeywordUpdateRequest;
use App\Repositories\KeywordRepository;
use App\Validators\KeywordValidator;


class KeywordsController extends Controller
{

    /**
     * @var KeywordRepository
     */
    protected $repository;

    /**
     * @var KeywordValidator
     */
    protected $validator;

    public function __construct(KeywordRepository $repository, KeywordValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $keywords = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $keywords,
            ]);
        }

        return view('keywords.index', compact('keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KeywordCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(KeywordCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $keyword = $this->repository->create($request->all());

            $response = [
                'message' => 'Keyword created.',
                'data'    => $keyword->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keyword = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $keyword,
            ]);
        }

        return view('keywords.show', compact('keyword'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $keyword = $this->repository->find($id);

        return view('keywords.edit', compact('keyword'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  KeywordUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(KeywordUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $keyword = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Keyword updated.',
                'data'    => $keyword->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Keyword deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Keyword deleted.');
    }
}
