<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metedo_autenticacao, $perfil)
    {
        echo $metedo_autenticacao." - ".$perfil."<br/>";

        if($metedo_autenticacao == 'padrao'){
            echo "Verificar o usuário e senha no bd ".$perfil."<br/>";
        }
        
        if($metedo_autenticacao == 'ldap'){
            echo "Verificar o usuário e senha no AD ".$perfil."<br/>";
        }

        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos';
        }else{
            echo 'Carregar o perfil do banco de dados';
        }

        if(false){
            return $next($request);
        }else{
            return Response('Acesso negado! Rota exige autenticação.<br/>');
        }
        
    }
}
