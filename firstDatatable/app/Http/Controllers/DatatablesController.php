<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        if (request()->ajax()) {

            $users = User::select(['id', 'firstname', 'lastname', 'email', 'created_at', 'updated_at']);
            return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            
            ->editColumn('id', '{{$id}}')
            ->setRowId('id')
            // ->addColumn('action', function ($user) {
            //     return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            // })
            ->setRowClass(function ($user) {
                return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })
            ->setRowData([
                'id' => 'test',
            ])
            ->setRowAttr([
                'color' => 'red',
            ])
            ->editColumn('updated_at', 'column')
            ->rawColumns(['updated_at'])
            // ->setRowClass('{{ $id % == 0 ? "alert-success" : "alert-warning" }}')
            ->make(true);
        }
    
        return view('datatables.index');
        // return Datatables::of(User::query())->make(true);
    }
}