@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4">
                <h3>Edit question</h3>
                <form method="POST" action="/question/{{$question->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <label for="exampleSelect1">Category</label>
                                    <select class="form-control" id="exampleSelect1" name="category_id">
                                        
                                        <option selected disabled>{{$question->category->name}}</option>
                                        @if (count($categories)>0)
                                           @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                              <div class="form-group col-md-12">
                                <label for="location">Question</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3">{{$question->question}}</textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label >Option 1</label>
                                <input type="text" class="form-control" value="{{$question->option_a}}" name="option_a">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Option 2</label>
                                <input type="text" class="form-control" value="{{$question->option_b}}" name="option_b">
                              </div>
                              <div class="form-group col-md-6">
                                <label >Option 3</label>
                                <input type="text" class="form-control" value="{{$question->option_c}}" name="option_c">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Option 4</label>
                                <input type="text" class="form-control" value="{{$question->option_d}}" name="option_d">
                              </div>
                          
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
