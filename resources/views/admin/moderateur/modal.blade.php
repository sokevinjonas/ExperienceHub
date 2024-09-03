<div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1"
    aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $data->id }}">Modifier
                    Modérateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.moderators.update', $data->id) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name{{ $data->id }}">Pseudo</label>
                        <input type="text" name="username" id="username{{ $data->id }}"
                            value="{{ old('username', $data->username) }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name{{ $data->id }}">Nom & Prénom(s)</label>
                        <input type="text" name="name" id="name{{ $data->id }}"
                            value="{{ old('name', $data->name) }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name{{ $data->id }}">Telephone</label>
                        <input type="text" name="phone" id="phone{{ $data->id }}"
                            value="{{ old('phone', $data->phone) }}"
                            class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email{{ $data->id }}">Email</label>
                        <input type="email" name="email" id="email{{ $data->id }}"
                            value="{{ old('email', $data->email) }}"
                            class="form-control" required>
                    </div>

                    <!-- Ajoutez d'autres champs si nécessaire -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer
                            les modifications</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
