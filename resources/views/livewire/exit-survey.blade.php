<div>
    <div>
        <h1 class="left">Feedback zu Ihrer Erfahrung</h1>
    
        <form wire:submit.prevent="submitSurvey">
            <div class="form-group left">
                <label for="instructionsClear" class="label">1. Hast du die Anweisungen für dieses Experiment verständlich gefunden?</label> 
                <select class="input" wire:model="instructionsClear" required>
                    <option value="">Bitte wählen...</option>
                    <option value="1">Ja</option>
                    <option value="0">Nein</option> 
                </select>
            </div>
    
            <div class="margin-top-2 left">
                <label for="confidence" class="label">2. Aus deiner eigenen Erfahrung, nutzt du Analogien beim Schachspielen?</label>
                <select class="input" wire:model="confidence" required>
                    <option value="">Bitte wählen...</option>
                    <option value="1">Ja</option>
                    <option value="0">Nein</option> 
                </select>
            </div>
    
            <div class="margin-top-2 left">
                <label for="confidence" class="label">3. Aus deiner eigenen Erfahrung, nutzt du Analogien vor dem Schachspielen?</label>
                <select class="input" wire:model="pre_game" required>
                    <option value="">Bitte wählen...</option>
                    <option value="1">Ja</option>
                    <option value="0">Nein</option> 
                </select>
            </div>

    
            <div class="margin-top-2 left">
                <label for="confidence" class="label">4. Aus deiner eigenen Erfahrung, nutzt du Analogien während dem Schachspielen?</label>
                <select class="input" wire:model="in_game" required>
                    <option value="">Bitte wählen...</option>
                    <option value="1">Ja</option>
                    <option value="0">Nein</option> 
                </select>
            </div>
    
    
            <div class="margin-top-2 left">
                <label for="confidence" class="label">5. Aus deiner eigenen Erfahrung, nutzt du Analogien wenn du nach einer Partie über deine Züge nachgedacht hast?</label>
                <select class="input" wire:model="after_game" required>
                    <option value="">Bitte wählen...</option>
                    <option value="1">Ja</option>
                    <option value="0">Nein</option> 
                </select>
            </div>
            <div class="left">            
                <button type="submit" class="box-weiter margin-top-2 left" style="margin-left: 0px; padding: 15px 45px 15px 45px">Absenden</button>
            </div>
        </form>
    </div>
    
</div>
