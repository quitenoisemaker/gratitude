@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
      

                <table class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Category</th>
                        <th>Question</th>
                        <th>Options</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                        @if(count($questions)>0)

                            @foreach($questions as $question)
                                <tr>
                    
                                    <td>{{$question->category->name}} </td>
                                    <td>{{$question->question}}</td>
                                    <td>{{$question->option_a}}, {{$question->option_b}}, {{$question->option_c}}, {{$question->option_d}}</td>
                                    <td>
                                        <div class="d-flex">
                                        <a href="{{route('question.edit', $question->id)}}"><button type="button" class="btn btn-primary btn-sm m-1">Edit</button></a>

                                        <form method="POST" action="/question/{{$question->id }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm m-1">Delete</button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    

                    </tbody>
                </table>
         
        </div>
    </div>
</div>
@endsection
