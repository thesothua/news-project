<div class="form-group">
    <label for="post_title">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" autocomplete="off">
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>