@extends("layouts.learn")

@section("content")
    <h1>Overview of List</h1>

    <div id="content-table">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#content1">Why Do We Use a List?</a></li>
            <li><a href="#content2">What is a List?</a></li>
            <li><a href="#content3">How to Create a List</a></li>
            <li><a href="#content4">How to Use a List</a></li>
            <li><a href="#content5">More about Initialization of Array</a></li>
            <li><a href="#content6">Array and For Loop</a></li>
            <li><a href="#content7">Summary</a></li>
            <li><a href="#content8">Coding Problems with Array</a></li>
        </ul>
    </div>

    <div id="content1">
        <h2>Why Do We Use a List?</h2>
        <p>
            Array is a great tool to deal with bigger data, but array has some restriction. There is a primarily three
            downside of an array which leads to other problems.
        </p>
        <p>
            The problem of an array is that the size of an array is fixed after initialization.<br/>
            Because of that, you cannot add or remove elements from an array.
        </p>
        <p>
            As an alternative for array to store, add and remove data, we can use List in Java's Standard Library.
        </p>
    </div>

    <div id="content2">
        <h2>What is a List?</h2>
        <p>
            List is one of the most used, popular data structures provided by Java's Standard Library.
            To use the List class, we need to have an import statement in our class
            to get access to List class.
        </p>
        <p class="code">
            package ----;<br/>
            <br/>
            import java.util.List;<br/>
            <br/>
            public class ****** {<br/>
            <br/>
            &emsp;&emsp;//use List in methods<br/>
            <br/>
            }<br/>
        </p>
        <p>
            The problem of an array is that the size of an array is fixed after initialization.<br/>
            Because of that, you cannot add or remove elements from an array.
        </p>
    </div>

    <div id="content3">
        <h2>How to Create a List</h2>
        <p>
            After importing List class, we need to declare and initialize the List that we want to use.
            Before we move on, we need to understand that List can only contain one single reference type of data like an array.
            That is, the List that contains String, it can only store String data. Also, no List can have primitive data type.
            If we need to store primitive data type, we can use a wrapper class for a particular primitive type.
            The table bellow shows the wrapper classes for each primitive type.
        </p>
        <table>
            <tr>
                <th>primitive type</th><th>wrapper class</th>
            </tr>
            <tr>
                <th>int / long</th><th>Integer</th>
            </tr>
            <tr>
                <th>boolean</th><th>Boolean</th>
            </tr>
            <tr>
                <th>char</th><th>Character</th>
            </tr>
            <tr>
                <th>double</th><th>Double</th>
            </tr>
            <tr>
                <th>float</th><th>Float</th>
            </tr>
            <tr>
                <th>byte</th><th>Byte</th>
            </tr>
            <tr>
                <th>short</th><th>Short</th>
            </tr>
        </table>
        <p>
            Also, to initialize a List, you need to specify the implementation of the List.
            There are mainly two types: ArrayList and LinkedList.
            We will further discuss what are these and how they differ, but just know that we need to use one of them for now.
        </p>
        <p>
            To declare and initialize our list of Integer, we write the following code.
        </p>
        <p class="code">
            List&lt;Integer&gt; list = new ArrayList&lt;Integer&gt;();<br/>
        </p>
        <p>or</p>
        <p class="code">
            List&lt;Integer&gt; list = new LinkedList&lt;Integer&gt;();<br/>
        </p>
    </div>

    <div id="content4">
        <h2>How to Use a List</h2>
        <p>
            After importing List class, we need to declare and initialize the List that we want to use.
            Before we move on, we need to understand that List can only contain one single reference type of data like an array.
            That is, the List that contains String, it can only store String data. Also, no List can have primitive data type.
            If we need to store primitive data type, we can use a wrapper class for a particular primitive type.
            The table bellow shows the wrapper classes for each primitive type.
        </p>
        <table>
            <tr>
                <th>primitive type</th><th>wrapper class</th>
            </tr>
            <tr>
                <th>int / long</th><th>Integer</th>
            </tr>
            <tr>
                <th>boolean</th><th>Boolean</th>
            </tr>
            <tr>
                <th>char</th><th>Character</th>
            </tr>
            <tr>
                <th>double</th><th>Double</th>
            </tr>
            <tr>
                <th>float</th><th>Float</th>
            </tr>
            <tr>
                <th>byte</th><th>Byte</th>
            </tr>
            <tr>
                <th>short</th><th>Short</th>
            </tr>
        </table>
    </div>

@endsection