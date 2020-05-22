@extends('layouts.app')

@section('content')
            <div id="allProducts">
                @foreach ($products as $product)
                <a class="product" href="product/{{$product->id}}">
                    <span class="title_product">
                        {{$product->name}}
                    </span>
                    {{--
                    <img alt="{{$product->name}}" decoding="async" src="{{$product->picture_path}}">
                        --}}
                        <img alt="{{$product->name}}" class="picture_product" decoding="async" src="https://picsum.photos/200/300">
                            <aside class="aside_product">
                                <span style="color: {{$product->colors}}">
                                    {{$product->colors}}
                                </span>
                                <span>
                                    {{$product->price}}€
                                </span>
                            </aside>
                        </img>
                    </img>
                </a>
                @endforeach
            </div>
            {{ $products->links() }}
@endsection
