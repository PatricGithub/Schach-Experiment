<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageRating;
use App\Models\Participant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use App\Models\Image;


class ImageRatingController extends Controller
{

    public function showRatingForm($imageNumber, Request $request)
{
    if (!isset($imageNumber)) {
    $imageNumber = 1;
    }
     // Get the validated code from the request cookie
     $validatedCode = $request->cookie('validated_code');

     // Get the participant based on the validated code
     $participant = Participant::where('unique_id', $validatedCode)->first();
 
     // Get the participant's expertise based on the validated code
     $participantExpertise = $participant ? $participant->expertise : null;
 
     // Get all image paths from the 'images' table where 'taken' is 0
     $images = Image::where('taken', 0)->pluck('image_path')->toArray();
 
     if (count($images) > 0) {
         // Shuffle the order of the images
         shuffle($images);
 
         // Take the first image path from the shuffled array
         $imagePath = $images[0];
 
         // Update the 'images' table to set 'taken' to 1 for the selected image path
         Image::where('image_path', $imagePath)->update(['taken' => 1]);
         
         // Here you can return the $imagePath or use it as needed
         return view('rate_images', compact('imagePath', 'participant', 'participantExpertise', 'imageNumber'));
     } else {
         // Handle the case where no images are available
         Image::where('taken', 1)->update(['taken' => 0]);
         return redirect()->route('exit_survey')->with('success', 'All images rated successfully.');
     }
}

public function storeRating(Request $request, $image_number)
{
    $validator = Validator::make($request->all(), [
        'answer' => 'required',
        'figuren' => 'required',
        'image' => 'required',  
        'rating' => 'required',
        'fromwhere' => 'required',
        'zuversichtlich' => 'required',
        'fascination' => 'required',
    ]);
    $validatedCode = $request->cookie('validated_code');
    $participant = Participant::where('unique_id', $validatedCode)->first();
    $expertise = $participant->expertise;
    $participant_id = $participant->unique_id;

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Store the rating and answer in the database
    ImageRating::create([
        'rating' => $request->rating, // Verwenden Sie das versteckte Input-Feld für den Screenshot
        'image_path' => $request->image,
        'rating' => $request->rating,
        'answer' => $request->answer,
        'figuren' => $request->figuren,
        'fromwhere' => $request->fromwhere,
        'zuversichtlich' => $request->zuversichtlich,
        'fascination' => $request->fascination,
        'participant_id' => $participant_id, // Use participant's unique_id if needed
        'expertise' => $expertise, // Get participant's expertise from form
    ]);

    // Calculate the next image number
    $nextImageNumber = $image_number + 1;

    if ($nextImageNumber <= 30) {
        // If there are more images, redirect to the next image
        return redirect()->route('rate.images', ['image_number' => $nextImageNumber])->with('success', 'Rating stored successfully.');
    } else {
        return redirect()->route('einleitung_4')->with('success', 'All images rated successfully.');
    }
}
}
