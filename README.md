<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Passo a passo para criação do projeto

1 - Primeiro passo (preparação do ambiente)
- Foi feita a instalação do php na versão 7.4 junto com a versão do laravel na versão 5.8 via composer na versão 2.4. Na hora da instação dos pacotes a versão do laravel 5.8 apresentou problemas de compatibiliadde, sendo necessario fazer a atualização para versão 7 do laravel. Sendo assim concluindo o primeiro passo
<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/Erros.png" height="400" alt="Error">
</p>

2 - Segundo Passo ( Criando o banco de dados)
- Foi feita a criação do banco de dados, para a realização do cadastro de usuarios na tela de login 
<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/php%20artisan.png" alt="php_artisan">
</p>
 
3 - Terceiro Passo ( Criando interface)
- Nessa etapa foi feita a criação das rotas, controllers e views
<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/Rotas.png" alt="Rotas">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/controller.png" alt="Controller" height="400">
</p>

4 - Quarto passo (Cadastrar)
- Aqui foi realizado a criação do codigo para cadastrar tarefa.
<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/cadastrar.png" height="400" alt="Cadastrar">
</p>
 
5 - Quinto Passo (Editar)
- Criando o codigo para editar as tarefas que foram criadas.
<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/Editar.png" height="400" alt="Editar">
</p>

Demonstrativo de como ficou o CRUD  de criação de tarefas

Tela de criação de usuario

<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/cadastrar%20usuario.png" height="400" alt="Editar">
</p>

Após criado o usuario, ele poderá ir para tela de login 

<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/login.png" height="400" alt="Tela de Login">
</p>
 
Após ter realizado o login ele poderá criar, editar ou excluir tarefas

<p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/paginas%20de%20tarefas.png" height="400" alt="Tela de Home com login">
</p>

Quando ele faz o logout ele apenas consegue visualizar a tarefa, não sendo possivel fazer nenhuma alteração
 <p align="center">
    <img src="https://github.com/lucasaraujolp/tarefas/blob/7f9fdb946f404655e0ca095fc906405d1f4c97e4/public/images/visualizar%20tarefas.png" height="400" alt="Tela de Home sem login">
</p>
( Botões amarelos para diferenciar quando o usuario não está logado)

sendo assim concluindo o projeto de criação de tarefas.
