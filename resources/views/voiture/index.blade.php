
    <div class="container">
        <h1>Liste des Voitures</h1>
        <a href="{{ route('voitures.create') }}" class="btn btn-primary">Ajouter Voiture</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Marque</th>
                    <th>Couleur</th>
                    <th>Date de Mise en Circulation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
                    <tr>
                        <td>{{ $voiture->matricule }}</td>
                        <td>{{ $voiture->marque }}</td>
                        <td>{{ $voiture->couleur }}</td>
                        <td>{{ $voiture->dateMiseEnCirculation }}</td>
                        <td>
                            <form action="/voitures/{{$voiture->matricule}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

