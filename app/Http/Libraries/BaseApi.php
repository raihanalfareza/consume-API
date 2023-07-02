<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $baseUrl;

    // public function __construct()
    // {
    //     $this->baseUrl = "http://127.0.0.1:1515";
    // }

    private function client()
    {
        $this->baseUrl = "http://127.0.0.1:1515";

        return Http::baseUrl($this->baseUrl)
        ->timeout(30); 


    }

    public function index(String $endpoint, Array $data = [])
    {
        
        return $this->client()->get($endpoint, $data);
    }

    public function store(String $endpoint, Array $data = [])
    {
        return $this->client()->post($endpoint, $data);
    }

    public function detail(String $endpoint, String $id, Array $data = [])
    {
        return $this->client()->get("$endpoint/$id", $data);
    }

    public function edit(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function update(String $endpoint, Array $data = [])
    {
        return $this->client()->patch($endpoint, $data);
    }

    public function destroy(String $endpoint, Array $data = [])
    {
        return $this->client()->delete($endpoint, $data);
    }

    public function trash(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function restore(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }


    public function permanent(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
    public function delete(String $endpoint, Array $data = [])
    {
        return $this->client()->delete($endpoint, $data);
    }


}
