<?php

namespace App\Services;


interface ServiceInterface {

    public function index();

    public function create();

    public function store( $request);

    public function show(string $id);

    public function edit(string $id);

    public function update( $request, string $id);

    public function delete($id);
    
    public function destroy(string $id);

}