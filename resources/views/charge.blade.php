@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm col-md">
           <form method="POST" action="{{route('ajoutCharge')}}">
                   @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="type_charge" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                         <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Observation') }}</label>
                         <div class="col-md-6">
                              <textarea class="form-control" name="observation" type="text"></textarea>
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