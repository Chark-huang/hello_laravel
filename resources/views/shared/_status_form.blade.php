<form action="{{route('statuses.store')}}" method="POST">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" name="content" id="" cols="30" rows="3" placeholder="聊聊新鲜事">{{ old('content') }}</textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>