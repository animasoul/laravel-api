@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
<img src="https://jobs.meta.mt/_next/image?url=%2Fmeta-logo-WHT-260x300.png&w=384&q=75" class="logo" alt="Jobs META Logo">
{{ $slot }}
@endif
</a>
</td>
</tr>
