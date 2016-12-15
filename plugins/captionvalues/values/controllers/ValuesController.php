<?php namespace Captionvalues\Values\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
//use Word\Message\Models\Word;
//use RainLab\Blog\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Presenter as PresenterContract;
use Request;
use View;
use Response;
//use Illuminate\Support\Facades\Session;  
//use \Input;
 

class ValuesController extends Controller
{

       public function values(){
         return view('captionvalues.values::value');
       }
   }