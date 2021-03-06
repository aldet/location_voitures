@extends('layouts.app')
@section('content')
  <div class="container">
     <div class="row">
         <div class="col-sm col-md">
         <form method="POST" action="{{route('ajoutContrat')}}">
                 @csrf
                 <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Depart') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="date_depart" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Retour Prevu') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="date_prevu" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date Retour') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="date_retour" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Montant Journalier') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="montant_journalier" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Kilometre  Depart') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="kilometre_depart" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Enregistrer') }}
                        </button>
                    </div>
                </div>

             </form>

         </div>
     </div>

  </div>
    
@endsection