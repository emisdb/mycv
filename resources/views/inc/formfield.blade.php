@if(isset($model['dataset']['id'])||isset($field['parent']))
    @if(is_array($model['dataset'][$field['name']]))
        value="{{$model['dataset'][$field['name']]['value']}}"
    @else
        value="{{$model['dataset'][$field['name']]}}"
    @endif
    @if($loop->first)
        autofocus
    @endif
@endif

