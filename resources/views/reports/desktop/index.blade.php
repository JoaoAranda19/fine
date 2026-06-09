
@extends('layouts.main_desktop')

@section('page-title')
Relatórios
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
            <li><button class="header-navigation__btn">Lojas</button></li>
        </a>
        <a href="{{ route('reports.index')}}">
            <li><button class="header-navigation__btn header-navigation__btn--active">Relatórios</button></li>
        </a>
    </ul>
@endsection

@section('app-shell-title')
Relatórios
@endsection

@section('app-shell-subtitle')
Gere seus relatórios e realize suas simulações de preços
@endsection

@section('action-buttons')
    <button class="action-button action-button--secondary">Cadastrar Relatório</button>
@endsection

@section('app-shell-workspace')
 <span>Nenhum relatórios cadastrado.</span>
@endsection

@section('floating-buttons')
@endsection
