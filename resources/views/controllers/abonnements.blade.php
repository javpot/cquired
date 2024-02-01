{{-- VOIR ICI POUR SAVOIR COMMENT UTILISER LES ATTRIBUTS DES MODELS (ex: ligne 22, 23, 24) --}}

@extends('app')

@section('content')
<h1>Abonnements</h1>

<a href="{{ route('abonnements.create') }}">Create New Abonnement</a>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($abonnements as $abonnement)
        <tr>
            <td>{{ $abonnement->titre }}</td>
            <td>{{ $abonnement->prix }}</td>
            <td>{{ $abonnement->description }}</td>
            <td>
                <a href="{{ route('abonnements.show', $abonnement) }}">View</a>
                <a href="{{ route('abonnements.edit', $abonnement) }}">Edit</a>

                <form method="POST" action="{{ route('abonnements.destroy', $abonnement) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection