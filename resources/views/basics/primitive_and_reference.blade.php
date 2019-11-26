@extends('layouts.coding')

@section('content')

    <h1>Value Type and Reference Type</h1>

    <div id="content-table">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#content1">Two Kinds of Data Types</a></li>
            <li><a href="#content2">What is Primitive Type?</a></li>
            <li><a href="#content3">What is Reference Type?</a></li>
            <li><a href="#content4">Difference between Primitive and Reference</a></li>
            <li><a href="#content5">Summary</a></li>
        </ul>
    </div>

    <div id="content1">
        <h2>Two Kinds of Data Types</h2>
        <p>
            Any kind of data that we deal with in Java is categorised into one of two data types. One is called <dfn>Primitive</dfn> type
            and the other is called <dfn>Reference</dfn> type. There are a couple of important differences that we need to know.
            In this section, we first talk about primitive type. Then we see the reference type and the important difference
            between them.
        </p>
    </div>

    <div id="content2">
        <h2>What is Primitive Type?</h2>
        <p>
            In Java, <dfn>Primitive</dfn> types are data types that store the data in its own memory space.
            For example, int is a primitive type. That is, <i>int age = 21;</i> means that we are assigning int value 21 to
            a variable named <i>age</i>. The image bellow shows the process of this line of code.
        </p>
        <img src="{{URL::to("/img/value_type.png")}}">
    </div>

    <!--<h2>Different Kinds of Primitive Type</h2>-->

    <div id="content3">
        <h2>What is Reference Type?</h2>
        <p>
            <dfn>Reference</dfn> types are data types that store class instances.
            Unlike primitive types, reference types do not store the data in its own memory space; rather,
            they store the memory location of the data.
            For example, String is a reference type. When we store a string value "John" by <i>String name = "John";</i>,
            the variable <i>name</i> does not store a string "John", but instead, keeps the memory address of the string <i>"John"</i>.
        </p>
        <img src="{{URL::to("/img/reference_type.png")}}" width="100%">
    </div>

    <div id="content4">
        <h2>Difference between Primitive and Reference</h2>
        <p>
            On a surface, both primitive and reference look and work in the same way, but there are two major differences.
            As stated previously, the first difference is that primitive types store the data itself in their memory space,
            while reference types store the memory address of the data.
            The second difference is that reference types require creating an instance of the data. That is, reference data
            needs to be created with <i>new</i> statement.
            This is essentially because all reference type data are <dfn>instances of a class</dfn>.
        </p>
        <img src="{{URL::to("/img/primitive_and_reference.png")}}" width="100%">
        <p>
            It is easy to prove that reference are class instances and primitives are not.
            The biggest advantage of class instances is that they can have parameters and methods.
            We may write code like <i>String name = "John";</i> and then <i>String initial = name.substring(0, 1);</i>.
            This will result in <i>initial</i> being <i>"J"</i>. <br>
            However, we will receive an error if we try
            <i>int num = 100;</i> and then <i>int next = num.next();</i> because primitive types are not class instances and
            do not have parameters nor methods.
        </p>
    </div>

    <!--
    <h2>Why does It Matter?</h2>
    <p>
        It is important to understand the difference between primitive and reference types because
        these distinctions could cause us an error if we do not properly understand them.
        For example, take a look of the following code, and think about what this code will print out.
    </p>
    <p class='code'>
        int x = 100;<br>
        int y = x;<br>
        x += 100;<br>
        System.out.println("x is :" + x);<br>
        System.out.println("y is :" + y);
    </p>
    <p>
        In this situation, this will print out, <br>
        x is 200<br>
        y is 100<br>
        which makes sense as y = x = 100 and x was added by 100 afterward.
    </p>
    <p>
        What about this situation?
    </p>
    -->

    <div id="content5">
        <h2>Summary</h2>
    </div>

@endsection