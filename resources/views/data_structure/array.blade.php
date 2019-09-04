@extends('layouts.app')

@section('content')
    <h1>Array</h1>
    <h2>Inconvenience of Variables</h2>

    <h2>What is Array?</h2>
    <p>An array is a data structure that can store an ordered collection of the same type of elements with indexes.</p>
    <p>Take a look of the image below.</p>
    <img src="{{ URL::to('/img/array_drawing.png') }}">
    <p>An array looks like a sequence of boxes. Each box is called an element.
        Elements are pretty much the same as variables--they have a type and can store data.
        In Java, an array can store only a single type of elements.
        For example, if you create an array that can contain int type data, you can't store boolean type data into the array.
    </p>
    <p>
        As you can see in the image above, each element in the array is associated with an number.
        Each of these numbers is called an index. The index in an array always starts from 0.
    </p>
    <p>
        One of the great benefits of using an array is that you can treat all of elements in an array as a single data.
        This means that, with an array, you can do things like "sum up all the elements in the array" or
        "find this value in the array" much easier than using variables.
    </p>

    <h2>How to Use Array</h2>

    <h2>Summary</h2>
    <ul>
        <li><p>Array is a sequence of elements with indexes.</p></li>
        <li><p>In Java, an array can store only a single type of data.</p></li>
        <li><p>The index in an array always start from 0.</p></li>
    </ul>

@endsection