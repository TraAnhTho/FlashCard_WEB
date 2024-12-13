<?php

namespace App\Http\Controllers;

use App\Models\Bocard;
use App\Models\Card;
use Illuminate\Http\Request;
use App\Models\NguoiDung;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class editController extends Controller
{
    
    public function index($malist)
    {
        $user = Auth::user();
        $bocard = Bocard::findOrFail($malist);  // Lấy bộ thẻ
        $flashcards = Card::where('malist', $malist)->get(); // Lấy tất cả các flashcard của bộ thẻ này
        return view('pages/editcard', compact('user', 'bocard', 'flashcards'));  // Truyền vào view
    }
    // Phương thức để lưu thông tin bộ thẻ và các flashcards
    public function store(Request $request, $malist)
    {
        // Find the Bocard by the provided ID
        $bocard = Bocard::findOrFail($malist);

        // Validate the incoming request
        $request->validate([
            'edit_tittle_card' => 'nullable|string|max:255',
            'edit_mota_card' => 'nullable|string|max:255',
            'flashcards' => 'nullable|array',
        ]);
        
        // Update the Bocard's title and description
        $bocard->update([
            'tenlist' => $request->edit_tittle_card,
            'mota' => $request->edit_mota_card,
        ]);
        $bocard->save();

        // Update each flashcard for the Bocard
        if ($request->has('flashcards')) {
            foreach ($request->flashcards as $cardData) {
                // Check if the card has an ID
                if (isset($cardData['id'])) {
                    $card = Card::find($cardData['id']); // Find the card by ID
    
                    // Only update the flashcard if it exists
                    if ($card) {
                        // Log to see if card is found and being updated
                        Log::info("Updating Card ID: " . $card->macard);
    
                        // Update the flashcard's title and description
                        $card->update([
                            'thuatngu' => $cardData['edit_tn_card'],
                            'dinhnghia' => $cardData['edit_dn_card'],
                        ]);
    
                        Log::info("Card Updated: " . $card->thuatngu); // Log updated value
                    } else {
                        // Log warning if the card is not found
                        Log::warning("Card with ID " . $cardData['id'] . " not found.");
                    }
                } else {
                    // Log warning if the card ID is missing
                    Log::warning("Card ID is missing for this card data.");
                }
            }
        }
    
        // Redirect back with success message
        
      
    return redirect()->route('editcard', ['malist' => $malist])->with('success', 'Flashcard set updated successfully.');
    
    }

    public function deleteFlashcard($macard)
    {
        try {
            // Tìm flashcard theo ID
            $card = Card::findOrFail($macard);
            // Xóa flashcard
            $card->delete();

            return response()->json([
                'success' => true,
                'message' => 'Flashcard deleted successfully.'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting flashcard.'
            ]);
        }
    }

}