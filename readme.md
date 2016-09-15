# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
[![CBMDF](https://poser.pugx.org/laravel/framework/license.svg)](https://www.cbm.df.gov.br)
[![composer.lock available](https://poser.pugx.org/phpunit/phpunit/composerlock)](https://packagist.org/packages/phpunit/phpunit)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).


# Minhas Observações do Curso do Vedovelli + Novidades do Laravel 5.3

## Rotas
-Não há mais o arquivo routes.php, todos os arquivos de rota agora possuem uma pasta específica na raiz da aplicação -> /routes.

## Namespace novo
Criação de um novo namespace para a pasta /Louis/Models que centralizará todas as models.

## Convenções vs Configuração

CONVENÇÕES:

"cola na minha que vc passa de ano :)"
ex: para retornar uma view não precisa dizer o caminho completo basta --> return view('users.index');

VIEWS: 

-DICA: nas rotas sempre deve-se devolver uma view, jamais um layout!!

-O Laravel sabe onde encontrar as views.

-O Blade é um sistema completo de templates que evita o uso de php dentro do htmls

-Usar mustaches {{ }} para fazer o Echo de algo
	>>sintect suggar

-Tudo o que está entre os mustaches é transformado em código php na pasta cache a cada requisição

VIEWS "CACHEADAS":

-O Lara compila os templates e faz o cache deles /storage/framework/views. 

-O método COMPACT( '' , '') transforma as strings(o mesmo nome da var) que estiverem dentro dos parênteses em arrays: 
a chave será o nome da var e o valor será o conteúdo que foi escrita anteriormente.

-criar layout--> /resources/views/layouts/app.blade.php

EXTENDER LAYOUT:

-@extends('layouts.app')--> será usado na view que se quer mostrar no template

--> uma view extende um layout

PLACEHOLDER: 
@yield('content')--> será usado no template para mostrar a view

TÍTULOS DIFERENTES POR SECTION
-colocar no layout:
	<title>@yield('page-title')</title>


-

-










