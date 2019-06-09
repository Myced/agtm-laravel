<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\LoiStatus;
use App\Models\Loi;
use App\Models\LoiFile;
use Illuminate\Http\Request;

class LoiController extends Controller
{
    public function index()
    {
        $lois = Loi::all();
        $title = "All LOIs";

        return view('admin.lois', compact('lois', 'title'));
    }

    public function add()
    {
        return view('admin.loi_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file'
        ]);

        $loi = new Loi;

        $loi->user_id = auth()->user()->id;
        $loi->title = $request->title;
        $loi->slug = str_slug($request->title);
        $loi->description = $request->description;
        $loi->image = $this->uploadImage($request->image);

        $loi->save();

        session()->flash('success', 'LOI Added Successfully');

        return back();

    }

    private function uploadImage($file)
    {
        $name = time() . $file->getClientOriginalName();

        $destination = Loi::IMAGE_PATH;

        $file->move($destination, $name);

        $url = '/' . $destination . $name;

        return $url;
    }

    public function edit(Loi $loi)
    {
        return view('admin.loi_edit', ['loi' => $loi]);
    }

    public function update(Request $request, Loi $loi)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $loi->title = $request->title;
        $loi->slug = $request->slug;
        $loi->description = $request->description;

        if($request->image != null)
        {
            $this->unlink($loi->image);

            $loi->image = $this->uploadImage($request->image);
        }

        $loi->save();

        session()->flash('success', 'LOI Added Successfully');

        return back();
    }

    public function view(Loi $loi)
    {
        return view('admin.loi_details', compact('loi'));
    }

    public function destroy(Loi $loi)
    {
        $loi->delete();

        session()->flash('success', 'LOI deleted');

        return back();
    }

    public function destroy2(Loi $loi)
    {
        // $loi->delete();

        if($loi->next())
        {
            $url = route('loi', ['loi' => $loi->next()->id]);
        }
        elseif ($loi->previous()) {
            $url = route('loi', ['loi' => $loi->privious()->id]);
        }
        else {
            $url = route('lois');
        }


        $loi->delete();

        session()->flash('success', 'LOI deleted');

        return redirect()->to($url);
    }

    public function storeFile(Request $request, Loi $loi)
    {
        $file = $request->file;
        $name = time() . $file->getClientOriginalName();
        $file->move(Loi::IMAGE_PATH, $name);

        $loiFile = new LoiFile;

        $loiFile->loi_id = $loi->id;
        $loiFile->name = $file->getClientOriginalName();
        $loiFile->type = $file->getClientOriginalExtension();
        $loiFile->size = \App\Functions::human_filesize($file->getSize(), 2);
        $loiFile->location = '/' . Loi::IMAGE_PATH . $name;

        $loiFile->save();

        session()->flash('success', 'Loi file uploaded');

        return back();
    }

    public function deleteFile($id)
    {
        $file =  LoiFile::find($id);

        $this->unlink($file->location);
        $file->delete();

        session()->flash('success', 'LOI File deleted');
        return back();
    }

    private function unlink($path)
    {
        $length = strlen($path);

        $name = substr($path, 1, $length);

        if(file_exists($name))
        {
            unlink($name);
        }
    }

    public function pending()
    {
        $status = LoiStatus::PENDING;
        $lois = Loi::where('status', '=', $status)->get();
        $title = "Pending LOIs";

        return view('admin.lois', compact('title', 'lois'));
    }

    public function available()
    {
        $status = LoiStatus::AVAILABLE;
        $lois = Loi::where('status', '=', $status)->get();
        $title = "Available LOIs";

        return view('admin.lois', compact('title', 'lois'));
    }

    public function makeAvailable(Loi $loi)
    {
        $status = LoiStatus::AVAILABLE;
        return $this->updateStatus($status, $loi);
    }

    public function makeClose(Loi $loi)
    {
        $status = LoiStatus::CLOSED;
        return $this->updateStatus($status, $loi);
    }

    public function makePending(Loi $loi)
    {
        $status = LoiStatus::PENDING;
        return $this->updateStatus($status, $loi);
    }

    private function updateStatus($status, $loi)
    {
        $loi->status = $status;

        $loi->save();

        session()->flash('success', 'Loi Status Updated');

        return back();
    }
}
