@extends('layouts.main-layout')

@section('title', 'Главная')


@section('content')
    <div class="slider__wrapper">
        <div class="slider">
            <a href="#" class="slide">
                <img src="{{ asset('img/1.png') }}" alt="Банер">
            </a>
        </div>
        <div class="slider__btn">
            <div class="btn-prev">
                <img src="{{asset('img/arrow-right.svg')}}" alt="">
            </div>
            <div class="btn-next">
                <img src="{{asset('img/arrow-right.svg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="products__wrapper">
        <div class="container">
            <div class="products__block">
                {{--Шапка блока--}}
                <div class="header__block">
                    <h2 class="title__products title">Скидки</h2>
                </div>
                {{--Шапка блока--}}

            {{----------------------------}}

                {{--Тело блока--}}
               <div class="body__block">

                   <ul class="products__list">

                       <a href="#" class="products_item">
                           <div class="item__image">
                               <img src="{{ asset('img/item2.png') }}" alt="">
                           </div>
                           <div class="item__text">
                               <div class="item_title">
                                   <h3>Заголовок 1</h3>
                               </div>
                               <div class="item_price">
                                   <div class="current-price">500</div>
                                   <div class="old-price">600</div>
                               </div>
                               <div class="item-buttons">
                                   <div class="btn-basket btn">
                                       <span>В корзину</span>
                                   </div>
                               </div>
                           </div>
                       </a>

                   </ul>

               </div>
                {{--Тело блока--}}
            </div>
        </div>
    </div>

@endsection
