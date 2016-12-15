<?php namespace Word\Message\Controllers\FrontControllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Word\Message\Models\Word;
use RainLab\Blog\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Request;
use View;
use Response;
use Illuminate\Support\Facades\Session;  
use \Input;
/*use Illuminate\Routing\Route;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\View\View as Viewview;*/

class MessageController extends Controller
{

  

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::where('published','=','1')->orderBy('published_at','desc')->take(5)->get();
        $views = Post::getPopArticle();
   
        $messages = Word::orderBy('created_at','desc')->paginate(14);
          if (Request::ajax()) {
            return Response::json(View('word.message::messages', array('messages' => $messages))->links());
        }
        return view('word.message::message', array('posts' => $posts,'views' => $views ,'messages' => $messages));

    }


    public function report(){
        $posts = Post::where('published','=','1')->orderBy('published_at','desc')->take(5)->get();
        $views = Post::getPopArticle();
        return view('word.message::report',compact('posts','views'));
    } 

    public function send(){
        $msg = new Word();
        $msg->sender = \Input::get('sender');
        $msg->subject = \Input::get('subject');
        $msg->phone = \Input::get('phone');
        $msg->email = \Input::get('email');
        $msg->content = \Input::get('content');
        $msg->address = \Input::get('address');
        $verycode  = \Input::get('verifyCode');
        $vcode = Session::get('vercode');
        if($verycode != $vcode){
            return \Redirect::back()->with('error', '发言失败');
        }
        $msg->save();

      return redirect('message');
    }

    public function detail($id = NULL){
        
        $posts = Post::where('published','=','1')->orderBy('published_at','desc')->take(5)->get();
        $views = Post::getPopArticle();

        $contents = Word::where('id', '=', $id)->first();

        return view('word.message::detail', compact('posts','views','contents'));
    }

    public function sendCode(){
        require_once base_path('vendor/yunpian-sdk-php/YunpianAutoload.php');
        // $userOperator = new \UserOperator();
        // $username = $userOperator->get();
   
    
        // 模板
        $num = rand(1000,9999);
        $smsOperator = new \SmsOperator();
        $mobil = \Input::get('phone');
       
        $data['mobile'] = $mobil;
        $data['tpl_id'] = "1";
        $data['tpl_value'] =
        urlencode("#code#") . "="
        . urlencode($num) . "&"
        . urlencode("#company#") . "="
        . urlencode("云片网");
        $result = $smsOperator->tpl_send($data);
        Session::put('vercode',$num);
        //return \Response::json(array('status' => 200));
        /*return response()->toJson([
                'message' => 'ok',
            ], 200);*/
        return Response::make("ok",200);
       }

   }