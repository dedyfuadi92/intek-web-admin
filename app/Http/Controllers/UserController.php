<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Http\Request;
// use Datatables;
use Validator;
use File;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $backUrl = 'User';
    public function index()
    {
        // dd(User::all());
        return view('Pages.' . $this->backUrl . '.index', [
            'title' => 'User Management',
            'page' => 'users',
            'users' => User::all(),
            'backUrl' => $this->backUrl,
            'user_level' => UserLevel::all(),
        ]);
    }
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $button = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="view btn btn-outline-secondary btn-sm me-1 mb-2 text-center align-center" style=""><i class="bi bi-eye-fill"></i></a>';
                    $button .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-outline-info btn-sm me-1 mb-2 text-center align-center"><i class="bi bi-pencil"></i></a>';
                    $button .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="delete btn btn-outline-danger btn-sm mb-2 text-center align-center"><i class="bi bi-trash-fill"></i></a>';
                    return $button;
                })
                ->addColumn('foto', function ($row) {
                    $url = asset('images/faces/1.jpg');
                    if ($row->img != null) {
                        $url = asset('images/User/' . $row->img);
                    }
                    return '<img src="' . $url . '" border="0" width="50" style="object-fit:contain;height:50px" class="img-fluid rounded" /> ';
                })
                ->addColumn('level', function ($row) {
                    return $row->user_level->name;
                })
                ->rawColumns(['foto', 'level', 'action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!$validator->passes()) {
            return response()
                ->json([
                    'error' => $validator->messages()
                ]);
        }

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->user_level_id = $request->level;
        $data->save();

        // pindah file gambar
        if ($request->img != null) {
            $imageName = $this->backUrl . '-' . $data->id . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('images/' . $this->backUrl), $imageName);
            $data->img = $imageName;
            $data->update();
        }

        return response()->json([
            'success' => $this->backUrl . ' Created',
        ]);
    }

    public function detail($id)
    {
        $data = User::findOrFail($id);
        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'sometimes|email|max:255|unique:users,email,' . $request->id,
            'username' => 'required',
            // 'password' => 'required',
            'level' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!$validator->passes()) {
            return response()
                ->json([
                    'error' => $validator->messages()
                ]);
        }

        $data = User::findOrFail($request->id);

        if ($request->img != null) {
            // pindah file gambar
            $imageName = $this->backUrl . '-' . $request->id . '-' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('images/' . $this->backUrl), $imageName);
            if (File::exists(public_path('images/' . $this->backUrl . '/' . $data->img))) {
                File::delete(public_path('images/' . $this->backUrl . '/' . $data->img));
            }
            $data->img = $imageName;
        }

        // if (File::exists(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->id)) {
        //     File::deleteDirectory(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->id);
        // }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->user_level_id = $request->level;

        $data->update();

        return response()->json([
            'success' => $this->backUrl . ' Updated',
        ]);
    }

    public function destroy(Request $request)
    {
        $data = User::findOrFail($request->id);

        if ($data->delete()) {
            if (File::exists(public_path('images/' . $this->backUrl . '/' . $data->img))) {
                File::delete(public_path('images/' . $this->backUrl . '/' . $data->img));
            } else {
            }

            // if (File::exists(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->id)) {
            //     File::deleteDirectory(public_path() . '/images/' . $this->backUrl . '/' . 'uploads/' . $data->id);
            // }
            return response()->json(['success' => $this->backUrl . ' deleted successfully'], 200);
        }
        return response()->json(['errors' => $this->backUrl . ' not found'], 404);
    }
}
