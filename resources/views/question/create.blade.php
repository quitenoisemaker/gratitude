@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="col-md-8">
            <div class="card p-4">
                    <form method="POST" action="{{ route('question.store') }}">
                        @csrf 
                        {{-- <input type="hidden" name="_method" value="PUT"> --}}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <label for="exampleSelect1">Category</label>
                                    <select class="form-control" id="exampleSelect1" name="category_id">
                                        @if (count($categories)>0)
                                        <option>Select Category</option>
                                           @foreach ($categories as $category)
                                        <option value={{$category->id}}>{{$category->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                              <div class="form-group col-md-12">
                                <label for="location">Question</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3"></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                <label >Option 1</label>
                                <input type="text" class="form-control" name="option_a">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Option 2</label>
                                <input type="text" class="form-control" name="option_b">
                              </div>
                              <div class="form-group col-md-6">
                                <label >Option 3</label>
                                <input type="text" class="form-control" name="option_c">
                              </div>
                              <div class="form-group col-md-6">
                                <label>Option 4</label>
                                <input type="text" class="form-control" name="option_d">
                              </div>
                          
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
