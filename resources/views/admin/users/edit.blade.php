@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Modifica utente: {{ $user->name }}</h1>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><line x1="20" y1="12" x2="4" y2="12"></line><polyline points="10 18 4 12 10 6"></polyline>
                    </svg> 
                    Tutti gli utenti
                </a>
            </div>
            <div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <form action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                    placeholder="Inserisci il nome utente" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror" rows="10" placeholder="La tua email" required value="{{ old('email', $user->email) }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Indirizzo</label>
                    <input name="address" class="form-control @error('address') is-invalid @enderror" rows="10" placeholder="Il tuo indirizzo" required value="{{ old('address', $user->details->address) }}">
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Città</label>
                    <input name="city" class="form-control @error('city') is-invalid @enderror" rows="10" placeholder="Città" required value="{{ old('city', $user->details->city) }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Provincia</label>
                    <input name="province" class="form-control @error('province') is-invalid @enderror" rows="10" placeholder="Provincia" required value="{{ old('province', $user->details->province) }}">
                    @error('province')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nazione</label>
                    <input name="country" class="form-control @error('country') is-invalid @enderror" rows="10" placeholder="Nazione" required value="{{ old('country', $user->details->country) }}">
                    @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Telefono</label>
                    <input name="phone" class="form-control @error('phone') is-invalid @enderror" rows="10" placeholder="Il tuo numero di telefono" required value="{{ old('phone', $user->details->phone) }}">
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline>
                        </svg>
                        Salva
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
