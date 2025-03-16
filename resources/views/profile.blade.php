@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $profile->first_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $profile->last_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob', $profile->dob ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" id="nationality" class="form-control" value="{{ old('nationality', $profile->nationality ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control" required>{{ old('address', $profile->address ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="post_code">Post Code</label>
            <input type="text" name="post_code" id="post_code" class="form-control" value="{{ old('post_code', $profile->post_code ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $profile->city ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="state">State</label>
            <input type="text" name="state" id="state" class="form-control" value="{{ old('state', $profile->state ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $profile->country ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $profile->phone_number ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="university_name">University Name</label>
            <input type="text" name="university_name" id="university_name" class="form-control" value="{{ old('university_name', $profile->university_name ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="start_year">Start Year</label>
            <input type="number" name="start_year" id="start_year" class="form-control" value="{{ old('start_year', $profile->start_year ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="finish_year">Finish Year</label>
            <input type="number" name="finish_year" id="finish_year" class="form-control" value="{{ old('finish_year', $profile->finish_year ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="id_card_front">ID Card Front</label>
            <input type="file" name="id_card_front" id="id_card_front" class="form-control">
        </div>

        <div class="form-group">
            <label for="id_card_back">ID Card Back</label>
            <input type="file" name="id_card_back" id="id_card_back" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
    </form>
</div>
@endsection
