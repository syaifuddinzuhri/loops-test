@extends('layouts.main')

@section('title_page', 'Home')

@section('contents')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>Welcome @if (Auth::check())
                                {{ Auth::user()->name }}
                            @endif <br> to Loops.id</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam itaque quibusdam ducimus
                            repudiandae, earum iure! Mollitia illum voluptates animi tempore quaerat quod est hic, placeat
                            molestias. Reprehenderit quo culpa eius nam aliquid. Dicta amet dignissimos ab quae, deleniti
                            dolor assumenda facere odit magnam aspernatur id sint harum velit nisi quidem omnis repellat
                            saepe itaque debitis quasi sed blanditiis! Praesentium architecto excepturi neque nam quo ipsam
                            assumenda recusandae? Nobis, repudiandae numquam consectetur deleniti dolore alias. Repellendus
                            dolorum magnam laborum aliquam, minima beatae ad veniam ut odit ipsam voluptatem quasi quod
                            fugiat inventore commodi molestiae autem ullam deleniti, id nemo quam cupiditate?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
