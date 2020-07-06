@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Animal') }}</div>

                <div class="card-body">

                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="{{ route('indexAnimal') }}" class="btn btn-primary">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('storeAnimal') }}">  
                        @csrf

                        <div class="form-group row">
                            <label for="typeID" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">   
                                <select id="typeID" type="number" class="form-control autocomplete @error('typeID') is-invalid @enderror" name="typeID" value="{{ old('typeID') }}" required autocomplete="typeID" autofocus>
                                    @foreach ($animal_types as $animal_type) 
                                        <option value="{{$animal_type->id}}">{{$animal_type->type}}</option>
                                    @endforeach
                                </select>
                                @error('typeID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="breedID" class="col-md-4 col-form-label text-md-right">{{ __('Breed') }}</label>

                            <div class="col-md-6">   
                                <select id="breedID" type="number" class="form-control autocomplete @error('breedID') is-invalid @enderror" name="breedID" value="{{ old('breedID') }}" required autocomplete="breedID" autofocus>
                                    @foreach ($animal_breeds as $animal_breed) 
                                        <option value="{{$animal_breed->id}}">{{$animal_breed->breedName}}</option>
                                    @endforeach
                                </select>
                                @error('breedID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" type="date" class="form-control @error('dateOfBirth') is-invalid @enderror" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required autocomplete="dateOfBirth" autofocus>

                                @error('dateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comments" class="col-md-4 col-form-label text-md-right">{{ __('Comments') }}</label>

                            <div class="col-md-6">
                                <textarea id="comments" type="text" class="form-control @error('comments') is-invalid @enderror" name="comments" value="{{ old('comments') }}" required autocomplete="comments"></textarea>

                                @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
