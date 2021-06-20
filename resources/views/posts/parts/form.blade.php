
<div class="form-group">
    <input type="text" class="form-contril" name="title" value="{{old('title') ?? $post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea name="discr" rows="10" class="form-control" >{{old('discr') ?? $post->discr ?? ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
