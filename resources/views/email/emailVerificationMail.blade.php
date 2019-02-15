@extends('email.layout')

@section('content')

<h1 style="margin:0px 0px 25px 0px;padding:0px;display:block;color:#0abe51;line-height:45px">Thanks for choosing <span class="il">{{ env('APP_NAME') }}</span></h1>

<p style="font-size:22px;padding:0 0 20px;margin:0px 0px 20px 0px;color:#555555;line-height:30px">Click this button to proceed</p>

<div>
<p style="display:inline-block;margin:auto;font-size:15px;color:#2a73cc;line-height:22px;background-color:#ffffff;font-weight:bold;border:1px solid #2a73cc;border-radius:2px;font-family:'Open Sans',Arial,sans-serif" align="center"><a style="padding:10px 25px;display:block;text-decoration:none;" href="{{$link}}" style="text-decoration:none;color:#4a89dc" target="_blank">Verify</a></p></div>


@stop

