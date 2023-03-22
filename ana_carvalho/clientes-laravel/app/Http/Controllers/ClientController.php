<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * @return View
     */

    public function index() {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }
        /**
         * @param integer $id
         * @return View
        */
    public function show(int $id) {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

        /**
         * @return View
        */ 
    public function create() {
        return view('clients.create');
    }

        /**
         * @param Request
         * @return Redirect 
        
        */
    public function store(Request $request) {

        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }
    /**
     * @param integer $id
     * @return View
     */
    public function edit(int $id) {
        $client = Client::find($id);

        return view('clients.edit', [
            "client" => $client
        ]);
    }

    /**
     * @param integer $id
     * @param Request @request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request) {
        $dados = $request->except("_token");

        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/clients');

    }

        /**
         * @param integer $id
         * @return RedirectResponse
         */
    public function destroy(int $id) {
            $client = Client::find($id);
            $client->delete();
            return redirect('/clients');
    }
    
}
