<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\GigCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GigCategoryController extends Controller
{
    /**
     * Display the gig category list.
     *
     * @return \Illuminate\Http\Response
     */
    public function categorylist()
    {
        $result['data'] = GigCategory::all();
        return view("admin.partials.categorylist",$result);
    }

    /**
     * Add gig category.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcategory(Request $request, $id='')
    {
        if($id>0){
            $arr = GigCategory::where(['id'=>$id])->get();

            $result['id'] = $arr[0]->id;
            $result['icon'] = $arr[0]->icon;
            $result['name'] = $arr[0]->name;
            $result['desc'] = $arr[0]->desc;
            $result['featured'] = $arr[0]->featured;
            $result['is_selected'] = '';
            if($arr[0]->featured == 1){
                $result['is_selected'] = 'checked';
            }
            $result['gig_count'] = $arr[0]->gig_count;
            $result['slug'] = $arr[0]->slug;
        }else{
            $result['id'] = 0;
            $result['icon'] = '';
            $result['name'] = '';
            $result['desc'] = '';
            $result['featured'] = '';
            $result['is_selected'] = '';
            $result['gig_count'] = '';
            $result['slug'] = '';
        }

        return view("admin.partials.addcategory",$result);
    }


    /**
     * insert and update category list
     *
     * @return \Illuminate\Http\Response
     */
    public function process_category( Request $request){


        $request->validate([ 
            'name' => 'required',
            'icon' => 'required',
            'desc' => 'required',
            'slug' => 'required|unique:gig_categories,slug,'.$request->post('id'),
         ]);

        if($request->post('id')>0){
            $model = GigCategory::find($request->post('id'));
            $msg = 'Category Updated Successfully!';
        }else{
            $model = new GigCategory();
            $msg = 'Category Inserted Successfully!';
        }
         $model->name = $request->post('name');
         $model->icon = $request->post('icon');
         $model->desc = $request->post('desc');
         $model->slug = $request->post('slug');
         $model->gig_count = 0;
         $model->featured = 1;
         if($request->post('featured')==null){
            $model->featured = 0;
         }
         $model->save();
         Session::flash('message', $msg);
         return redirect('admin/category/list');
    }

        /**
     * Delete gig category.
     *
     * @return \Illuminate\Http\Response
     */
    public function deletecategory(Request $request,$id)
    {
        $model = GigCategory::find($id);
        $model->delete();
        Session::flash('message', 'Data Deleted Successfully!');
         return redirect('admin/category/list');
    }
}
