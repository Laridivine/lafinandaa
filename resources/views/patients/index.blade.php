@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Liste des patients</h2>
</div>
<div class="pull-right">
@can('parient-create')
<a class="btn btn-success" href="{{ route('patients.create') }}"> Créer un nouveau Patient</a>
@endcan
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nom</th>
<th>Prenom</th>
<th>Adresse</th>
<th>Numéro de téléphone</th>
<th>Personne à prevenir</th>
<th width="280px">Action</th>
</tr>
@foreach ($patients as $patient)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $patient->nom }}</td>
<td>{{ $patient->prenom }}</td>
td>{{ $patient->adresse }}</td>
td>{{ $patient->numero_telephone }}</td>
td>{{ $patient->personne_prevenir }}</td>
<td>
<form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Voir</a>
@can('product-edit')
<a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">modifier</a>
@endcan
@csrf
@method('DELETE')
@can('patient-delete')
<button type="submit" class="btn btn-danger">Supprimer</button>
@endcan
</form>
</td>
</tr>
@endforeach
</table>
{!! $patients->links() !!}
<p class="text-center text-primary"><small></small></p>
@endsection