@extends('admin.layout.app')
@section('titile_admin', "Listes des Moderateur")
@section('admin-content')
<div class="pagetitle">
    <h1>Listes des Moderateurs</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item">Moderateur</li>
            <li class="breadcrumb-item active">Listes Moderateurs</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th data-type="date" data-format="YYYY/DD/MM">Ajoue le</th>
                                <th>Pseudo</th>
                                <th>
                                    Nom & Prenom(s)
                                </th>
                                <th>telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unity Pugh</td>
                                <td>9958</td>
                                <td>Curicó</td>
                                <td>2005/02/11</td>
                                <td>37%</td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ajouter un Moderateur</h5>

                    <!-- Vertical Form -->
                    <form method="POST" action="{{route('admin.store.moderateur')}}" class="row g-3">
                        @csrf
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Nom</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Nom" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputEmail4" class="form-label">Pseudo</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                placeholder="Pseudo" id="username" name="username" value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                placeholder="email" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputEmail4" class="form-label">Telephone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                placeholder="+xxx xxxxxxxx" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputNanme4" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Mot de passe" id="loginPassword" name="password">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputEmail4" class="form-label">Confirmer le mot de passe</label>
                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirmer le mot de passe" id="loginPasswordConfirm"
                                name="password_confirmation">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-secondary">Renitialiser</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>
    @endsection