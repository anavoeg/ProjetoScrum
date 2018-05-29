<?php
/**
 * Created by PhpStorm.
 * User: HardSoft
 * Date: 21/05/2018
 * Time: 02:28
 */

namespace App\classes;


class GeradorSenha
{
    public static function criarCodigo(){
        //cria um codigo aleatorio para usuario recuperar a senha  com 10 letras
        $valor = "";
        $caracteres = '@!?#$%abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ@1234567890!?#$%';
        for ($i = 0; $i<10; $i++){
            $index = rand(0, strlen($caracteres));
            $valor .= substr($caracteres, $index, 1);
        }
        return $valor;
    }
}