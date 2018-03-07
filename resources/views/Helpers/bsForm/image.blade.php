
<?php
    $name = !empty($name) ? $name : '';
    $sub = !empty($sub) ? $sub : '';
    $path = url('public/uploads/');
    $url =  !empty($url) ? $url : 'unknown_image.png' ;
?>


<div class="form-group">
    <label>{{ trans('lang.select_image') }}</label>
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-default btn-file">
                {{ trans('lang.select_image') }} <input type="file" id="imgInp" name="{{ $name }}" value="{{ $url }}">
            </span>
        </span>
        <input type="text" name="{{ $name }}" class="form-control"  readonly value="{{ $url }}">
    </div>
    <img id='img-upload' class="img-responsive" src="{{ $path.'/'.$sub.$url }}"/>
</div>

