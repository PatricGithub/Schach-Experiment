<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageRating;

class SurveyController extends Controller
{
    public function show()
    {
        return view('entry-survey');
    }

    public function exit_survey()
    {
        return view('exit_survey');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function admin_1_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 2; 
        $selectedRow = ImageRating::where('image_path', $image_number)
            ->where('beurteilt', '1')
            ->inRandomOrder()
            ->first();
        
            if ($selectedRow) { // Check if $selectedRow is not null
                $rating = $selectedRow->rating;
                $id = $selectedRow->id;
                // ... pass to view ...
            } else {
                // Handle the case where no row is found
                $rating = null; // Or set a default value
                $id = null; // Or set a default value
                // ... pass to view or handle differently ...
            }

        // Pass the $rating variable to your view
        return view('admin_view', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_1_post(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:image_ratings,id', // Ensure ID exists in the table
            'yes_no' => 'required',
            'scale' => 'required',
        ]);

        $imageRating = ImageRating::find($request->id);

        if ($imageRating) {
            $imageRating->beurteiler1_yesno = $request->input('yes_no');
            $imageRating->beurteiler1_scaled = $request->input('scale');
            $imageRating->beurteilt = 2; 
            $imageRating->save();
        }
        return redirect()->route('admin_1_view'); 
    }

    public function admin_2_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 1; 
        $selectedRow = ImageRating::where('image_path', $image_number)
            ->where('beurteilt', '1')
            ->inRandomOrder()
            ->first();
        
            if ($selectedRow) { // Check if $selectedRow is not null
                $rating = $selectedRow->rating;
                $id = $selectedRow->id;
                // ... pass to view ...
            } else {
                // Handle the case where no row is found
                $rating = null; // Or set a default value
                $id = null; // Or set a default value
                // ... pass to view or handle differently ...
            }

        // Pass the $rating variable to your view
        return view('admin_view', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }
}
