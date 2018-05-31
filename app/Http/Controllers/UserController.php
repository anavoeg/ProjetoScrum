<?php

namespace App\Http\Controllers;

use App\classes\GeradorSenha;
use App\Mail\mailContact;
use App\User;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        /*
         *1.° verificar se o usuario tem sessão ativa.
         * if(session = ativa){
         *
         * }else {
         * return $this->frmLogin();
         * }
         *   */
        if (!Session::has('logado')){
            //se não existe, apresenta formulario de login
            return $this->frmLogin();
        } else {
            return redirect('/'); //usuario logado
        }


    }

    public function frmLogin(){
        //apresenta o formulario de login
        return view('login');
    }
    public function executarLoginUsuarios(Request $request){
        /*
         * 1.º verificar se os dados foram preenchidos corretamente(VALIDATE).
         * 2.° ir a procuro do usuario no banco de dados (ELOQUENT ORM)
         * 3.° verificar se o usuario e senha correspodem a usuario e senha inserido no frm (HASHING)
         * 4.° Se parrar pelas tres etapas anteriores ele cria uma sessão de usuário*/

        //validação
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required|between:6,15'
        ]);

        //verificar se o usuario existe
        $usuario = User::where('email', $request->email)->first();

        //verifica se não existe usuario
        if (count($usuario)==0){
            $erros_bd = ["Este usuário não está cadastrado em nosso sistema."];
            return view('login', compact('erros_bd'));
        }

        //verificação da senha.
        if (!Hash::check($request->password, $usuario->password)){
            $erros_bd = ["Dados incorretos."];
            return view('login', compact('erros_bd'));
        }

        //chegar este ponto o usuario inseriu os dados corretos e pode ser autenticado.
        //abrir uma sessão de usuário.

        //OBS: o mais seguro é guardar a session no banco.
        Session::put('logado', 'sim');
        Session::put('id_usuario', $usuario->id);
        Session::put('usuario', $usuario->first_name);

        //        return redirect('/');//podemos regressar para raiz da nossa aplicação por que na raiz a gente verifica se existe uma sessao, se existe ele redireciona para aplicação
        $sucesso_bd = ["Login efetuado com sucesso!"];
        return view('login', compact('sucesso_bd'));

    }

    public function cadastro(){
        return view('cadastro');
    }

    public function executarCadastroUsuarios(Request $request){
        //executar os procedimentos para criação e verificações de uma nova conta

        //validações
        $this->validate($request, [
            'first_name' => 'bail|required|between:3,30',
            'last_name' => 'bail|required|between:3,30',
            'address' => 'bail|required|min:5|max:70',
            'cpf' => 'bail|required|min:14|max:14|unique:users',
            'password' => 'bail|required|between:6,15',
            'passwordc' => 'bail|required|same:password',
            'email' => 'bail|required|email|unique:users', //ja verifica se usuario existe.
            'check_termos_condicoes' => 'accepted'
        ]);

        //--------------------------------------------------------------------------
        //inserir o novo usuario na base de dados.
        $novo = new User();
        $novo->first_name = $request->first_name;
        $novo->last_name = $request->last_name;
        $novo->address = $request->address;
        $novo->cpf = $request->cpf;
        $novo->password = Hash::make($request->password);
        $novo->email = $request->email;
        $novo->save();
//        return redirect('/');
        $sucesso_bd = ["Cadastrado com sucesso!"];
        return view('cadastro', compact('sucesso_bd'));
    }

    //================================================================
    //RECUPERAR SENHA
    //mostra formulario de recuperação de senha
    //================================================================
    public function recuperar(){
        return view('recuperar');
    }

    public function executarRecuperarSenha(Request $request){
        //validação
        $this->validate($request, [
            'email' => 'required|email'
        ]);
        /*
         * 1.º usuario com e-mail valido.
         * 2.° verificar se o e-mail inserido corresponde ao do usuário.
         * 3.º sistema cria senha aleatória.
         * 3.aº registrar (alterar) a senha do usuario no banco de dados
         * 4.º envia email com a nova senha para o e-mail do usuário.
         * 5.º informa (view) o usuario que foi enviada uma nova senha para o e-mail dele.*/
        $usuario = User::where('email', $request->email)->get();
        if ($usuario->count() == 0){
            $erros_bd = ["Não existe este endereço de e-mail cadastrado em nosso sistema."];
            return view('recuperar', compact('erros_bd'));
        }

        //atualizar a senha do usuario para a nova senha e mandar para ele.
        $usuario = $usuario->first();
        //cria uma nova seria aleatória
        $nova_senha = GeradorSenha::criarCodigo();
        $usuario->password = Hash::make($nova_senha);
        $usuario->save();


        echo "<script type='text/javascript'>
                var r = confirm('Sua nova senha é: $nova_senha');
		        if (r==true)
                  {
                  window.location.href = '/';
                  }
                else
                  {
                  window.location.href = '/recuperar';
                  }
            </script>";
    }


    //================================================================
    //LOGOUT
    //destroi a sessao do usuario e redireciona
    //================================================================
    public function logout(){
        //logout da sessao (destruir a sessao e redirecionar para o form de login)
        //destruir a sessao
        Session::flush();
        return redirect('/');
    }
    public function contactForm(){
        return view('faleconosco');
    }
    public function sendMail(Request $request){
        //enviar email
        Mail::to('servidor@hotmail.com')->send(new mailContact($request));
        return redirect('/');
    }


    public function newsletter(Request $request){
    
        $news = new Newsletter();
        $news->nome = $request->first_name;
        $news->email = $request->email;
        $news->sexo = $request->sexo;
        $news->save();

        return redirect('/');
    }
}
