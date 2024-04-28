<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\ExitUmfrage;

class ExitSurvey extends Component
{
    public $instructionsClear;
    public $confidence;
    public $chessboardSpeed;

    public $pre_game;
    public $in_game;
    public $after_game;
    
    public function render()
    {
        return view('livewire.exit-survey');
    }

    public function submitSurvey(Request $request)
    {
        $validatedCode = $request->cookie('validated_code');
        $participant = Participant::where('unique_id', $validatedCode)->first();
        // Get the condition of the participant
        $condition = $participant->condition;
        // Validate the input
        $this->validate([
            'instructionsClear' => 'required',
            'confidence' => 'required|integer|between:1,5',
            'pre_game' => 'required',
            'in_game' => 'required',
            'after_game' => 'required',
        ]);

        // Save the survey data to the database
        ExitUmfrage::create([
            'instructionsClear' => $this->instructionsClear,
            'confidence' => $this->confidence,
            'pre_game' => $this->pre_game,
            'in_game' => $this->in_game,
            'after_game' => $this->after_game,
            'unique_id' => $validatedCode,
        ]);
        
        return redirect()->to('/thank-you');

        // Redirect or do any other logic after submitting the survey
    }

}
