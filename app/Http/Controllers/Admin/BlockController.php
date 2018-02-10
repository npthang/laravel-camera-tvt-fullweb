<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Block;
use Carbon\Carbon;
use App\Translate;

class BlockController extends Controller
{
    public function index()
    {
        // $blocks = Block::all();
        $blocks  = Block::leftJoin('translates', 'translates.appID', '=', 'blocks.id')
            ->select(
                'blocks.*', 
                'translates.appID', 
                'translates.appName',
                'translates.trans_id'
            )
            ->get();

        return view('admin.blocks.index', compact('blocks'));
    }

    public function create()
    {
        return view('admin.blocks.create');
    }

    public function store(Request $request)
    {
        $block = new Block();
        $block->title = $request->title;
        $block->content = $request->content;
        $block->language = $request->language;
        $block->type = $request->type;
        $block->link = $request->link;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $block->image = $data['image'] = str_slug(Carbon::now().'_'.$data['title'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/products', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        $block->save();


        // $translate = new Translate();
        // $translate->appID = $block->id;
        // $translate->language = $block->language;
        // $translate->appName = 'Block';
        // $translate->trans_id = $block->id;
        // $translate->save();
        // $request->session()->flash('success','Article was added successful!');

        return redirect()->route('adminBlocks');
    }

    public function edit($id)
    {
        $block = Block::findOrFail($id);
        return view('admin.blocks.edit', compact('block'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $block = Block::findOrFail($id);

        $data = $request->all();
        if ($request->images) {
            $images = [];
            foreach ($request->images as $index => $image) {
                $image_name = str_slug(Carbon::now()).'_'.$data['title'] . '_' . $index . '.'.$image->getClientOriginalExtension();
                $image->move('upload/blocks', $image_name);
                $images = array_merge($images, [$image_name]);
            }
        
            $data['image'] = $images;
        }

        $block->update($data);
        $request->session()->flash('success','Article was updated successful!');

        return redirect()->route('adminBlocks');
    }

    public function destroy(Request $request, $id)
    {
        $block = Block::findOrFail($id);
        // dd($block->id);
        $translate1 = Translate::where('appID', $block->id)->first();
        $translate2 = Translate::where('trans_id', $block->id)->first();
        $translate1->delete();
        $translate2->delete();
        // dd($translate->appID);
        Block::destroy($id);
        $request->session()->flash('success',$block->title.' is deleted successfully!');

        return redirect()->route('adminBlocks');
    }

    public function trans($id)
    {
        $block = Block::findOrFail($id);
        return view('admin.blocks.trans', compact('block'));
    }

    public function translate(Request $request, $id)
    {
        // dd($request->all());

        $trans = new Block();
        $trans->title = $request->title;
        $trans->content = $request->content;
        $trans->language = $request->language;
        $trans->type = $request->type;
        $trans->link = $request->link;
        $data = $request->all();
        $file = $request->file('image');
        if (!empty($file)) {
            $trans->image = $data['image'] = str_slug(Carbon::now().'_'.$data['title'].'.'.$file->getClientOriginalExtension());
            $file->move('upload/blocks', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        $trans->save();

        

        $translate = new Translate();
        $block = Block::findOrFail($id);
        $translate->appID = $block->id;
        $translate->language = $block->language;
        $translate->appName = 'Block';
        $translate->trans_id = $trans->id;
        $translate->save();

        $translate = new Translate();
        // $block = Block::findOrFail($id);
        $translate->appID = $trans->id;
        $translate->language = $block->language;
        $translate->appName = 'Block';
        $translate->trans_id = $block->id;
        $translate->save();

        $request->session()->flash('success','Block was translate!');

        return redirect()->route('adminBlocks');
    }
}
