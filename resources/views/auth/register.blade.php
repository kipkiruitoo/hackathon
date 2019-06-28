@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name of the School</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Is the school a boys'
                                school, mixed school or girls' school?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender" id="gender">
                                    <option value="boys">Boys</option>
                                    <option value="girls">Girls</option>
                                    <option value="mixed">Mixed</option>
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="accomodation" class="col-md-4 col-form-label text-md-right">Is the school
                                boarding, day
                                or both?</label>

                            <div class="col-md-6">
                                <select class="form-control" name="accomodation" id="accomodation">
                                    <option value="Both">Both</option>
                                    <option value="Day">Day</option>
                                    <option value="boarding">Boarding</option>
                                </select>

                                @error('accomodation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="county" class="col-md-4 col-form-label text-md-right">County Where the school is
                                located</label>

                            <div class="col-md-6">
                                <select class="form-control " id="county" name="county">
                                    <option value='Baringo'>Baringo</option>
                                    <option value='Bomet'>Bomet</option>
                                    <option value='Bungoma'>Bungoma</option>
                                    <option value='Busia'>Busia</option>
                                    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                                    <option value='Embu'>Embu</option>
                                    <option value='Garissa'>Garissa</option>
                                    <option value='Homa Bay'>Homa Bay</option>
                                    <option value='Isiolo'>Isiolo</option>
                                    <option value='Kajiado'>Kajiado</option>
                                    <option value='Kakamega'>Kakamega</option>
                                    <option value='Kericho'>Kericho</option>
                                    <option value='Kiambu'>Kiambu</option>
                                    <option value='Kilifi'>Kilifi</option>
                                    <option value='Kirinyaga'>Kirinyaga</option>
                                    <option value='Kisii'>Kisii</option>
                                    <option value='Kisumu'>Kisumu</option>
                                    <option value='Kitui'>Kitui</option>
                                    <option value='Kwale'>Kwale</option>
                                    <option value='Laikipia'>Laikipia</option>
                                    <option value='Lamu'>Lamu</option>
                                    <option value='Machakos'>Machakos</option>
                                    <option value='Makueni'>Makueni</option>
                                    <option value='Mandera'>Mandera</option>
                                    <option value='Marsabit'>Marsabit</option>
                                    <option value='Meru'>Meru</option>
                                    <option value='Migori'>Migori</option>
                                    <option value='Mombasa'>Mombasa</option>
                                    <option value='Murang' a'>Murang'a</option>
                                    <option value='Nairobi City'>Nairobi City</option>
                                    <option value='Nakuru'>Nakuru</option>
                                    <option value='Nandi'>Nandi</option>
                                    <option value='Narok'>Narok</option>
                                    <option value='Nyamira'>Nyamira</option>
                                    <option value='Nyandarua'>Nyandarua</option>
                                    <option value='Nyeri'>Nyeri</option>
                                    <option value='Samburu'>Samburu</option>
                                    <option value='Siaya'>Siaya</option>
                                    <option value='Taita-Taveta'>Taita-Taveta</option>
                                    <option value='Tana River'>Tana River</option>
                                    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                                    <option value='Trans Nzoia'>Trans Nzoia</option>
                                    <option value='Turkana'>Turkana</option>
                                    <option value='Uasin Gishu'>Uasin Gishu</option>
                                    <option value='Vihiga'>Vihiga</option>
                                    <option value='West Pokot'>West Pokot</option>
                                    <option value='wajir'>wajir</option>
                                </select>


                                @error('county')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="population" class="col-md-4 col-form-label text-md-right">What is the total
                                number of
                                students in the school?</label>

                            <div class="col-md-6">
                                <input id="population" type="number"
                                    class="form-control @error('name') is-invalid @enderror" name="population"
                                    value="{{ old('population') }}" required autocomplete="name" autofocus>

                                @error('population')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">School's Email
                                Adress</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">School's Telephone
                                Number</label>

                            <div class="col-md-6">
                                <input id="number" type="number"
                                    class="form-control @error('email') is-invalid @enderror" name="number"
                                    value="{{ old('number') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
