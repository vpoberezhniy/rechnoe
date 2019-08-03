@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--<div class="col-md-2 granica">--}}
                {{--Навигация контента--}}
            {{--</div>--}}
            <div class="col-md-8">
                {{--<div class="col-md-12 granica">--}}
                {{--<h3>Статический блок</h3>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                        {{--Architecto deleniti, dolor dolore incidunt inventore libero--}}
                        {{--placeat praesentium ratione recusandae repellat, repudiandae sed.--}}
                        {{--Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>--}}
                {{--</div>--}}

                <div class="col-md-12 granica">
                    <h3>Динамический блок</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto deleniti, dolor dolore incidunt inventore libero
                        placeat praesentium ratione recusandae repellat, repudiandae sed.
                        Harum laboriosam minima modi mollitia nesciunt provident rem ...</p>
                </div>

            </div>
            <div class="col-md-3 granica">
                <button class="btn btn-primary button_menu" >Создать новый пост</button><br>
                <button class="btn btn-primary button_menu">Создать новое предложение</button><br>
                <button class="btn btn-primary button_menu">Создать новую претензию</button><br>
                <button class="btn btn-primary button_menu">Создать новое объявление</button><br>
                {{--<button class="btn btn-primary button_menu">Кнопка №5</button>--}}
                <hr />
                <h4 class="topten_otstup">Топ-10 постов</h4>

            </div>

        </div>


    </div>
@endsection
