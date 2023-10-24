@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif                
            </div>
        </div>

        <div class="mt-4">
            <h4>Halo, saya</h4>
            <h1>Devrangga</h1>
            <p>Saya seorang Mahasiswa TRPL Sekolah Vokasi Universitas Gadjah Mada. Saya merupakan Undergraduate Software Engineer Student yang cenderung berfokus menjadi Web dan App Front-End Developer, saya menggunakan beberapa teknologi untuk membangun Web dan App seperti Laravel,Javascript,HTML,CSS,Tailwind,Bootstrap,React JS,React Native, Node JS, Kotlin, Laravel, PHP, Python. Saya juga merupakan 2D/3D Motion And Graphic Designer, saya menggunakan Photoshop,Illustrator,After Effects,Blender, dan Figma untuk membuat karya-karya saya.  </p>
        </div>
    </div>    
</div>
    
@endsection