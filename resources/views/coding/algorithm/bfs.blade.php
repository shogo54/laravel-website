@extends("layouts.coding")

@section("content")
    <h1>Coding Practice Using BFS</h1>

    <div id="content-table">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#content1">Binary Tree Level Order Traversal</a></li>
            <li><a href="#content2">Binary Tree Zigzag Level Order Traversal</a></li>
            <li><a href="#content3">Serialize and Deserialize Binary Tree</a></li>
        </ul>
    </div>

    <div id="content1">
        <h2>Binary Tree Level Order Traversal</h2>
        <p>
            This problem is one of the most popular Binary Tree problems. <br/>
            We are given a root node of a binary tree of integers. <br/>
            Our task is to create a list of level order traversal of the tree's values. <br/>
            Try solving this problem with BFS.
        </p>
        <p>
            <a href="https://leetcode.com/problems/binary-tree-level-order-traversal/">test in LeatCode</a><br/>
            Answer not available yet.
        </p>
    </div>

    <div id="content2">
        <h2>Binary Tree Zigzag Level Order Traversal</h2>
        <p>
            This problem is a similar problem to <a href="#content1">Binary Tree Level Order Traversal</a>,
            but in this case, we are supposed to give a zig-zag level order instead of normal level order. <br/>
            Given a root node of a binary tree of integers,
            our task is to create a list of zig-zag level order traversal of the tree's values. <br/>
            Try solving this problem with BFS.
        </p>
        <p>
            <a href="https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/">test in LeetCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/binarytree/BinaryTreeZigzagLevelOrderTraversal.java">check answer</a>
        </p>
    </div>

    <div id="content3">
        <h2>Serialize and Deserialize Binary Tree</h2>
        <p>
            Out task for this problem is to design an algorithm to serialize and deserialize a binary tree. <br/>
            More specifically, we need to serialize a binary tree to a string and this string can be deserialized to the original tree structure. <br/>
            Try solving this problem with BFS.
        </p>
        <p>
            <a href="https://leetcode.com/problems/serialize-and-deserialize-binary-tree/">test in LeetCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/binarytree/SerializeAndDeserializeBinaryTree.java">check answer</a>
        </p>
    </div>
@endsection