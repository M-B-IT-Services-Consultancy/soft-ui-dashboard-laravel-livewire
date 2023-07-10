@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
{{public_path('assets/img/logo.png')}}
<img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('assets/img/logo.png'))) }}" class="logo" alt="{{env(APP_NAME)}}">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
