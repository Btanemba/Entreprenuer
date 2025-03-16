<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        // Retrieve the profile for the authenticated user
        $profile = Profile::where('user_id', Auth::id())->first();

        // Return the profile edit view with the profile data
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate the input data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'post_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'university_name' => 'required|string|max:255',
            'start_year' => 'required|digits:4',
            'finish_year' => 'required|digits:4',
            'id_card_front' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_card_back' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find or create a profile for the authenticated user
        $profile = Profile::firstOrNew(['user_id' => Auth::id()]);

        // Update the profile data
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->dob = $request->dob;
        $profile->nationality = $request->nationality;
        $profile->address = $request->address;
        $profile->post_code = $request->post_code;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->country = $request->country;
        $profile->phone_number = $request->phone_number;
        $profile->university_name = $request->university_name;
        $profile->start_year = $request->start_year;
        $profile->finish_year = $request->finish_year;

        // Handle file uploads (ID card front and back)
        if ($request->hasFile('id_card_front')) {
            // Delete the previous ID card front file if it exists
            if ($profile->id_card_front && Storage::exists($profile->id_card_front)) {
                Storage::delete($profile->id_card_front);
            }
            $profile->id_card_front = $request->file('id_card_front')->store('id_cards');
        }

        if ($request->hasFile('id_card_back')) {
            // Delete the previous ID card back file if it exists
            if ($profile->id_card_back && Storage::exists($profile->id_card_back)) {
                Storage::delete($profile->id_card_back);
            }
            $profile->id_card_back = $request->file('id_card_back')->store('id_cards');
        }

        // Save the updated profile
        $profile->save();

        // Redirect back to the profile edit page with a success message
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }

    /**
     * Delete the user's profile.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('profileDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
        $profile = $user->profile;

        // Delete the profile's files if they exist
        if ($profile) {
            if ($profile->id_card_front && Storage::exists($profile->id_card_front)) {
                Storage::delete($profile->id_card_front);
            }

            if ($profile->id_card_back && Storage::exists($profile->id_card_back)) {
                Storage::delete($profile->id_card_back);
            }

            // Delete the profile
            $profile->delete();
        }

        // Optionally, delete the user account (uncomment if desired)
        // $user->delete();

        // Log the user out and invalidate the session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the home page
        return redirect('/');
    }
}
