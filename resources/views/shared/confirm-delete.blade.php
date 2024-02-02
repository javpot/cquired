{{--
ETAPE 1:
Il faut changer le destroy method dans les controllers a ca

public function destroy(Client $client)
{
$deleteRoute = route('clients.destroy', $client);
$cancelRoute = route('clients.index'); // Change this to the appropriate index route

return view('shared.confirm-delete', compact('deleteRoute', 'cancelRoute', 'client'));
}

ETAPE 2:
Il faut que les .blade.php controllers redirect ici au bouton de delete
--}}

@extends('app')

@section('content')
<h2>Confirm Delete</h2>
<p>Are you sure you want to delete this record?</p>

<form method="POST" action="{{ $deleteRoute }}">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>

<a href="{{ $cancelRoute }}">Cancel</a>
@endsection