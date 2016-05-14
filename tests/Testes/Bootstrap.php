<?php

/**
 * Boostrap dos testes do módulo
 *
 * @name    Bootstrap
 * @package Skel
 * @author  Author <e-mail>
 */
class Bootstrap
{
    /**
     * Executa o boostrap
     *
     * @name   go
     * @access public static
     * @return void
     */
    public static function go()
    {
        require __DIR__ . '/../../index.php';
    }
}

Bootstrap::go();
