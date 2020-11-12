<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HooksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function hooks(Request $request)
    {
        $data = [
            "id"=> "project_vg",
            "execute-command"=> "/vagrant/projectxy/deploy.sh",
            "command-working-directory"=> "/vagrant/projectxy/",
            "response-message"=> "Executing deploy script...",
            "trigger-rule"=> [
                "match"=> [
                    "type"=> "payload-hash-sha1",
                    "secret"=> "212255544555",
                    "parameter"=> [
                        "source"=> "header",
                        "name"=> "X-Hub-Signature"
                    ]
            ]
            ]
        ];
        return response()->json($data);
    }

}
