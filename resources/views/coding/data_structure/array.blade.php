@extends("layouts.coding")

@section("content")
    <h1>Array</h1>

    <div id="content-table">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#content1">Best Time to Buy and Sell Stock</a></li>
            <li><a href="#content2">Best Time to Buy and Sell Stock II</a></li>
            <li><a href="#content3">Two Sum</a></li>
            <li><a href="#content4">Search in Rotated Sorted Array</a></li>
        </ul>
    </div>

    <div id="content1">
        <h2>Best Time to Buy and Sell Stock</h2>
        <p>
            This problem is a popular and simple, yet interesting coding problem using an array. <br/>
            We are given an array of integers with size n, where ith element represents the price of the stock on that day. <br/>
            Our task is to buy and sell stock once each time to make the most profit and return the value of the profit. <br/>
        </p>
        <p>
            <a href="https://leetcode.com/problems/best-time-to-buy-and-sell-stock/">test in LeatCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/array/BestTimeToBuyAndSellStock.java">check answer</a>
        </p>
    </div>

    <div id="content2">
        <h2>Best Time to Buy and Sell Stock II</h2>
        <p>
            This problem is a similar problem to <a href="#content1">Best Time to Buy and Sell Stock</a>, but in this case, we are able to buy and sell more than one time. <br/>
            Given an array of integers with size n, where ith element represents the price of the stock on that day,
            our task is to buy and sell stock to make the most profit and return the value of the profit. <br/>
        </p>
        <p>
            <a href="https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/">test in LeetCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/array/BestTimeToBuyAndSellStockII.java">check answer</a>
        </p>
    </div>

    <div id="content3">
        <h2>Two Sum</h2>
        <p>
            We are given an array of integers with size n and a target integer. <br/>
            Our task is to return an array of integers with two indices such that their values add up to exactly the target value. <br/>
        </p>
        <p>
            <a href="https://leetcode.com/problems/two-sum/">test in LeetCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/array/TwoSum.java">check answer</a>
        </p>
    </div>

    <div id="content4">
        <h2>Search in Rotated Sorted Array</h2>
        <p>
            We are given a target value and a sorted array of integers with size n, but this array is rotated at some unknown index. <br/>
            Our task is to return an index of the target value in the array. If there is not such element, return -1. <br/>
            In this problem, we consider that the given array does not contain duplicates.
        </p>
        <p>
            <a href="https://leetcode.com/problems/search-in-rotated-sorted-array/">test in LeetCode</a><br/>
            <a href="https://github.com/ShogoAkiyama54/LeetCode/blob/master/src/array/SearchInRotatedSortedArray.java">check answer</a>
        </p>
    </div>
@endsection