@extends('public.profile.profile-layout')

@section('profile-content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Informations de l'utilisateur -->
                <div class="card mb-4" id="user-show">
                    <div class="card-header">
                        <h4 class="card-title">Informations de l'utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Nom :</strong> {{ $user->name }}</li>
                            <li class="list-group-item"><strong>Nom d'utilisateur :</strong> {{ $user->username }}</li>
                            <li class="list-group-item"><strong>Email :</strong> {{ $user->email }}</li>
                            <li class="list-group-item"><strong>Téléphone :</strong> {{ $user->phone }}</li>
                            <li class="list-group-item"><strong>Date de création du compte :</strong>
                                {{ $user->created_at }}</li>
                            <li class="list-group-item text-center">
                                <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2"
                                    id="btn-edit">Modifier</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-4 d-none" id="user-edit">
                    <div class="card-header">
                        <h4 class="card-title">modification de l'utilisateur</h4>
                    </div>
                    <div class="card-body">
                        <form class="text-start mb-3" action="{{ route('public.profile.update') }}" method="POST">
                            @method('PUT')
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-floating mb-4">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nom" id="name" name="name" value="{{ old('name', $user->name) }}">
                                <label for="name">Nom</label>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    placeholder="Pseudo" id="username" name="username"
                                    value="{{ old('username', $user->username) }}">
                                <label for="username">Pseudo</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="email" id="email" name="email"
                                    value="{{ old('email', $user->email) }}">
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="+xxx xxxxxxxx" id="phone" name="phone"
                                    value="{{ old('phone', $user->phone) }}">
                                <label for="phone">Telephone</label>
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="button" class="btn btn-warning rounded-pill btn-login w-100 mb-2"
                                id="btn-cancel-edit">Annuler</button>
                            <button type="submit"
                                class="btn btn-primary rounded-pill btn-login w-100 mb-2">Enregistrer</button>
                        </form>
                    </div>
                </div>

                <!-- Modifier le mot de passe -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Modifier le mot de passe</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            @method('put')
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

                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">Compte</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?')">Supprimer le
                                compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showCard = document.getElementById('user-show');
            const editCard = document.getElementById('user-edit');
            const btnCancelEdit = document.getElementById('btn-cancel-edit');
            const btnEdit = document.getElementById('btn-edit');

            if (showCard && editCard && btnCancelEdit && btnEdit) {
                btnCancelEdit.addEventListener('click', function() {
                    showCard.classList.remove('d-none');
                    editCard.classList.add('d-none');
                });

                btnEdit.addEventListener('click', function() {
                    showCard.classList.add('d-none');
                    editCard.classList.remove('d-none');
                });
            }
        });
    </script>
@endsection
