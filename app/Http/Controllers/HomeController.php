<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        // todo jasrgamer con control K y C comentamos varias partes del codigo

        $documentTypes = [
            [
                'label' => 'CC',
                'name' => 'Cedula de ciudadanía'
            ],
            [
                'label' => 'TI',
                'name' => 'Targeta de identidad'
            ],
            [
                'label' => 'NN',
                'name' => 'Otro'
            ]
        ];

        return view('home', ['documentTypes' => $documentTypes]);
    }

    public function formSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'document' => 'required',
            'documentType' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Aquí puedes agregar la lógica de manejo del formulario
        // Por ejemplo, mostrar un mensaje de éxito
        return redirect()->back()->with('success', '¡Formulario enviado con éxito!');
    }
}