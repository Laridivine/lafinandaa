@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Ajouter un patient</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('products.index') }}"> Retour/a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>hoops!</strong> Il ya une erreur dans la valeur entrée.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('patients.store') }}" method="POST">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nom:</strong>
<input type="text" name="name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenom:</strong>
<textarea class="form-control" style="height:150px" name="prenom" placeholder="Prenom"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Adresse:</strong>
<textarea class="form-control" style="height:150px" name="adresse" placeholder="Adresse"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Numero de téléphone:</strong>
<textarea class="form-control" style="height:150px" name="numero_telephone" placeholder="Numero de telephone"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>
<p class="text-center text-primary"><small></small></p>
@endsection