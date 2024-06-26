<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tra;
use Illuminate\Support\Facades\Storage;

class travelcontroller extends Controller
{


    public function usertravel()
    {
        
        $travels = Tra::get();
        return view('userblog', compact('travels'));
    }

    public function index()
    {
        $travels = Tra::get();
        return view('addtravel',compact('travels'));
    }
    


    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg',
            'price' => 'required|numeric'
        ]);

        $path = $request->file('photo')->store('image', 'public');

        $travel = new Tra();
        $travel->file_name = $path;
        $travel->price = $request->price;
        $travel->save();

        return redirect()->route('view.travel')->with('status', 'Image Uploaded Successfully.');
    }


  


    public function edit(string $id)
    {
        $travel = Tra::findOrFail($id);
        return view('edittravel', compact('travel'));
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'photo' => 'nullable|mimes:png,jpg,jpeg',
            'price' => 'required|numeric'
        ]);

        $travel = Tra::findOrFail($id);

        // Check if the user wants to delete the current image
        if ($request->has('delete_image') && $request->delete_image == true) {
            // Delete the current image from storage
            $this->deleteImageFromStorage($travel->file_name);
            // Remove the image reference from the database
            $travel->file_name = null;
        }


        // Handle file update if a new file is uploaded
        if ($request->hasFile('photo')) {
            // Delete the current image from storage if exists
            if ($travel->file_name) {
                $this->deleteImageFromStorage($travel->file_name);
            }
            // Store the new image
            $path = $request->file('photo')->store('image', 'public');
            $travel->file_name = $path;
        }

        
        // Update other fields
        $travel->price = $request->price;
        $travel->save();

        return redirect()->route('view.travel')->with('status', 'Tra Item Updated Successfully.');
    }
    private function deleteImageFromStorage($filename)
    {
        Storage::disk('public')->delete($filename);
    }


    


    public function destroy(string $id)
    {
        $travel = Tra::find($id);

        $travel->delete();
        $travel_path = public_path("storage/").$travel->file_name;

        if(file_exists($travel_path))
        {
            @unlink($travel_path);
        }
        return redirect()->route('view.travel')->with('status', 'Image Deleted Successfully.');
    }

    public function purchasetravel(string $id)
    {
        $travel = Tra::find($id);

        $travel->delete();
        $travel_path = public_path("storage/").$travel->file_name;

        if(file_exists($travel_path))
        {
            @unlink($travel_path);
        }
        return redirect()->route('user.travel')->with('status', 'Purchase Image Successfully.');
    }

    
 
}
