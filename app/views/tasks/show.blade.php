<?php
/**
 * Created by PhpStorm.
 * User: helmi
 * Date: 2/5/14
 * Time: 12:51 AM
 */
?>
@extends('layout.master')
    <h1>{{$task->title}}</h1>
    <article>{{$task->body}}</article>
    <p>{{link_to('/tasks','go back')}}</p>
@stop