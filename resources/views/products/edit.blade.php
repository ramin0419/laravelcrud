@extends('layouts.app')

@section('main')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <div class="card mt-3 p-3">
        <h3 class="text-muted ">Product Edit#{{$product->name}}</h3>
        <Form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name',$product->name)}}">
            @if($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}
            </span>
            @endif
          </div>
          <div class="form-group">
            <label>Description</label>
            <Textarea class="form-control" name="description" rows="4">{{ old('description',$product->description)}}</Textarea>
            @if($errors->has('description'))
            <span class="text-danger">{{$errors->first('description')}}
            </span>
            @endif
          </div>
          <div class="from-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($errors->has('image'))
            <span class="text-danger">{{$errors->first('image')}}
            </span>
            @endif
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </Form>
      </div>
    </div>
  </div>
</div>
@endsection