<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function createdBy():BelongsTo {
        return $this->belongsTo(User::class,'created_by');
    }


    /**
     * @return JsonResponse
     * @throws Exception
     */
    public static function  getDataTable(){
        $query = self::query();

        return DataTables::of($query)
            ->editColumn('created_by', function ($user) {
                return $user->createdBy->fullName;
            })
            ->filter(function ($query) {
                if (!empty(request('search')['value'])) {
                    $search = request('search')['value'];
                    $query->where(function ($query)  use($search){
                        $query->orWhere('products.name', 'like', '%' . $search . '%');
                    });
                }

                if ( !empty(request('created_by')) ){
                    $query->where('created_by', request('created_by'));
                }
            })
            ->orderColumn('name', function ($query, $order) {
                $query->orderBy('name', $order);
            })
            ->make(true);
    }
}
