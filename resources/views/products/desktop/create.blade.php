@extends('layouts.main_desktop')

@section('page-title')
Cadastro de Produto
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
Cadastro de Produto
@endsection

@section('app-shell-subtitle')
Gerencie os produtos de seu inventário
@endsection

@section('action-buttons')
<a href="{{ route('categories.create')}}">
    <button class="action-button action-button--secondary">Cadastrar Categoria de Produto</button>
</a>
@endsection

@section('app-shell-workspace')
<div>
    <label for="product_name">Nome do Produto</label>
    <input
        type="text"
        id="product-name"
        name="product_name"
        class="form__text-input"
    />
    <span id="product-name-error-msg" class="form__error-span"></span>
</div>
@endsection

@section('floating-buttons')
@endsection

<style>
.app-shell__list{
    display: flex;
    flex-direction: column;
    padding: 1rem;
    gap: 1rem;
}

.app-shell__list-item{
    color: var(--color-text-main)
    padding: 0.2rem;
    border-bottom: 1px solid rgb(0 0 100 / 0.2);
}

.app-shell__list-item span{
    font-size: 1.5rem;
    font-weight: 400;
}

.app-shell__list-item:hover{
    color: var(--color-text-muted);
}
</style>
