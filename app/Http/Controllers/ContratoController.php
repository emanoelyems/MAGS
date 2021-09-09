<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar contratos
        $contratos = Contrato::orderBy('cnpj', 'ASC')->get();
        return view('contrato.index', ['contratos' => $contratos]);
        //dd('teste');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Criar Contratos
        return view('contrato.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Armazenar Contratos
        $message = [
            'cnpj.required' => 'O campo CNPJ é obrigatório!',
            'cnpj.min' => 'O campo CNPJ precisa ter no mínimo :min caracteres!',
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'email.required' => 'O campo Email é obrigatório!', 
            'cell.required' => 'O campo Celular é obrigatório!', 
            'cell.min' => 'O campo Celular precisa ter no mínimo :min caracteres!', 
        ];
 
        $validateData = $request->validate([
            'cnpj'      => 'required|min:14', // o mínimo de 14 caracteres e o campo não pode ser vazio
            'name' =>  'required|min:10', //o campo não pode ser vazio e ter o mínimo de 10 caracteres para criar o nome 
            'email' =>  'required', //o campo não pode ser vazio 
            'cell' =>  'required|min:9', //o campo não pode ser vazio  
         ], $message);

        $contrato = new Contrato;
        $contrato->cnpj =    $request->cnpj;
        $contrato->name =    $request->name;
        $contrato->email =   $request->email;
        $contrato->cell =    $request->cell;
        $contrato->tel =     $request->tel;
        $contrato->address = $request->address;
        $contrato->save();
 
        return redirect()->route('contrato.index')->with('message', 'Contrato criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Visualizar Contratos
        $contrato = Contrato::findOrFail($id);
        // dd($contrato);
        return view('contrato.show', ['contrato' => $contrato]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
