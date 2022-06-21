<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected string $model;
    
    public function index()
    {
        try{
            $model = $this->model::paginate();

            return response()->json($model,200);

        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }

    
    public function store(Request $request)
    {
        try{
            $model = $this->model::create($request->all());

            return response()->json($model,201);

        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }


    public function show($id)
    {
        try{
            $model = $this->model::find($id);

            return response()->json($model,200);

        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $model = $this->model::find($id);
            $model->update($request->all());

            return response()->json($model,200);

        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }

    public function destroy($id)
    {
        try{
            $model = $this->model::find($id);
            $model->delete();

            return response()->json(['success' => 'the resource has been deleted with success!'],200);

        }catch(\Exception $ex){
            return response()->json(['error' => $ex->getMessage()],404);
        }
    }
}
