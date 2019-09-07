@extends('layouts.app')

@section('content')
    <h1>Array</h1>

    <h2>Inconvenience of Variables</h2>
    <p>
        As a programmer, you often face to a situation where you need to deal with lots of data at once.
        Sometimes you may need to know the average of an class exam score.
    </p>
    <p>
        Of course, you can have variables for each person's score, sum them up, and divide by the number of classmates.
        However, the code for that will look tedious.
        Not only that, but also you need to add more and more lines of code as you have more student in your class.
    </p>
    <p class='code'>
        int jack = 77;<br>
        int john = 89;<br>
        int mary = 92;<br>
        int alex = 64;<br>
        int nancy = 55;<br>
        int nick = 23;<br>
        <br>
        int sum = jack + john + mary + alex + nancy + nick;<br>
        int avg = sum / 6;
    </p>
    <p>
        In this situation, assuming the size of your class is pretty small, it is easy to write a code.
        But what if your class size is 300?
        Also, sometimes programmers need to handle millions or billions of data, such as the average age of all Facebook users.
    </p>
    <p>
        In these situations, using variables won't help much as the codes will go infinitely long.
        And this is where array, one the data structures, comes in.
        With an array, we can rewrite the previous code as the following.
    </p>
    <p class='code'>
        int[] scores = new int[6]{77,89,92,64,55,23};<br>
        int sum = 0;<br>
        for(int i=0; i&lt;scores.length; i++){<br>
        &emsp;&emsp;sum += scores[i];<br>
        }<br>
        int avg = sum / scores.length;
    </p>

    <h2>What is Array?</h2>
    <p>An array is a data structure that can store an ordered collection of the same type of elements with indexes.</p>
    <p>Take a look of the image below.</p>
    <img src="{{ URL::to('/img/array_drawing.png') }}">
    <p>
        An array looks like a sequence of boxes. Each box is called an element.
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
    <p></p>

    <h2>Summary</h2>
    <ul>
        <li><p>Array is a sequence of elements with indexes.</p></li>
        <li><p>In Java, an array can store only a single type of data.</p></li>
        <li><p>The index in an array always start from 0.</p></li>
    </ul>

@endsection