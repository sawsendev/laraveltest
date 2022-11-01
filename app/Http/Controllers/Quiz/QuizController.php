<?php
namespace App\Http\Controllers\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

class QuizController extends Controller {


  public function index(){
//     if (Auth::check()) {
// echo 'correct';
// }
// else {
//   echo 'incorrect';
// }
//dump(Auth::user());exit;
$header='testtttttttttttttttttttt';
$slot='heloo';
   // return   view('quiz.quiz',['header'=>$header,'slot'=>$slot]);
   return   view('quiz.quiz');

  }

}





 ?>
