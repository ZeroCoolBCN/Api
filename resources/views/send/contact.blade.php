

@component('mail::message')
  <h1>Damia Solar</h1>
  <h3>{!! $content['name'] !!}</h3>
    {{$content['comment']}}

  @component('mail::table')
      | Población       | Teléfono         | Email  |
      | ------------- |:-------------:| --------:|
      | {!! $content['city'] !!}    | {!! $content['phone'] !!}     |{!! $content['mail'] !!}      |

  @endcomponent
@endcomponent

