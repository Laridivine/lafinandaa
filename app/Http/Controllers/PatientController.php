<?php
namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
class ProductController extends Controller
{ 
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
function __construct()
{
$this->middleware('permission:patient-list|patient-create|patient-edit|patient-delete', ['only' => ['index','show']]);
$this->middleware('permission:patientt-create', ['only' => ['create','store']]);
$this->middleware('permission:patient-edit', ['only' => ['edit','update']]);
$this->middleware('permission:patient-delete', ['only' => ['destroy']]);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$patients = Patient::latest()->paginate(5);
return view('patients.index',compact('patients'))
->with('i', (request()->input('page', 1) - 1) * 5);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('patients.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
request()->validate([
        'nom'  => 'required', 
        'prenom'  => 'required',
        'adresse'  => 'required',
        'numero_telephone'  => 'required',
        'personne_prevenir'  => 'required',
        'pathologie_principale'  => 'required',
        'diagnostique_associe'  => 'required',
        'stade_maladie'  => 'required',
        'projet_therapeutique'  => 'required',
        'resume'  => 'required',
]);
Patient::create($request->all());
return redirect()->route('patients.index')
->with('success','Patient created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function show(Patient $patient)
{
return view('patients.show',compact('patient'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function edit(Patient $patient)
{
return view('patients.edit',compact('patient'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Patient $patient)
{
request()->validate([
        'nom'  => 'required', 
        'prenom'  => 'required',
        'adresse'  => 'required',
        'numero_telephone'  => 'required',
        'personne_prevenir'  => 'required',
        'pathologie_principale'  => 'required',
        'diagnostique_associe'  => 'required',
        'stade_maladie'  => 'required',
        'projet_therapeutique'  => 'required',
        'resume'  => 'required',
]);
$patient->update($request->all());
return redirect()->route('patients.index')
->with('success','Patient updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function destroy(Patient $patient)
{
$patient->delete();
return redirect()->route('patients.index')
->with('success','Patient deleted successfully');
}
}