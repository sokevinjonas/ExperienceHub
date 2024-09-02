@extends('public.profile.profile-layout')

@section('profile-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Informations de l'utilisateur -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Informations de l'utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nom :</strong> {{ $user->name }}</li>
                            <li class="list-group-item"><strong>Nom d'utilisateur :</strong> {{ $user->username }}</li>
                            <li class="list-group-item"><strong>Email :</strong> {{ $user->email }}</li>
                            <li class="list-group-item"><strong>Téléphone :</strong> {{ $user->phone }}</li>
                            <li class="list-group-item"><strong>Rôle :</strong> {{ $user->role->name }}</li>
                            <li class="list-group-item"><strong>Date de création du compte :</strong>
                                {{ $user->created_at }}</li>
                            <li class="list-group-item text-center">
                                <a href="" class="btn btn-primary">Modifier</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Modifier le mot de passe -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifier le mot de passe</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                    id="current_password" name="current_password" required>
                                @error('current_password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmer le mot de
                                    passe</label>
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" name="password_confirmation" required>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
