@extends('layouts.main_desktop')

@section('page-title')
Produtos
@endsection

@section('header')
    <ul class="header-navigation__list">
        <a href="{{ route('products.index')}}">
            <li><button class="header-navigation__btn header-navigation__btn--active">Produtos</button></li>
        </a>
        <a href="{{ route('companies.index')}}">
            <li><button class="header-navigation__btn">Empresas</button></li>
        </a>
        <a href="{{ route('marketplaces.index')}}">
            <li><button class="header-navigation__btn">Lojas</button></li>
        </a>
        <a href="{{ route('reports.index')}}">
            <li><button class="header-navigation__btn">Relatórios</button></li>
        </a>
    </ul>
@endsection

@section('app-shell-title')
Produtos
@endsection

@section('app-shell-subtitle')
Gerencie os produtos de seu inventário
@endsection

@section('action-buttons')
    <button class="action-button action-button--secondary">Cadastrar Produto</button>
@endsection

@section('app-shell-workspace')
 <span>Nenhum produto cadastrado.</span>
@endsection

@section('floating-buttons')
@endsection
