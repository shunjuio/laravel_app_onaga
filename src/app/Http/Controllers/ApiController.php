<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client([
            'base_uri' => 'https://qiita.com/api/v2/',
        ]);

        $keyword = $request->input('keyword');

        $res = $client->request('GET',
            'items?page=1&per_page=20&query=' . $keyword, // 展開されると → 'items?page=1&per_page=20&query=laravel'
//            "items?page=1&per_page=20&query={$keyword}", // 展開されると → 'items?page=1&per_page=20&query=laravel'
            ['headers' => [
                'Accept' => 'application/json',
            ],
            ]);

        $response_body = $res->getBody()->getContents();
//        dd($response_body);
        $decode_res = json_decode($response_body);
//        dd($decode_res);
//        dd($decode_res[0]->url);

        return view('api.index', compact('decode_res', 'keyword'));
    }

    public function create()
    {
//        dd(config('const.qiita_token'));
        return view('api.create');
    }

    public function store(Request $request)
    {
//        $token = 'c7a89216eecc2777a392a544c5e5fcbbcce22d99';

        $data = [
            'title' => $request->title,
            'body' => $request->body,
//            'private' => false,
            'tags' => [
                [
                    "name"=> "Ruby",
                    "versions" => [
                    "0.0.1"
                    ],
                ],
            ],
//            'coediting' => false,
//            'group_url_name' => "dev",
//            'tweet' => false,
//            'organization_url_name' => null,
        ];

        $client = new Client([
                'base_uri' => 'https://qiita.com/api/v2/',
            ]);

        $options = [
            'headers' => [
                'Accept' => 'application/json',
//                'Authorization' => 'Bearer ' . $token,
                'Authorization' => 'Bearer ' . config('const.qiita_token'),
            ],
            'json' => $data,
        ];

        $res = $client->request('POST',
            'items', $options);

        $response_body = json_decode($res->getBody()->getContents());

        $url = $response_body->url;

        return redirect()->route('post.create')->with('successMessage', $url);

    }

    public function commentCreate()
    {
        return view('api.comment');
    }

    public function commentStore(Request $request)
    {
        $data = [
            'body' => $request->body,
        ];

        $client = new Client([
            'base_uri' => 'https://qiita.com/api/v2/',
        ]);

        $options = [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . config('const.qiita_token'),
            ],
            'json' => $data,
        ];

        $res = $client->request('POST', 'items/6cc281bd985ffa5e5904/comments',
        $options);

        $response_body = json_decode($res->getBody()->getContents());

        return redirect()->route('comment.create');

    }


}
