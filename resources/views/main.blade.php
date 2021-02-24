@extends ('layouts.layout')

@section('header')
    @include('header')
@endsection

@section('main')
    <div class="row">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif  
    </div>
    <form method="POST" class="w-50 row  border border-primary rounded">
        @csrf
        <div class="row p-4">
            <h5>Tutor:</h5>
            @include('tutorsForm')
        </div>
        <button class=" row d-flex justify-content-center">Submit</button>
    </form>
@endsection

@section('footer')
    @include('footer')
@endsection