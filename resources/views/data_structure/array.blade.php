@extends('layouts.app')

@section('content')
    <h1>Array</h1>

    <div>
        <h3>Table of Contents</h3>

    </div>

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
        int[] scores = new int[6]{77,89,92,64,55,23};<br>
        int sum = 0;<br>
        for(int i=0; i&lt;scores.length; i++){<br>
        &emsp;&emsp;sum += scores[i];<br>
        }<br>
        int avg = sum / scores.length;
    </p>

    <h2>What is an Array?</h2>
    <p>An array is a data structure that can store an ordered collection of the same type of elements with indexes.</p>
    <p>Take a look of the image below.</p>
    <img src='{{URL::to('/img/array_structure.png')}}'>
    <p>
        An array looks like a sequence of boxes. Each box is called an element.
        Elements are pretty much the same as variables--they have a type and can store data.
        In Java, an array can store only a single type of elements.
        For example, if we create an array that can contain int type data, we can't store boolean type data into the array.
    </p>
    <p>
        As shown in the image above, each element in the array is associated with an number.
        Each of these numbers is called an index. The index in an array always starts from 0.
    </p>
    <p>
        One of the great benefits of using an array is that we can treat all of elements in an array as a single data.
        This means that, with an array, we can do things like "sum up all the elements in the array" or
        "find this value in the array" much easier than using variables.
    </p>

    <h2>How to Create an Array</h2>
    <p>To create an array, there are 2 steps that we need to follow.</p>
    <p>
        Step 1: declare an array variable<br>
        Step 2: initialize the array
    </p>
    <p>
        Step 1: declare an array variable<br>
        To declare an array, we need to specify the type of elements that can be stored in the array.
        For example, the following code is a declaration of an array to store int types.
    </p>
    <p class='code'>
        int[] scores;
    </p>
    <p>or</p>
    <p class='code'>
        int scores[];
    </p>
    <img src='{{URL::to('/img/array_declare.png')}}'>
    <p>
        We can use "double[] scores" or "double scores[]" to store double types,
        and use "String[] names" or "String names[]" to store String types.
    </p>
    <p>
        Step 2: initialize the array<br>
        To initialize the array, we need to know how many elements we are going to put into the array because
        an array's size is fixed after the initialization. For example, the following code will initialize the array
        that we created above.
    </p>
    <p class='code'>
        scores = new int[5];
    </p>
    <img src='{{URL::to('/img/array_initialize.png')}}'>
    <p>
        In the example above, we cannot assign "new double[5]" or "new String[5]" because we declared
        scores as an array to store int types already.
    </p>
    <p>
        An array can be declared and initialized in a single line of code, like a variable can be.
        To do so, we can write:
    </p>
    <p class='code'>
        int[] scores = new int[5];
    </p>
    <p>or</p>
    <p class='code'>
        int scores[] = new int[5];
    </p>

    <h2>How to Use an Array</h2>
    <p>To know how many elements an array can store, you can use "arrayName.length".</p>
    <p class='code'>
        int[] scores = new int[5];<br>
        int len = scores.length;<br>
        System.out.println("number of elements: " + len);&emsp;//print 5
    </p>
    <p>
        We can use each element in an array like a variable, but we need to
        specify the index of the element, like "arrayName[index] = value".
        Also be careful when you use index. The first index always starts from 0, and the last index is always "length - 1".
    </p>
    <p class='code'>
        int[] scores = new int[5];<br>
        scores[0] = 85;&emsp;//assigning 85 to the first index<br>
        scores[4] = 76;&emsp;//assigning 76 to the last index<br>
        System.out.println("value of the first element: " + scores[0]);&emsp;//print 85<br>
        System.out.println("value of the last element: " + scores[4]);&emsp;//print 76
    </p>
    <p>

    </p>

    <h2>Summary</h2>
    <ul>
        <li><p>Array is a sequence of elements with indexes.</p></li>
        <li><p>In Java, an array can store only a single type of data.</p></li>
        <li><p>The index in an array always starts from 0.</p></li>
    </ul>

    <h2>Coding Problems with Array</h2>
    <ul>
        <li></li>
    </ul>

@endsection