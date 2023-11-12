<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CommentController extends Controller
{
    public function ajaxcomment(Request $request)
    {
        $data = DB::table('comments')->where('postId',$request->slug)->orderBy('id', 'desc')->take(5)->get();
        return $data;
    }
    public function savecomment(Request $request)
    {
        // return $request->captchaCode;   
        $client = new Client();
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>'6LcXLaElAAAAACxeKqFLoEeO_Kdw0jmji6qJwi2P',
                    'response'=>$request->captchaCode
                 ]
            ]
        );
        // return $response;
        $body = json_decode((string)$response->getBody());
        if($body->success){

            $comment = new Comment();
            $comment->parentId = 1;
            $comment->content = strip_tags(html_entity_decode($request->content));
            $comment->userId = strip_tags(html_entity_decode($request->userId));
            $comment->postId = strip_tags(html_entity_decode($request->postId));
            $comment->save();
            return true;
        }
        return false;
        
        
    }
    public function updatecomment(Request $request)
    {
        $comment = Comment::where('id', $request->id)->first();
        $comment->content = $request->data['content'];
        $comment->save();
        return 'thành công';
    }
    public function deletecomment(Request $request)
    {
        Comment::destroy($request->id);
        return 'thành công';
    }
}
