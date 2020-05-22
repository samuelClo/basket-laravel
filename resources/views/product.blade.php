@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
	<div id="productWrapper">
		<!-- <img id="productImage" src="{{$productId->picture_path}}">
		</img> -->
		<img id="productImage" src="https://picsum.photos/200/300">
		</img>

		<div id="productsAssets">
			<h2>
				{{$productId->name}}
			</h2>
			<p>
				{{$productId->description}}
			</p>
			<form action="{{ route('basket.add') }}" method="post">
				<label for="size">size :</label>
				<select name="size" id="">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
				<select name="color" id="">
					<option value="#eb3434">red</option>
					<option value="#343deb">blue</option>
					<option value="#34eb59">green</option>
					<option value="#e8eb34">yellow</option>
				</select>
				<label for="quantity">Quantity :</label>
				<input type="number" name="quantity">
				Date de sortie : {{$productId->release_date}}
				<span>
					{{$productId->price}}€
				</span>
				<input type="submit" value="Add to basket">
			</form>
		</div>
	</div>
@endsection