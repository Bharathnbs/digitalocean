@extends('layouts.site')

@section('content')
    <div>
        <div>Hi Welcome to new learning zone</div>
        <div>Please Enter your Name and Email</div>

        <a href="{{route('about')}}">about</a>

        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection

