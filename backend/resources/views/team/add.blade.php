@extends('layouts.helloapp')

@section('title', 'Team.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif
    <table>
        <form action="/team/add" method="post">
            {{csrf_field()}}
            <tr>
                <th>
                    teamid:
                </th>
                <td>
                    <input type="text" name="teamid" value="{{old('name')}}" />
                </td>
            </tr>
            <tr>
                <th>
                    teamname:
                </th>
                <td>
                    <input type="text" name="teamname" value="{{old('teamname')}}" />
                </td>
            </tr>
            <tr>
                <th>
                    ismyself:
                </th>
                <td>
                    <input type="number" name="ismyself" value="{{old('ismyself')}}" />
                </td>
            </tr>
            <tr>
                <th>
                    color:
                </th>
                <td>
                    <input type="text" name="color" value="{{old('color')}}" />
                </td>
            </tr>
            <tr>
                <th>

                </th>
                <td>
                    <input type="submit" value="send" />
                </td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
