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
        return view('admin_view_2', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_2_post(Request $request)
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
        return redirect()->route('admin_2_view'); 
    }

    public function admin_3_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 5; 
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
        return view('admin_view_3', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_3_post(Request $request)
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
        return redirect()->route('admin_3_view'); 
    }

    public function admin_4_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 3; 
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
        return view('admin_view_4', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_4_post(Request $request)
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
        return redirect()->route('admin_4_view'); 
    }

    public function admin_5_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 11; 
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
        return view('admin_view_5', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_5_post(Request $request)
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
        return redirect()->route('admin_5_view'); 
    }

    public function admin_6_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 14; 
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
        return view('admin_view_6', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_6_post(Request $request)
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
        return redirect()->route('admin_6_view'); 
    }

    public function admin_7_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 12; 
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
        return view('admin_view_7', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_7_post(Request $request)
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
        return redirect()->route('admin_7_view'); 
    }

    public function admin_8_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 8; 
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
        return view('admin_view_8', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_8_post(Request $request)
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
        return redirect()->route('admin_8_view'); 
    }

    public function admin_9_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 6; 
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
        return view('admin_view_9', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_9_post(Request $request)
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
        return redirect()->route('admin_9_view'); 
    }

    public function admin_10_view()
    {
        // Randomly select a rating from image_ratings where image_path is 2 and beurteilt is not 1
        $image_number = 15; 
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
        return view('admin_view_10', ['rating' => $rating, 'id' => $id, 'image_number' => $image_number]);
    }

    public function admin_10_post(Request $request)
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
        return redirect()->route('admin_10_view'); 
    }


}
