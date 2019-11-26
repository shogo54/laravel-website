@extends('layouts.coding')

@section('content')
    <h1>Basic Coding Practice</h1>

    <div id="content-table">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#content1">Inconvenience of Variables</a></li>
            <li><a href="#content2">What is an Array?</a></li>
            <li><a href="#content3">How to Create an Array</a></li>
            <li><a href="#content4">How to Use an Array</a></li>
            <li><a href="#content5">More about Initialization of Array</a></li>
            <li><a href="#content6">Array and For Loop</a></li>
            <li><a href="#content7">Summary</a></li>
            <li><a href="#content8">Coding Problems with Array</a></li>
        </ul>
    </div>

    <div id="content1">
        <h2>Inconvenience of Variables</h2>
        <p>
            As a programmer, we often face to a situation where we need to deal with lots of data at once.
            Sometimes we may need to know the average of an class exam score.
        </p>
        <p>
            Of course, we can have variables for each person's score, sum them up, and divide by the number of classmates.
            However, the code for that will look tedious.
            Not only that, but also we need to add more and more lines of code as we have more student in our class.
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
            In this situation, assuming the size of our class is pretty small, it is easy to write a code.
            But what if our class size is 300?
            Sometimes programmers need to handle millions or billions of data, such as the average age of all Facebook users.
        </p>
        <p>
            In these situations, using variables won't help much as the code will go infinitely long.
            And this is where an array, one the data structures, comes in.
            With an array, we can rewrite the previous code as the following.
        </p>
        <p class='code'>
            int[] scores = new int[]{77,89,92,64,55,23};<br>
            int sum = 0;<br>
            for(int i=0; i&lt;scores.length; i++){<br>
            &emsp;&emsp;sum += scores[i];<br>
            }<br>
            int avg = sum / scores.length;
        </p>
    </div>
@endsection