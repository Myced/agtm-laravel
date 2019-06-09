<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\ScoStatus;
use App\Models\Sco;
use App\Models\ScoFile;
use Illuminate\Http\Request;

class ScoController extends Controller
{
    public function index()
    {
        $scos = Sco::all();
        $title = "All SCOs";

        return view('admin.scos', compact('title', 'scos'));
    }

    public function add()
    {
        return view('admin.sco_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file'
        ]);

        $sco = new Sco;

        $sco->user_id = auth()->user()->id;
        $sco->title = $request->title;
        $sco->slug = str_slug($request->title);
        $sco->description = $request->description;
        $sco->image = $this->uploadImage($request->image);

        $sco->save();

        session()->flash('success', 'SCO Added Successfully');

        return back();

    }

    private function uploadImage($file)
    {
        $name = time() . $file->getClientOriginalName();

        $destination = Sco::IMAGE_PATH;

        $file->move($destination, $name);

        $url = '/' . $destination . $name;

        return $url;
    }

    public function edit(Sco $sco)
    {
        return view('admin.sco_edit', ['sco' => $sco]);
    }

    public function update(Request $request, Sco $sco)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $sco->title = $request->title;

        if(is_null($sco->slug) || empty($sco->slug))
        {
            $sco->slug = str_slug($request->title);
        }

        $sco->description = $request->description;

        if($request->image != null)
        {
            $this->unlink($sco->image);

            $sco->image = $this->uploadImage($request->image);
        }

        $sco->save();

        session()->flash('success', 'LOI Added Successfully');

        return back();
    }

    public function view(Sco $sco)
    {
        return view('admin.sco_details', compact('sco'));
    }

    public function destroy(Sco $sco)
    {
        $sco->delete();

        session()->flash('success', 'SCO deleted');

        return back();
    }

    public function destroy2(SCO $sco)
    {
        // $sco->delete();

        if($sco->next())
        {
            $url = route('sco', ['sco' => $sco->next()->id]);
        }
        elseif ($sco->previous()) {
            $url = route('sco', ['sco' => $sco->privious()->id]);
        }
        else {
            $url = route('scos');
        }


        $sco->delete();

        session()->flash('success', 'SCO deleted');

        return redirect()->to($url);
    }

    public function storeFile(Request $request, Sco $sco)
    {
        $file = $request->file;
        $name = time() . $file->getClientOriginalName();
        $file->move(Sco::IMAGE_PATH, $name);

        $scoFile = new ScoFile;

        $scoFile->sco_id = $sco->id;
        $scoFile->name = $file->getClientOriginalName();
        $scoFile->type = $file->getClientOriginalExtension();
        $scoFile->size = \App\Functions::human_filesize($file->getSize(), 2);
        $scoFile->location = '/' . Sco::IMAGE_PATH . $name;

        $scoFile->save();

        session()->flash('success', 'Sco file uploaded');

        return back();
    }

    public function deleteFile($id)
    {
        $file =  ScoFile::find($id);

        $this->unlink($file->location);
        $file->delete();

        session()->flash('success', 'SCO File deleted');
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
        $status = ScoStatus::PENDING;
        $scos = Sco::where('status', '=', $status)->get();
        $title = "Pending SCOs";

        return view('admin.scos', compact('title', 'scos'));
    }

    public function available()
    {
        $status = ScoStatus::AVAILABLE;
        $scos = Sco::where('status', '=', $status)->get();
        $title = "Available SCOs";

        return view('admin.scos', compact('title', 'scos'));
    }

    public function makeAvailable(Sco $sco)
    {
        $status = ScoStatus::AVAILABLE;
        return $this->updateStatus($status, $sco);
    }

    public function makeClose(Sco $sco)
    {
        $status = ScoStatus::CLOSED;
        return $this->updateStatus($status, $sco);
    }

    public function makePending(Sco $sco)
    {
        $status = ScoStatus::PENDING;
        return $this->updateStatus($status, $sco);
    }

    private function updateStatus($status, $sco)
    {
        $sco->status = $status;

        $sco->save();

        session()->flash('success', 'Sco Status Updated');

        return back();
    }
}
