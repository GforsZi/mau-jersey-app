@foreach ($contents as $content)
    @switch($content['type'])
        @case('heading')
            <x-heading :data="$content['data']"/>
            @break
        @case('paragraph')
            <x-paragraph :data="$content['data']"/>
            @break
        @default

    @endswitch
@endforeach
