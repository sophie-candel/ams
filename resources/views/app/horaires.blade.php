@extends('layouts.layouts-app.master') 
@section('content')
<section class="section parallax px-is-horaires">
    <div class="container">
        <h1 class="title">Horaires</h1>
    </div>
</section>

<div class="container">
    <div class="section">
        <table class="table is-bordered is-striped">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Baby Judo
                        <p>2013 / 2012</p>
                    </th>
                    <td>
                        <p>Mardi</p>
                        16h30 - 17h30
                    </td>
                </tr>
                <tr>
                    <th>Mini poussins / Poussins
                        <p>2011 / 2010 / 2009 / 2008</p>
                    </th>
                    <td>
                        <p>Mardi</p>
                        17h30 - 18h30
                    </td>
                </tr>
                <tr>
                    <th>Benjamins / Minimes / Cadets
                        <p>2007 et avant</p>
                    </th>
                    <td>
                        <p>Mardi</p>
                        18h30 - 19h30
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table is-bordered is-striped is-fullwidth">

            <tbody>
                <tr>
                    <th>Baby Judo
                        <p>2013 / 2012</p>
                    </th>
                    <td colspan="2">
                        <p>Lundi</p>
                        16h - 17h
                    </td>
                    <td colspan="2">
                        <p>Jeudi</p>
                        16h - 17h
                    </td>
                </tr>
                <tr>
                    <th>Mini poussins
                        <p>2011 / 2010</p>
                    </th>
                    <td colspan="2">
                        <p>Lundi</p>
                        17h - 18h
                    </td>
                    <td colspan="2">
                        <p>Jeudi</p>
                        17h - 18h
                    </td>
                </tr>
                <tr>
                    <th>Poussins
                        <p>2009 / 2008</p>
                    </th>
                    <td colspan="2">
                        <p>Lundi</p>
                        18h - 19h15
                    </td>
                    <td colspan="2">
                        <p>Jeudi</p>
                        18h - 19h15
                    </td>
                </tr>
                <tr>
                    <th>Benjamins
                        <p>2007 / 2006</p>
                    </th>
                    <td colspan="2">
                        <p>Lundi</p>
                        19h15 - 20h30
                    </td>
                    <td colspan="2">
                        <p>Jeudi</p>
                        19h15 - 20h30
                    </td>
                </tr>
                <tr>
                    <th>Minimes
                        <p>2005 / 2004</p>
                    </th>
                    <td>
                        <p>Lundi</p>
                        19h15 - 20h30
                    </td>
                    <td>
                        <p>Jeudi</p>
                        19h15 - 20h30
                    </td>
                    <td>
                        <p>Vendredi</p>
                        19h30 - 21h
                    </td>
                </tr>
                <tr>
                    <th>Cadets / Juniors / Seniors
                        <p>2003 et avant</p>
                    </th>
                    <td colspan="2">
                        <p>Mardi</p>
                        20h - 21h30
                        <p>(préparation physique)</p>
                    </td>
                    <td>
                        <p>Vendredi</p>
                        19h - 19h30
                        <p>(entraînement individualisé)</p>
                    </td>
                    <td>
                        <p>Vendredi</p>
                        19h30 - 21h
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection