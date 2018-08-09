@extends('common.layout')

@section('header_title', 'Event')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/event.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')

    <main class="container-fluid">
        <!--<div class="tr">-->
        <div class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="event_title">
                        <h2>Event Schedule</h2>
                    </div>
                    <div class="event_future">
                        <div class="event_month">
                            <div class="event_month_title">
                                <h3>June</h3>
                            </div>
                            <div class="event_month_table">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>6/3</th>
                                            <td><a href="#">九州レプタイルフェスタ</a></td>
                                            <td>/ Fukuoka</td>
                                        </tr>
                                        <tr>
                                            <th>6/10</th>
                                            <td><a href="#">BLACK OUT!</a></td>
                                            <td>/ Tokyo</td>
                                        </tr>
                                        <tr>
                                            <th>6/24</th>
                                            <td><a href="#">アンペポ</a></td>
                                            <td>/ Niigata</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="event_month card-group" id="accordion_2018july2" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018july2">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018july2" href="#collapse_2018july2" aria-expanded="true" aria-controls="collapse_2018july2">
                                            July
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018july2" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018july2">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>7/7,8</th>
                                                <td><a href="#">レプタイルズフィーバー2018</a></td>
                                                <td>/ Osaka</td>
                                            </tr>
                                            <tr>
                                                <th>7/8</th>
                                                <td><a href="#">GECHO MARKET</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>7/15</th>
                                                <td><a href="#">アクアリウムバス</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>7/22</th>
                                                <td><a href="#">エキゾチックレプタイルエキスポ</a></td>
                                                <td>/ Hiroshima</td>
                                            </tr>
                                            <tr>
                                                <th>7/29</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Kyoto</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_month card-group" id="accordion_2018august" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018august">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018august" href="#collapse_2018august" aria-expanded="true" aria-controls="collapse_2018august">
                                            August
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018august" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018august">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>8/4, 5</th>
                                                <td><a href="#">ジャパンレプタイズショー</a></td>
                                                <td>/ Shizuoka</td>
                                            </tr>
                                            <tr>
                                                <th>8/18, 19</th>
                                                <td><a href="#">ジャパンレプタイルズショー</a></td>
                                                <td>/ Sapporo</td>
                                            </tr>
                                            <tr>
                                                <th>8/22</th>
                                                <td><a href="#">エキゾチックレプタイルエキスポ</a></td>
                                                <td>/ Hiroshima</td>
                                            </tr>
                                            <tr>
                                                <th>8/26</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Saitama</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_month card-group" id="accordion_2018september" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018september">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018september" href="#collapse_2018september" aria-expanded="true" aria-controls="collapse_2018september">
                                            September
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018september" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018september">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>9/2</th>
                                                <td><a href="#">アンペポ</a></td>
                                                <td>/ Hokkaido</td>
                                            </tr>
                                            <tr>
                                                <th>9/16</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>8/16</th>
                                                <td><a href="#">ジャングルハンター</a></td>
                                                <td>/ Osaka</td>
                                            </tr>
                                            <tr>
                                                <th>8/26</th>
                                                <td><a href="#">ナゴヤレプタイルズワールド</a></td>
                                                <td>/ Nagoya</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_month card-group" id="accordion_2018october" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018october">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018october" href="#collapse_2018october" aria-expanded="true" aria-controls="collapse_2018october">
                                            September
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018october" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018october">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>10/7</th>
                                                <td><a href="#">ぶりくら市</a></td>
                                                <td>/ Kobe</td>
                                            </tr>
                                            <tr>
                                                <th>10/14</th>
                                                <td><a href="#">アクアリウムバス</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>10/14</th>
                                                <td><a href="#">アンペポ</a></td>
                                                <td>/ Sendai</td>
                                            </tr>
                                            <tr>
                                                <th>10/20</th>
                                                <td><a href="#">四国ブリーダーズストリート</a></td>
                                                <td>/ Kagawa</td>
                                            </tr>
                                            <tr>
                                                <th>10/21</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Osaka</td>
                                            </tr>
                                            <tr>
                                                <th>10/28</th>
                                                <td><a href="#">アンペポ</a></td>
                                                <td>/ Nagoya</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_month card-group" id="accordion_2018november" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018november">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018november" href="#collapse_2018november" aria-expanded="true" aria-controls="collapse_2018november">
                                            November
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018november" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018november">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>11/4</th>
                                                <td><a href="#">九州レプタイルフェア</a></td>
                                                <td>/ Fukuoka</td>
                                            </tr>
                                            <tr>
                                                <th>11/4</th>
                                                <td><a href="#">HBM</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>11/11</th>
                                                <td><a href="#">とんぶり市</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>11/18</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Nagoya</td>
                                            </tr>
                                            <tr>
                                                <th>11/25</th>
                                                <td><a href="#">カメ DE Show!2018</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_month card-group" id="accordion_2018december" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018december">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018december" href="#collapse_2018december" aria-expanded="true" aria-controls="collapse_2018december">
                                            December
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018december" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018december">
                                    <div class="event_month_table card-body">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th>12/1, 2</th>
                                                <td><a href="#">東京レプタイルワールド</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            <tr>
                                                <th>12/1, 2</th>
                                                <td><a href="#">いきもにあ2018</a></td>
                                                <td>/ Kobe</td>
                                            </tr>
                                            <tr>
                                                <th>12/16</th>
                                                <td><a href="#">BLACK OUT!</a></td>
                                                <td>/ Tokyo</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <hr>

                    <div class="event_past">
                        <div class="event_title_diary">
                            <button type="button" class="btn">Past</button>
                        </div>

                        <div class="event_year card-group" id="accordion_2018" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_month_title card-columns" role="tab" id="heading_2018">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018" href="#collapse_2018" aria-expanded="true" aria-controls="collapse_2018">
                                            2018
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2018" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018">

                                    <div class="event_month_table card-body">
                                        <div class="event_month card-group" id="accordion_2018january" role="tablist" aria-multiselectable="true">
                                            <div class="card bg-transparent">
                                                <div class="event_month_title card-columns" role="tab" id="heading_2018january">
                                                    <h3 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018january" href="#collapse_2018january" aria-expanded="true" aria-controls="collapse_2018january">
                                                            January
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse_2018january" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018january">
                                                    <div class="event_month_table card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ほげほげ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ホゲホゲ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>hogehoge</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event_month_table card-body">
                                        <div class="event_month card-group" id="accordion_2018febrary" role="tablist" aria-multiselectable="true">
                                            <div class="card bg-transparent">
                                                <div class="event_month_title card-columns" role="tab" id="heading_2018febrary">
                                                    <h3 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018febrary" href="#collapse_2018febrary" aria-expanded="true" aria-controls="collapse_2018febrary">
                                                            Febrary
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse_2018febrary" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018febrary">
                                                    <div class="event_month_table card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ほげほげ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ホゲホゲ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>hogehoge</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event_month_table card-body">
                                        <div class="event_month card-group" id="accordion_2018march" role="tablist" aria-multiselectable="true">
                                            <div class="card bg-transparent">
                                                <div class="event_month_title card-columns" role="tab" id="heading_2018march">
                                                    <h3 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018march" href="#collapse_2018march" aria-expanded="true" aria-controls="collapse_2018march">
                                                            March
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse_2018march" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018march">
                                                    <div class="event_month_table card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ほげほげ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ホゲホゲ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>hogehoge</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event_month_table card-body">
                                        <div class="event_month card-group" id="accordion_2018april" role="tablist" aria-multiselectable="true">
                                            <div class="card bg-transparent">
                                                <div class="event_month_title card-columns" role="tab" id="heading_2018april">
                                                    <h3 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018april" href="#collapse_2018april" aria-expanded="true" aria-controls="collapse_2018april">
                                                            April
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse_2018april" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018april">
                                                    <div class="event_month_table card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ほげほげ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ホゲホゲ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>hogehoge</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="event_month_table card-body">
                                        <div class="event_month card-group" id="accordion_2018may" role="tablist" aria-multiselectable="true">
                                            <div class="card bg-transparent">
                                                <div class="event_month_title card-columns" role="tab" id="heading_2018may">
                                                    <h3 class="card-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2018may" href="#collapse_2018may" aria-expanded="true" aria-controls="collapse_2018may">
                                                            May
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapse_2018may" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2018may">
                                                    <div class="event_month_table card-body">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ほげほげ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>ホゲホゲ</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>4/1</th>
                                                                <td>hogehoge</td>
                                                                <td>/ Tokyo</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="event_year card-group" id="accordion_2017" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_year_title card-columns" role="tab" id="heading_2017">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2017" href="#collapse_2017" aria-expanded="true" aria-controls="collapse_2017">
                                            2017
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2017" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2017">
                                    <div class="event_month_table card-body">
                                        <p>省略！！！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_year card-group" id="accordion_2016" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_year_title card-columns" role="tab" id="heading_2016">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2016" href="#collapse_2016" aria-expanded="true" aria-controls="collapse_2016">
                                            2016
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2016" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2016">
                                    <div class="event_month_table card-body">
                                        <p>省略！！！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event_year card-group" id="accordion_2015" role="tablist" aria-multiselectable="true">
                            <div class="card bg-transparent">
                                <div class="event_year_title card-columns" role="tab" id="heading_2015">
                                    <h3 class="card-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_2015" href="#collapse_2015" aria-expanded="true" aria-controls="collapse_2015">
                                            2015
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapse_2015" class="event_month_table panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_2015">
                                    <div class="event_month_table card-body">
                                        <p>省略！！！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div id="limited_event">
                        <div class="event_title">
                            <h3>Limited Event</h3>
                        </div>
                        <div class="event_table">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>now〜8/31</th>
                                    <td><a href="#">サワレルハチュウルイ展ShimiZoo</a></td>
                                    <td>/ Shizuoka</td>
                                </tr>
                                <tr>
                                    <th>5/28〜6/3</th>
                                    <td><a href="#">水陸両用の生き物展</a></td>
                                    <td>/ Tokyo etc</td>
                                </tr>
                                <tr>
                                    <th>6/28〜11/25</th>
                                    <td><a href="#">化ケモノ展</a></td>
                                    <td>/ Tokyo</td>
                                </tr>
                                <tr>
                                    <th>7/7〜9/24</th>
                                    <td><a href="#">サワレルハチュウルイ展</a></td>
                                    <td>/ Hokkaido</td>
                                </tr>
                                <tr>
                                    <th>7/21〜9/2</th>
                                    <td><a href="#">ぶっとんでるいきもの展</a></td>
                                    <td>/ Niigata</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr>

                    <div id="event_description">
                        <div class="event_title">
                            <h2>Event Description</h2>
                        </div>
                        <div class="border border-dark p-1">
                            <nav id="navbar_event_des" class="navbar navbar-light">
                                <ul class="nav nav-pill">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#start">Start</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#end">End</a>
                                    </li>
                                </ul>
                            </nav>
                            <div data-spy="scroll" data-target="#navbar_event_des" data-offset="0" class="scrollspy-frame">
                                <h6 id="start" class="display-4"><a href="#">Event Name(start)</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">Event Name</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">Event Name</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">Event Name</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 id="end" class="display-4"><a href="#">Event Name(end)</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>

                                </p>
                                <hr>

                            </div>
                        </div>
                        <div id="hoge">

                        </div>
                    </div>

                </div>

            </div>


        </div>
        <!--</div>-->


    </main>

@endsection

@section('pageJs')

@endsection

@include('common.footer')