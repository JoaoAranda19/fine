@extends('layouts.main_desktop')

@section('page-title')
Lojas
@endsection

@section('header')
    <ul class="header-navigation__list">
        <a href="{{ route('products.index')}}">
            <li><button class="header-navigation__btn">Produtos</button></li>
        </a>
        <a href="{{ route('companies.index')}}">
            <li><button class="header-navigation__btn">Empresas</button></li>
        </a>
        <a href="{{ route('marketplaces.index')}}">
            <li><button class="header-navigation__btn header-navigation__btn--active">Lojas</button></li>
        </a>
        <a href="{{ route('reports.index')}}">
            <li><button class="header-navigation__btn">Relatórios</button></li>
        </a>
    </ul>
@endsection

@section('app-shell-title')
Lojas
@endsection

@section('app-shell-subtitle')
Realize a vinculação com as lojas virtuais onde vende seus produtos
@endsection

@section('action-buttons')
    <button class="action-button action-button--secondary">Vincular Loja</button>
@endsection

@section('app-shell-workspace')
 <span>Nenhuma loja cadastrada.</span>
@endsection

@section('floating-buttons')
@endsection
