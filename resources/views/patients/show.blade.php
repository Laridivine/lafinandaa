@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Voir patient</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('patients.index') }}"> Retour</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom:</strong>
{{ $patient->nom }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenom:</strong>
{{ $patient->prenom }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adresse:</strong>
{{ $patient->adresse }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Numero de telephone:</strong>
{{ $patient->numero_telephone }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Personne à prevenir:</strong>
{{ $patient->personne_prevenir }}
</div>
</div>
</div>
@endsection
<p class="text-center text-primary"><small></small></p>
