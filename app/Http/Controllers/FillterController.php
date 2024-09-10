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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFillterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fillter $fillter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fillter $fillter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFillterRequest $request, Fillter $fillter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fillter $fillter)
    {
        //
    }
}
