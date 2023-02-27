@extends('monTemplate')

@section('titre')
    Mon super tableau de tableau
@endsection

@section('contenu')

    <table>
        @foreach($proverbes as $proverb)
            <tr><td> {{$proverb}} </td>
            </tr>
        @endforeach
    </table>

@endsection
