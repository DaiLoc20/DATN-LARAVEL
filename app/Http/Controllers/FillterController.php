<?php

namespace App\Http\Controllers;

use App\Models\Fillter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreFillterRequest;
use App\Http\Requests\UpdateFillterRequest;


class FillterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_fillter_admin(Request $request)
    {
        $sort = $request->query('sort', 'asc');
        $direction = $sort === 'desc' ? 'desc' : 'asc';
        $search = $request->query('search', '');
        $query = Fillter::with(['children', 'parent']);
        $showNew = $request->query('show_new', false);
        $showEdited = $request->query('show_edited', false);

        if ($showNew) { $query->where('created_at', '>=', now()->subDay()); }
        if ($showEdited) { $query ->where('updated_at', '>=', now()->subDay())
                              ->where('created_at', '<', now()->subDay()); }
        if (!empty($search)) {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $query->orderBy('parent_id', $direction);
        $fillters = $query->paginate(8, ['*'], 'fillter_page')->appends(['sort' => $sort, 'search' => $search]);

        return view('/Admin/Fillter/Fillter-List', ['sort' => $sort,'fillters' => $fillters,'search' => $search,'showNew' => $showNew,'showEdited' => $showEdited]);
    }

    public function create_fillter()
    {
        $fillters = Fillter::whereNull('parent_id')->pluck('name', 'id');
        return view('/Admin/Fillter/Fillter-Plus', compact(var_name: 'fillters'));
    }

    public function edit_fillter($id)
    {
        $fillter = Fillter::findOrFail($id);
        $fillters = Fillter::whereNull('parent_id')->get();
        return view('/Admin/Fillter/Fillter-Edit', compact('fillter','fillters'));
    }
    public function store(StoreFillterRequest $request)
    {
        try{
            $fillters = new Fillter();
            $fillters->name = $request->name;
            $fillters->parent_id = $request->parent_id;
            $fillters->save();
            return redirect()->route('admin.fillter.plus')->with(key: 'success-store-fillter', value: 'Thêm  bộ lọc  thành công !');
        }
        catch(\Exception $e){
            Log::error('Lỗi khi thêm bộ lọc : ' . $e->getMessage());
            return redirect()->route('admin.fillter.plus')->with('error-store-fillter', 'Thêm bộ lọc không thành công');
        }
    }

    public function update(UpdateFillterRequest $request, Fillter $fillter)
    {
        try{
            $validated = $request->validated();
            $fillter->update($validated);
            return redirect()->route('admin.fillter.edit',$fillter->id)->with('success-update-fillter', 'Sửa bộ lọc thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi sửa bộ lọc : ' . $e->getMessage());
            return redirect()->route('admin.fillter.edit', $fillter->id)->with('error-update-fillter', 'Sửa bộ lọc không thành công');
        }
    }

    public function destroy(Fillter $fillter)
    {
        try{
            if ($fillter->children()->exists())
            {
                return redirect()->route('admin.fillter.list')->with( 'error1-destroy-fillter', 'Không thể xóa bộ lọc có chứa bộ lọc children.');
            }
            $fillter->delete();
            return redirect()->route('admin.fillter.list',$fillter->id)->with('success-destroy-fillter', 'Xoá bộ lọc thành công !');
        }catch(\Exception $e){
            Log::error('Lỗi khi xoá bộ lọc : ' . $e->getMessage());
            return redirect()->route('admin.fillter.list',$fillter->id)->with('error-destroy-fillter', 'Xoá bộ lọc thành công !');
        }
    }

}
