# Environment Variables

|  Variable |  Description | Type  | Default Value |
| ------------ | ------------ | ------------ | ------------ |
@foreach($variables as $variable)
|  {{ $variable->name }} | {!! str_replace(['|', "\n"], ['&#124;', '<br>'], $variable->description) !!}  | {{ $variable->type }} | {{ $variable->defaultValue }} |
@endforeach