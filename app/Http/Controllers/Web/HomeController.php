<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /*AWS_ACCESS_KEY_ID=AKIAZJHMQCY3WSPTRGOQ
    AWS_SECRET_ACCESS_KEY=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
    AWS_DEFAULT_REGION=ap-northeast-2
    AWS_SQS_QUEUE_URL=https://sqs.ap-northeast-2.amazonaws.com/638298625591/my-project
    AWS_BUCKET=comoozi1
    AWS_USE_PATH_STYLE_ENDPOINT=false*/
    public function index()
    {
        $image = Storage::disk('s3')->url('내캐릭터.png');//
//        dd('home',$image);
        $viewData = [
          'url' => $image
        ];
        return view('test.image',$viewData);
    }

}
